<?php

class Forum extends Model
{
    private function changeForumLogo()
    {
        $target_dir = "../";
        $target_file = $target_dir . "logo.jpg";
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["sitelogo"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = true;
            } else {
                return [false, "File is not an image."];
            }
        }
        
        if ($_FILES["sitelogo"]["size"] > 500000) {
            return [false, "Sorry, your file is too large."];
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            return [false, "Sorry, only JPG, JPEG, PNG & GIF files are allowed."];
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (move_uploaded_file($_FILES["sitelogo"]["tmp_name"], $target_file)) {
           // echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
        } else {
            return [false, "Sorry, there was an error uploading your file."];
        }
        //die();
        return [true, $_FILES["sitelogo"]["name"]];
    }
    private function changeForumFavicon()
    {
        $target_dir = "../";
        $target_file = $target_dir . "favicon.ico";
        $uploadOk = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["siteicon"]["tmp_name"]);
            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                return [false, "File is not an image."];
            }
        }
        
        if ($_FILES["siteicon"]["size"] > 500000) {
            return [false, "Sorry, your file is too large."];
        }
        if($imageFileType != "ico") {
            return [false, "Sorry, only ICO files are allowed."];
        }
        if (file_exists($target_file)) {
            unlink($target_file);
        }
        if (move_uploaded_file($_FILES["siteicon"]["tmp_name"], $target_file)) {
        } else {
            return [false, "Sorry, there was an error uploading your file."];
        }
        return [true, $_FILES["siteicon"]["name"]];
    }

    public function updateForumSettings()
    {
        $response = [];
        if(isset($_FILES['sitelogo'])) $response[] = $this->changeForumLogo();
        if(isset($_FILES['siteicon'])) $response[] = $this->changeForumFavicon();
        return $response;
    }
}