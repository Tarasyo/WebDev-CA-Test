<?php  include "private/controller/db.php"; ?>
 <?php  include "public/includes/header.php"; ?>




    
 
    <!-- Page Content -->
    <div class="container">
        <?php

        if(isset($_POST['submit'])){

           $email = $_POST['email'];
           $password = $_POST['password'];
           $first_name = $_POST['first_name'];
           $last_name = $_POST['last_name'];
           $phone = $_POST['phone'];
           $date = $_POST['date'];

            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);
            $first_name = mysqli_real_escape_string($connection, $first_name);
            $last_name = mysqli_real_escape_string($connection, $last_name);
            $phone = mysqli_real_escape_string($connection, $phone);
            $date = mysqli_real_escape_string($connection, $date);
        }

        $query = "SELECT randSalt FROM customers";
        $select_randSalt_query =  mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($select_randSalt_query)){

                $randSalt = $row['randSalt'];
        }

        $query = "INSERT INTO customers ()"

        ?>
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="formclass">
                <h1>Register</h1>
                    <form role="form" action="registrationC.php" method="post" id="login-form" autocomplete="off">
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="sr-only">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="sr-only">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Second Name">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="date" class="sr-only">Today Date</label>
                            <input type="text" name="date" id="date" class="form-control" placeholder="YYYY-MM-DD">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>

        <!-- jQuery -->
        <script src="./../templates/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./../templates/js/bootstrap.min.js"></script>


<?php include "public/includes/footer.php";?>
