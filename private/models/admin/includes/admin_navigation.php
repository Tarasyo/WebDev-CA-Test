<?php
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Admin Dashboard</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li><a href="../../../index.php">Home</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-table"></i> Bookings</a>
            </li>
            <li>
                <a href="booking_slots.php"><i class="fa fa-fw fa-edit"></i> Available Bookings</a>
            </li>
            <li>
                <a href="complaints.php"><i class="fa fa-fw fa-desktop"></i> Complains</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="users"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="barbers.php">Barbers</a>
                    </li>
                    <li>
                        <a href="customers.php">Customers</a>
                    </li>
                </ul>
            </li>
            <li class="newAdmin">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Add New Admin</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
