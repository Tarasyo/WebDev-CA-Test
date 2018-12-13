<?php include "includes/admin_header.php"?>

    <div id="wrapper">



        <div id="page-wrapper">
            <?php include "includes/admin_navigation.php"?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome
                            <small>Subheading</small>
                        </h1>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Barbers</th>
                                <th>Date</th>
                                <th>Availability</th>
                                <th>Address</th>
                                <th>City</th>


                            </tr>
                            </thead>

                        <tbody>


     <?php

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


      ?>
                        </tbody>
                        </table>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include "includes/admin_footer.php"?>