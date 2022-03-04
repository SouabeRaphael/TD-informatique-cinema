<?php 
class Humain {
    public $age;
    public $name;
    public $sexe;
    function pipiDebout() {
        if ($this->sexe == "homme") {
            return true;
        }
        else {
            return false;
        }
    }
    function __construct($age, $name, $sexe)
    {
        $this->age = $age;
        $this->name = $name;
        $this->sexe = $sexe;
    }
}


$maxime = new Humain(19, "maxime", "femme");
var_dump($maxime->pipiDebout());
?>