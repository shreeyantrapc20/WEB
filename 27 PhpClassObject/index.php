<?php 

class Car{
    var $name = "";
    var $model = "";
    
    function setCarInfo($name, $model){
        $this->name = $name;
        $this->model = $model;
    }
    
    function getCarInfo(){
        echo "Car name: ".$this->name." Model: ".$this->model;
    }
}

$mercedes = new Car();
$mercedes->setCarInfo("Mercedes","3400");
$mercedes->getCarInfo();
?>