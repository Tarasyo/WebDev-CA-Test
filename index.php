

    <?php include "public/templates/header.php" ?>
    <?php require_once 'private/models/pdo/db.php';?>




        <div class="formclass">
            <form action = "" method = "post">
                <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

        </div>

        <?php include "public/templates/footer.php" ?>


