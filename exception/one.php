<?php

$n2 = 9;
$n1 = 0;

try{
    if($n2 == 0)
        throw now Exception('Error : div on 0 !');
    else
        echo $n1/$n2;
}catch(Exception $e){
    echo $e ;
}
finally{
    echo 'Fin' ; 
}


?>

