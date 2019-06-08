<?php

class Forum extends Model
{
    private function changeForumLogo()
    {
        $target_dir = "../";
        $target_file = $target_dir . "logo.jpg";
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["sitelogo"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                echo "File is not an image.";
                return false;
            }
        }
        
        if ($_FILES["sitelogo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            return false;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return false;
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (move_uploaded_file($_FILES["sitelogo"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        //die();
        return $_FILES["sitelogo"]["name"];
    }
    private function changeForumFavicon()
    {
        $target_dir = "../";
        $target_file = $target_dir . "favicon.ico";
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["siteicon"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                echo "File is not an image.";
                return false;
            }
        }
        
        if ($_FILES["siteicon"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            return false;
        }
        if($imageFileType != "ico") {
            echo "Sorry, only ICO files are allowed.";
            return false;
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (move_uploaded_file($_FILES["siteicon"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        return $_FILES["siteicon"]["name"];
    }

    public function updateForumSettings()
    {
        if(isset($_FILES['sitelogo'])) $this->changeForumLogo();
        if(isset($_FILES['siteicon'])) $this->changeForumFavicon();
       // die("ebat");
    }
}