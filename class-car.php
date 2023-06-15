<?php

class Car
{


    public $color;
    public $model;
    private $km;

    private $constructYear = 2000;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function setKm($km)
    {
        $this->km = $km;
    }
    public function getConstructYear()
    {
        return $this->constructYear;
    }

    public function setConstructYear($constructYear)
    {
        if ($constructYear >= 2000) {
            $this->constructYear = $constructYear;
        } else {
            $this->constructYear < 2000;
            echo "La marque n'existait pas";
            ;
        }
    }

}





?>