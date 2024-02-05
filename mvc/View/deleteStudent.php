<?php

$title = "Delete Student";
ob_start();
?>
<div class="container d-flex  ">
<h4>Delete This Student ? </h4>
<div class="justify-conent-around mx-3 px-2">
<a href="destroy.php?id=<?php echo $id ;?>" class="btn btn-success">-  YES  -</a>
<a href="index.php" class="btn btn-danger">-  NO  -</a>
</div>
</div>
<?php
$content = ob_get_clean();
require_once 'View/layout.php';

