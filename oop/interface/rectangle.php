<?php

require_once 'forms.php';

class Rectangle implements Forme{

    private $width;
    private $length;

    public function __construct($width, $length){
        $this->width = $width;
        $this->length = $length;
    }


    public function area(){
        return $this->length * $this->width;
    }
}