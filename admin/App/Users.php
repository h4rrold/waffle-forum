<?php

class Users extends Model
{
    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
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
        $target_dir = "..\\uploads\\user$id\\";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        if(is_dir($target_dir))
        {
            mkdir($target_dir, 0700);
        }
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                echo "File is not an image.";
                return false;
            }
        }
        if (file_exists($target_file)) {
            return $_FILES["avatar"]["name"];
        }
        if ($_FILES["avatar"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            return false;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return false;
        }
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        return $_FILES["avatar"]["name"];
    }
    public function updateUserById()
    {  
        $isAvatar = false;
        $id = $_POST['id'];
        if(isset($_FILES["avatar"])) $isAvatar = $this->uploadAvatar($id);
        $sql = "UPDATE users SET ";
        $params = [];
        if($isAvatar)
        {
            $sql .= "avatar = ?, ";
            $params[] = "https://forum-waffle.herokuapp.com/uploads/user$id/$isAvatar";
        }
        foreach($_POST as $key => $value)
        {
            if($value != "" && $key != "id")
            {
                $sql .= "$key = ?, ";
                if($key != "pass") $params[] = $value;
                else $params[] = password_hash($value, PASSWORD_DEFAULT);
            }
        }
        $params[] = $id;
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE users.id = ?;";
        //echo($sql);
        MyPDO::runWithoutFetch($sql, $params);
    }

    /*
    public function addNewUser()
    {
        $sql = "INSERT INTO users (id, nickname, email, pass, salt, last_login, last_ip, avatar, group_id, is_online, registration_date, amount_of_messages, bio) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        MyPDO::run($sql);
    }*/ //todo
}