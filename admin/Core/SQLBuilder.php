<?php
require_once 'MyPDO.php';

class SQLBuilder
{
    private $model;
    private $table = [];
    private $order;
    private $ord_attr;
    private $whereCol = [];
    private $whereOp = [];
    private $whereVal = [];
    private $whereLog = [];
    private $stm;
    private $select = [];

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }


    public static function table(...$tab)
    {
        $me = new self();
        $me->table = $tab;
        return $me;
    }

    public function where($col, $opr, $val, $log = '')
    {
        $this->whereCol[] = $col;
        $this->whereOp[] = $opr;
        $this->whereVal[] = $val;
        $this->whereLog[] = $log;
        return $this;
    }

    public function order($ord, $atr = '')
    {
        $this->order = $ord;
        $this->ord_attr = $atr;
        return $this;
    }

    public static function select(...$sel)
    {
        $me = new self();
        $me->select = $sel;
        return $me;
    }

    public function where_s($num)
    {
        $this->stm .= $this->whereCol[$num] . ' ';
        $this->stm .= $this->whereOp[$num] . ' ';
        $this->stm .= '?' . ' ';
        $this->stm .= $this->whereLog[$num] . ' ';
    }

    private function compiler()
    {
        if (empty($this->select)) {
            $this->stm = 'SELECT * FROM ';
        } else {
            $this->stm = 'SELECT ';
            foreach ($this->select as $value) {
                $this->stm .= $value . '.';
            }
            $this->stm .= '* FROM ';
        }

        foreach ($this->table as $key => $value) {
            if ($key != 0) $this->stm .= ',';
            $this->stm .= '`' . $value . '` ';
        }

        $this->stm .= 'WHERE ';
        foreach ($this->whereCol as $key => $value) {
            $this->where_s($key);
        }
        if ($this->order) {
            $this->stm .= 'ORDER BY ';
            $this->stm .= $this->order . ' ' . $this->ord_attr;
        }
    }

    public function echo()
    {
        echo $this->stm;
    }

    public function get()
    {
        if ($this->model) {
            $this->compiler();
            echo $this->stm;
            MyPDO::connect('mysql:host=localhost;dbname=Site;charset=utf8', 'root', 'admin', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
            $data = MyPDO::run($this->stm, $this->whereVal);
            unset($data['rowCount']);
            $result = [];
            foreach ($data as $note) {
                $result[] = $this->model->newObject();
                end($result)->setAttributes($note);
            }
            return $result;
        }
    }
}

