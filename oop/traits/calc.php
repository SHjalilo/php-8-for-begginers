<?php

require_once "divTrait.php";
require_once "addTrait.php";
require_once "mulTrait.php";

class Calc{

    use DivTrait,AddTrait,MulTrait;
}