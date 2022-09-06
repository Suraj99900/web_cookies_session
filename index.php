<?php
require 'config/session.php';

setcookie("firstname", "",-1,"/");
setcookie("lastname", "",-1,"/");
setcookie("email", "",-1,"/");
setcookie("password", "",-1,"/");

//get data back if there was any problem
$firstname = $_SESSION['reg-data']['firstname'] ?? null;
$lastname = $_SESSION['reg-data']['lastname'] ?? null;
$email = $_SESSION['reg-data']['email'] ?? null;
$password = $_SESSION['reg-data']['password'] ?? null;
unset($_SESSION['reg-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Registration Form</title>
</head>

<body>

    <div class="form__section">
        <div class="container form__section-container">
            <h2>Registration</h2>

            <!-- SHOWING ERROR MESSAGE ON THE SCREEN -->

            <?php if (isset($_SESSION['reg'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['reg'];
                        unset($_SESSION['reg']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="registration-logic.php" method="POST">
                <input type="text" value="<?= $firstname ?>" name="firstname" placeholder="First Name" class="mg">
                <input type="text" value="<?= $lastname ?>" name="lastname" placeholder="Last Name" class="mg">
                <input type="email" value="<?= $email ?>" name="email" placeholder="Enter your valid Email..." class="mg">
                <input type="password" value="<?= $password ?>" name="password" placeholder="Enter your password" class="mg">

                <button type="submit" name="submit" class="btn mg">Registration</button>

                <small>Already have an account? <a href="login.php">Sign In</a></small>

            </form>

        </div>
    </div>

</body>

</html>