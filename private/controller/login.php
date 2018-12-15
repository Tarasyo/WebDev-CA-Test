<?php

 include 'db.php';
 include 'validation.php';

 if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];


$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);



if(adminValid($email, $password)) {

    header('Location: ../models/admin/index.php');

}elseif (barberValid($email, $password)){

    header('Location: ../models/barber/index.php');

 }elseif (customerValid($email, $password)){

    header('Location: ../models/customer/index.php');


}else{ die("WRONG PASSWORD OR EMAIL" . mysqli_error($connection));}




 }


 ?>