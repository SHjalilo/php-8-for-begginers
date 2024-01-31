<?php

require_once 'forms.php';

class Circle implements Forme{
    private $radius ;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area(){
        $area = $this->radius * $this->radius * M_PI;
        return $area;

    }

}