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
                            <?php echo $_SESSION['name']; ?>
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

            <?php ShowBooking_slots();?>


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