<?php

/**Переменные*/
$a = 10;
$b = '10';
if($a == $b) echo "Переменные a и b равные<br>";
$b *= 2;                /*демонстрация динамической типизации*/
echo  "\"10\" * 2 - ".gettype($b)."<br>";
$b *= 0.5;
echo  "$b * 0.5 - ".gettype($b)."<br>";
$var = 10 * "10.5";//double
echo "10 * \"10.5\" - ".gettype($var)."<br>";
$someVar  = 1 + "10 litres";//11
echo "1 + \"10 litres\"  = ".$someVar." - ".gettype($someVar)."<br>";
$anotherVar = 1 + "litres 10";
echo "1 + \" litres 10 \" = ".$anotherVar." - ".gettype($someVar)."<br>"."<br>";

/** ссылки*/
$c  = &$a;
echo "\$c = ".$c."<br>";
$d = &$c;
$d = 5;
echo "\$a = ".$a ." \"\$c = ".$c." \$d = ".$d."<br>";

/***Конкатенация*/
$fstStr = "Привет";
$scndStr = "Мир";
$result = $fstStr." ".$scndStr;
echo $result."<br>";
$fstStr .=" Мир";
echo $fstStr."<br>"."<br>";
/***Explode*/
$str = "Это строка, которая будет разделена, а потом снова соединена";
$strArr  = explode(",",$str);
echo $str."<br>";
foreach ($strArr as $key => $value)
    echo $key." : ".$value."<br>";
$str = implode($strArr);
echo $str."<br>";
/**Массивы*/

$arr = array(1,2,3);//индексированный массив
foreach ($arr as $val) echo "Переменная \$arr : " . $val."<br>";
unset($val);

$user = array("name" => "Ivan","surname"=>"Petrov","age" => 23);
echo "User: <br>";

foreach ($user as $key => $value):
    echo "{$key} => {$value}"."<br>";
    endforeach;
$userList = array(//многомерный массив
    array("name" => "Ivan","surname"=>"Petrov","age" => 23),
    array("name" => "Boris","surname"=>"Ivanov","age" => 26),
    array("name" => "Igor","surname"=>"Andreev","age" => 33)
);
foreach ($userList as $values):
    echo "User:<br>";
    foreach ($values as $key=>$value) echo $key." : ".$value." ";
    echo "<br>";
    endforeach;
/**     OOP */
class Vehicle{
    private $hasWheels,$wheelsAmount = 0,$hasEngine;
    public function __construct($wheelsAmount,$hasEngine)
    {
        if($wheelsAmount) {
            $this->hasWheels = true;
            $this->wheelsAmount = $wheelsAmount;
        }
        $this->hasEngine = $hasEngine;
    }
    public function getHasEngine()
    {
        return $this->hasEngine;
    }

    public function printInfoAboutVehicle(){
        echo "Наличие колес : ";
        echo($this->hasWheels)? "да - ".$this->wheelsAmount." шт. <br>" : "нет<br>";
        echo "Наличие двигателя : ";
        echo($this->hasEngine)? "да<br>" : "нет<br>";
    }
    public function __destruct()
    {

    }
}
class Car extends Vehicle
{
    private $power, $typeOfFuel;

    public function __construct($wheelsAmount, $hasEngine, $power, $typeOfFuel)
    {
        parent::__construct($wheelsAmount, $hasEngine);
        if ($this->getHasEngine())
            $this->power = $power;
        $this->typeOfFuel = $typeOfFuel;
    }

    public function printInfoAboutCar()
    {
        $this->printInfoAboutVehicle();
        echo "Мощность двигателя : ";
        echo ($this->getHasEngine()) ? $this->power . " лс.<br>" : "0<br>";
        echo "Вид топлива : ".$this->typeOfFuel."<br>";
    }
    public function __destruct()
    {
    }
}
class ElectroCar extends Car{
    private $charge;
    public function __construct($wheelsAmount, $hasEngine, $power, $typeOfFuel,$charge)
    {
        parent::__construct($wheelsAmount, $hasEngine, $power, $typeOfFuel);
        $this->charge = $charge;
    }
    public  function printInfoAboutCar()
    {
        parent::printInfoAboutCar();
        echo "Заряд батареи : ".$this->charge." кВт*ч<br>";
    }
    public function __destruct()
    {
    }
}

$vehicle = new Vehicle(3,true);
$vehicle->printInfoAboutVehicle();
$car = new Car(4,true,234,"дизель");
$car->printInfoAboutCar();
$ecar = new ElectroCar(4,true,267,"none",85);
$ecar->printInfoAboutCar();
class Singleton {
    private static $instance;
    private function __construct()
    {
    }
    public static function getInstance(){
        if (static::$instance === null) static::$instance = new static();
        return static::$instance;
    }
}
$mySingle = Singleton::getInstance();

?>


