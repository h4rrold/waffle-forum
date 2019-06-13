<?php

class Users extends Model
{
    public function getAllUsers()
    {
        $sql = "SELECT users.*, groups.style FROM users LEFT JOIN groups on groups.id = users.group_id";
        $result = MyPDO::run($sql);
        return $result;
    }


    public function getUserById($id = null)
    {
        $id = $_GET['id'] ?? $id;
        $sql = "SELECT * FROM users WHERE id = ?";
        $result = MyPDO::run($sql, [$id]);
        return $result;
    }

    private function uploadAvatar($id)
    {
        $s3 = new Aws\S3\S3Client([
            'version'  => '2006-03-01',
            'region'   => 'us-east-2',
        ]);
        $bucket = getenv('S3_BUCKET')?: die('No "S3_BUCKET" config var in found in env!');
        $target_dir = "user$id/";
        $futurename = uniqid();
        $target_file = $target_dir . DIRECTORY_SEPARATOR . basename($_FILES["avatar"]["name"]);
        if(!is_dir($target_dir))
        {
            mkdir($target_dir, 0700);
        }
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                //echo "File is not an image.";
                return false;
            }
        }
        if (file_exists($target_file)) {
            return $_FILES["avatar"]["name"];
        }
        if ($_FILES["avatar"]["size"] > 500000) {
            //echo "Sorry, your file is too large.";
            return false;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return false;
        }
        $upload = $s3->upload($bucket, $target_dir . "$futurename.$imageFileType", fopen($_FILES['avatar']['tmp_name'], 'rb'), 'public-read');
        return htmlspecialchars($upload->get('ObjectURL'));
    }
    public function updateUserById()
    {  
        $response = [];
        $isAvatar = false;
        $id = $_POST['id'] ?? null;
        if($id == null)
        {
            $response[] = [false, $_GET];
            return $response;
        }
        if(isset($_FILES["avatar"]) && $_FILES['avatar']['name'] != '') $isAvatar = $this->uploadAvatar($id);
        $sql = "UPDATE users SET ";
        $params = [];
        if($isAvatar)
        {
            $response[] = [true, "Avatar changed successfully."];
            $sql .= "avatar = ?, ";
            $params[] = "$isAvatar";
            
        }
        else if(isset($_FILES["avatar"]) && $_FILES['avatar']['name'] != ''){
            $response[] = [false, "Bad avatar"];
        }
        foreach($_POST as $key => $value)
        {
            if($value != "" && $key != "id")
            {
                $sql .= "$key = ?, ";
                if($key != "pass") $params[] = $value;
                else 
                {
                    $bytes = random_bytes(5);
                    $salt = bin2hex($bytes);
                    $params[] = password_hash($value . $salt, PASSWORD_DEFAULT);
                    $sql .= "salt = ?, ";
                    $params[] = $salt;
                }
            }
        }
        $params[] = $id;
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE users.id = ?;";
        //echo($sql);
        MyPDO::runWithoutFetch($sql, $params);
        $response[] = [true, "Updated user with id = $id"];
        return $response;
    }

    /*
    public function addNewUser()
    {
        $sql = "INSERT INTO users (id, nickname, email, pass, salt, last_login, last_ip, avatar, group_id, is_online, registration_date, amount_of_messages, bio) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        MyPDO::run($sql);
    }*/ //todo
}