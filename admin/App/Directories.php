<?php

class Directories extends Model
{
    public function getAllDirectories()
    {
        
        $sql = "SELECT * FROM directories ORDER BY position";
        $result = MyPDO::run($sql);
        return $result;
    }
    public function updateAllDirectories()
    {
        $response = [];
        $data = $_POST['Dirs'] ?? '';
        foreach ($data as $dir) {
            $sql = "UPDATE directories SET position = ? WHERE id = ?";
            MyPDO::runWithoutFetch($sql, [$dir['position'], $dir['id']]);
            $response[] = [true, "Updated directory with id = " . $dir['id']];
        }
        //print_r($_POST);
        return $response;
    }

    public function getDirectoryById($id = null)
    {
        $id = $_GET['id'] ?? $id;
        $sql = "SELECT * FROM directories WHERE id=?";
        $result = MyPDO::run($sql, [$id]);
        return $result;
    }


    public function updateDirectoryById()
    {
        $response = [];
        $id = $_POST['id'] ?? null;
        $parent_id = $_POST['parent_id'];
        $name = $_POST['directoryname'];
        if($parent_id == $id && $id != '0')
        {
            $response[] = [false, "Directory parent_id cannot be like its own id."];
            return $response;
        }
        if($id != '0')
        {
            $sql = "UPDATE directories SET name = ?, parent_id = ? WHERE directories.id = ?;";
            
            MyPDO::runWithoutFetch($sql, [$_POST['directoryname'], $parent_id, $id]);
            $response[] = [true, "Updated directory with id = $id"];
        }
        else if($id == '0') {
            //INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?, ?);
            $sql = "INSERT INTO directories (id, name, parent_id) VALUES (NULL, ?, ?);";
            MyPDO::runWithoutFetch($sql, [$name, $parent_id]);
            $response[] = [true, "Added directory '$name'"];
        }
        else {
            $response = [false, "Please provide id of directory to be changed."];
        }
        return $response;
    }
}