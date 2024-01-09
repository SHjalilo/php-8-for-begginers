<?php

// herdoc for ""
$var = "test";
$url = <<<TYPE
https://linuxhint.com/?s=php //
$var   //   @@@
TYPE;

echo $url;

// nowdoc for ''
echo "<br>";
$var2 = "test";
$url2 = <<<'TYPE'
https://linuxhint.com/?s=php //
$var2   //   @@@
TYPE;

echo $url2;

?>
