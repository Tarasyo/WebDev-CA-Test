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

                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Date of Creation</th>


                            </tr>
                            </thead>

                            <tbody>

                            <?php $query = "SELECT * FROM customers";
                            $select_booking_slots = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($select_booking_slots)){


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
                                echo "</tr>";
                            }?>


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