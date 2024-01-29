<?php

class Circle{

    private $radius;
    //private $pi;
    private static $pi=3.14;

    public function __construct($radius /*, $pi*/){
        $this->radius = $radius;
        //$this->pi = $pi;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }
    /*
    public function getPpi(){
        return $this->pi;
    }

    public function setPi($pi){
        $this->pi = $pi;
    }
    */

    public function area(){
        //$area = $this->pi * $this->radius ** 2;
        //$area = $this->pi * pow($this->radius,2);
        $area = static::$pi * $this->radius ** 2;
        return $area;
    }
}