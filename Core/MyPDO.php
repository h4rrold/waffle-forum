<?php
require_once 'Singleton.php';
class MyPDO
{
    use Singleton;

    public static function connect($dsn, $login, $pass, $opt = [])
    {
        try {
            //$opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            self::$instance = new PDO($dsn, $login, $pass, $opt);
        } catch
        (PDOException $e) {
            print("Error! " . $e->getMessage() . "<br>");
            die();
        }
    }

    public static function run($sql, $args = [])
    {
        
        $sth = self::getInstance()->prepare($sql);
        $sth->execute($args);
        $data = $sth->fetchAll();
        //$data['rowCount'] = $sth->rowCount();
        return $data;
    }
    public static function first($sql, $args = [])
    {

        $sth = self::getInstance()->prepare($sql);
        $sth->execute($args);
        $data = $sth->fetch();
        //$data['rowCount'] = $sth->rowCount();
        return $data;
    }
    public static function runWithoutFetch($sql, $args = [])
    {
        
        $sth = self::getInstance()->prepare($sql);
        $sth->execute($args);
        //$data['rowCount'] = $sth->rowCount();
        return $sth;
    }
    public static function insert($sql, $args = [])
    {
        if (empty($args)) {
            return self::getInstance()->query($sql);
        } else {
            $sth = self::getInstance()->prepare($sql);
            $sth->execute($args);
            return $sth;
        }
    }


}

