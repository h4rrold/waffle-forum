<?php

class Directories extends Model
{
    public function getAllDirectories()
    {
        $sql = "SELECT * FROM directories";
        $result = MyPDO::run($sql);
        return $result;
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
        if($_POST['id'] != '0')
        {
            $sql = "UPDATE directories SET name = ?, parent_id = ? WHERE directories.id = ?;";
            
            MyPDO::runWithoutFetch($sql, [$_POST['directoryname'], $_POST['parent_id'], $_POST['id']]);
        }
        else {
            //INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?, ?);
            $sql = "INSERT INTO directories (id, name, parent_id) VALUES (NULL, ?, ?);";
            MyPDO::runWithoutFetch($sql, [$_POST['directoryname'], $_POST['parent_id']]);
        }
    }
}