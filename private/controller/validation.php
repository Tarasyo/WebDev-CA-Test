<?php session_start() ?>
<?php


function adminValid($email, $password){

    global $connection;

    $query = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
    $select_admin_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_admin_query)){

        $db_email = $row['email'];
        $db_pass = $row['password'];


        if($email == $db_email && $password == $db_pass){

            $_SESSION['name'] = "Admin";


            return true;
        }else{
            return false;
        }


    }

}

function customerValid($email, $password){

    global $connection;

    $query = "SELECT * FROM customers WHERE email = '{$email}' AND password = '{$password}'";
    $select_customers_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_customers_query)){

        $db_email = $row['email'];
        $db_pass = $row['password'];
        $db_first_name = $row['first_name'];
        $db_last_name = $row['last_name'];

        if($email == $db_email && $password == $db_pass){

            $_SESSION['name'] = "$db_first_name $db_last_name";

            return true;
        }else{
            return false;
        }


    }

}

function barberValid($email, $password){

    global $connection;

    $query = "SELECT * FROM barber WHERE email = '{$email}' AND password = '{$password}'";
    $select_barber_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_barber_query)){

        $db_email = $row['email'];
        $db_pass = $row['password'];
        $db_status = $row['approved_status'];
        $db_shop_name = $row['shop_name'];
        if($email == $db_email && $password == $db_pass && $db_status == 'approved'){


            $_SESSION['name'] = $db_shop_name;

            return true;
        }else{
            return false;
        }


    }

}








?>