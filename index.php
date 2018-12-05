<link rel="stylesheet" href="view/css/normalize.css">
<link href='https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400italic,700italic,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="view/css/main.css">
<link rel="stylesheet" href="view/css/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "view/templates/header.php" ?>
    <?php require_once 'models/pdo/db.php';?>


        <div class="formclass">
            <form action = "" method = "post">
                <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

        </div>

        <?php include "view/templates/footer.php" ?>

  </body>
</html>
