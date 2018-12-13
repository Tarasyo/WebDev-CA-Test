<?php

 include 'private/models/pdo/db.php';

if(isset($_POST['submit'])){


$email = $_POST('email');
$password = $_POST('password');

$email = mysqli_real_escape_string(DB(), $email);
$password = mysqli_real_escape_string(DB(), $password);

}



?>