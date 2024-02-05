<?php
$title = "Create New Student";
ob_start();
?>
<form action="store.php" method="post">
<div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname">
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lastname">
</div>
<div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age">
</div>
<div class="form-group">
    <label>Login</label>
    <input type="text" class="form-control" name="login">
</div>
<!--
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
</div>
-->
<div class="form-group">
    <input type="submit" class="btn btn-success my-2" value="Added" name="added">
</div>
</form>
<?php
$content = ob_get_clean();
require_once "View/layout.php";
?>