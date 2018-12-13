
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <?php include "public/templates/header.php" ?>




        <div class="formclass">
            <div class="col-sm-6">
                <form action="private/controller/login.php" method="post">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="email" class="form-group">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-group">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

                </form>
            </div>
        </div>

        <?php include "public/templates/footer.php" ?>


