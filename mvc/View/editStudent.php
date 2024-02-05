<?php

$title = "Edit Student";

ob_start();
//var_dump($std);
?>
<form action="update.php" method="post">
<div class="form-group">
    <input type="hidden" class="form-control" name="id" value="<?= $std->id ?>">
</div>
<div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" value="<?= $std->firstname ?>">
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lastname" value="<?= $std->lastname ?>">
</div>
<div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age" value="<?= $std->age ?>">
</div>
<div class="form-group">
    <label>Login</label>
    <input type="text" class="form-control" name="login" value="<?= $std->login ?>">
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success my-2" value="Send Update" name="edit">
</div>
</form>
<?php
$content = ob_get_clean();
require_once 'View/layout.php';
