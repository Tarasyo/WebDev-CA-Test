
<?php

function showBooking_slots() {

    global $connection;

     $query = "SELECT shop_name, time_stamp, availability, address, city FROM barber b ";
     $query .= "JOIN booking_slots bs  ON b.b_id = bs.b_id JOIN location l ON b.b_id = l.b_id";
     $select_booking_slots = mysqli_query($connection, $query);

     while($row = mysqli_fetch_assoc($select_booking_slots)){


         $shop_name = $row['shop_name'];
         $date = $row['time_stamp'];
         $availability = $row['availability'];
         $address = $row['address'];
         $city = $row['city'];

         echo "<tr>";
         echo "<td>$shop_name</td>";
         echo "<td>$date</td>";
         echo "<td>$availability</td>";
         echo "<td>$address</td>";
         echo "<td>$city</td>";
         echo "</tr>";
     }

}

function showCustomers() {
        global $connection;

    $query = "SELECT * FROM customers";
    $select_customers = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_customers)){


        $c_id = $row['c_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
        $phone = $row['phone'];
        $date_sign_in = $row['date_of_account_creation'];

        echo "<tr>";
        echo "<td>$c_id</td>";
        echo "<td>$first_name</td>";
        echo "<td>$last_name</td>";
        echo "<td>$email</td>";
        echo "<td>$password</td>";
        echo "<td>$phone</td>";
        echo "<td>$date_sign_in</td>";
        echo "<td><a href='customers.php?delete={$c_id}'>Delete</a></td>";
        echo "</tr>";
    }
    if(isset($_GET['delete'])) {

        $the_c_id = $_GET['delete'];

        $query = "DELETE FROM customers WHERE c_id = {$the_c_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: customers.php");
    }

}

function showBarbers() {

    global $connection;

    $query = "SELECT * FROM barber b JOIN location l ON b.b_id = l.b_id";
    $select_barbers = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_barbers)){


        $b_id = $row['b_id'];
        $shop_name = $row['shop_name'];
        $email = $row['email'];
        $password = $row['password'];
        $phone = $row['phone'];
        $status = $row['approved_status'];
        $date_sign_in = $row['date_of_account_creation'];
        $address = $row['address'];
        $city = $row['city'];

        echo "<tr>";
        echo "<td>$b_id</td>";
        echo "<td>$shop_name</td>";
        echo "<td>$email</td>";
        echo "<td>$password</td>";
        echo "<td>$phone</td>";
        echo "<td>$status</td>";
        echo "<td>$date_sign_in</td>";
        echo "<td>$address</td>";
        echo "<td>$city</td>";
        echo "<td><a href='barbers.php?delete={$b_id}'>Delete</a></td>";
        echo "<td><a href='barbers.php?approved={$b_id}'>Approved</a></td>";
        echo "<td><a href='barbers.php?reject={$b_id}'>Reject</a></td>";
        echo "</tr>";
    }

    if(isset($_GET['delete'])) {

    $the_b_id = $_GET['delete'];

    $query = "DELETE FROM barber WHERE b_id = {$the_b_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: barbers.php ");
    }
    if(isset($_GET['approved'])) {

        $the_b_id = $_GET['approved'];

        $query = "UPDATE barber SET approved_status ='approved' WHERE b_id = {$the_b_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: barbers.php ");
    }
    if(isset($_GET['reject'])) {

        $the_b_id = $_GET['reject'];

        $query = "UPDATE barber SET approved_status ='reject' WHERE b_id = {$the_b_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: barbers.php ");

    }
}

function showCoplaints() {

    global $connection;

    $query = "SELECT shop_name, first_name, last_name, complaint_id, complaint FROM complaints co ";
    $query .= "JOIN barber b  ON co.b_id = b.b_id JOIN customers c ON co.c_id = c.c_id";
    $select_complaints = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_complaints)){

        $co_id = $row['complaint_id'];
        $shop_name = $row['shop_name'];
        $complaint = $row['complaint'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];

        echo "<tr>";
        echo "<td>$co_id</td>";
        echo "<td>$shop_name</td>";
        echo "<td>$complaint</td>";
        echo "<td>$first_name $last_name</td>";
        echo "</tr>";
    }

}
function showBookings() {

    global $connection;

    $query = "SELECT shop_name, time_stamp, booking_status, address, city, first_name, last_name FROM booking bo ";
    $query .= "JOIN barber b ON b.b_id = bo.b_id JOIN location l ON b.b_id = l.b_id JOIN customers c ON c.c_id = bo.c_id";
    $select_bookings = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_bookings)){


        $shop_name = $row['shop_name'];
        $date = $row['time_stamp'];
        $booking_status = $row['booking_status'];
        $address = $row['address'];
        $city = $row['city'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];

        echo "<tr>";
        echo "<td>$shop_name</td>";
        echo "<td>$address $city</td>";
        echo "<td>$date</td>";
        echo "<td>$first_name $last_name</td>";
        echo "<td>$booking_status</td>";


        echo "</tr>";
    }

}





?>

