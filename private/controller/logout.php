<?php session_start() ?>

<?php

$_SESSION['name'] = null;
$_SESSION['id'] = null;

header('Location: ../../index.php');

?>