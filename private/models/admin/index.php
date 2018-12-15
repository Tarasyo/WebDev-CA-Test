<?php include "includes/admin_header.php"?>
    <div id="wrapper">



        <div id="page-wrapper">
            <?php include "includes/admin_navigation.php"?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome <?php echo $_SESSION['name']; ?>
                        </h1>


                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Barbers</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Status</th>




                            </tr>
                            </thead>

                            <tbody>

                            <?php  showBookings()?>


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