<?php

class Constants{
    // const : class attr
    const pi = 3.14;

    public function show(){
        echo self::pi;
    }

}

$con1 = new Constants();
$con1->show();
echo "<br>";
echo Constants::pi;
