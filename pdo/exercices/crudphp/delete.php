<?php

require_once 'db.php';

$id = $_GET['id'];

$sql = $pdo->prepare('DELETE FROM Person WHERE PersonID =?');
$sql->execute([$id]);
header('location: index.php');