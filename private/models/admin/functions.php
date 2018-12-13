
<?php

function getBooking_slots() {

    global $connection;

     $query = "SELECT shop_name, time_stamp, availability, address, city FROM barber b JOIN booking_slots bs  ON b.b_id = bs.b_id JOIN location l ON b.b_id = l.b_id";
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



?>

