<?php
$title = "Student List";
ob_start();
?>
<!--<a href="create.php" class="btn btn-primary">Add</a>-->
<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Login</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach( $std as $s ): ?>
        <tr>
            <td> <?= $s->id ?> </td>
            <td> <?= $s->lastname ?> </td>
            <td> <?= $s->firstname ?> </td>
            <td> <?= $s->age ?> </td>
            <td> <?= $s->login ?> </td>
            <td>
                <a href="edit.php?id=<?php echo $s->id ?>" class="btn btn-success btn-sm">Update</a>
                <a href="delete.php?id=<?php echo $s->id ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require_once "View/layout.php";
?>