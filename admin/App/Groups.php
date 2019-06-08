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
        $response = [];
        $id = $_POST['id'] ?? null;
        $groupname = $_POST['groupname'] ?? null;
        if($groupname == null || $id == null)
        {
            $response[] = [false, "Bad request."];
            return $response;
        }

        if($id != '0')
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
            $response[] = [true, "Updated group with id = $id"];
        }
        else if($id == '0'){
            //INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?, ?);
            $sql = "INSERT INTO groups (id, name, style) VALUES (NULL, ?, ?);";
            MyPDO::runWithoutFetch($sql, [$groupname, $_POST['groupstyle']]);
            $response[] = [true, "Added new group with name = $groupname"];
        }
        else 
        {
            $response[] = [false, "Please provide id of directory to be changed."];
        }
        return $response;
    }
}