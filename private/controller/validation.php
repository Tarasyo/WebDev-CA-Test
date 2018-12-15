
<?php


function adminValid($email, $password){

    global $connection;

    $query = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
    $select_admin_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_admin_query)){

        $db_email = $row['email'];
        $db_pass = $row['password'];

        if($email == $db_email && $password == $db_pass){
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

        if($email == $db_email && $password == $db_pass){
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

        if($email == $db_email && $password == $db_pass && $db_status == 'approved'){
            return true;
        }else{
            return false;
        }


    }

}








?>