<?php
//

if(!isset($_GET['id']) && !isset($_GET['name'])) {

    echo " page not exists ";

}else{

    echo "car name is : " . $_GET['name'] ;

}


?>
