<?php


class Groups extends Model
{
    public function getAllGroups()
    {
        $sql = "SELECT * FROM groups";
        $result = MyPDO::run($sql);
        return $result;
    }

    public function getGroupById($id = null)
    {
        $id = $_GET['id'] ?? $id;
        $sql = "SELECT * FROM groups WHERE id=?";
        $result = MyPDO::run($sql, [$id]);
        return $result;
    }


    public function updateGroupById()
    {
        if($_POST['id'] != '0')
        {
            $sql = "UPDATE groups SET ";
            $params = [];
            foreach($_POST as $key => $value)
            {
                if($key != "id")
                {
                    $sql .= substr($key, 5) . " = ?, ";
                    $params[] = $value;
                }
            }
            $params[] = $_POST['id'];
            $sql = substr($sql, 0, -2);
            $sql .= " WHERE groups.id = ?;";
            //echo($sql);
            MyPDO::runWithoutFetch($sql, $params);
        }
        else {
            //INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?, ?);
            $sql = "INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?);";
            MyPDO::runWithoutFetch($sql, [$_POST['groupname'], $_POST['groupstyle']]);
        }
    }
}