<?php

require 'config/session.php';

if (isset($_COOKIE["firstname"]) || isset($_COOKIE["lastname"]) || isset($_COOKIE["email"]) || isset($_COOKIE["password"])) {
    $firstname = $_COOKIE['firstname'];
    $lastname = $_COOKIE['lastname'];
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
} else {
    $email = $_SESSION['login-data']['email'] ?? null;
    $password = $_SESSION['login-data']['password'] ?? null;
    unset($_SESSION['login-data']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="form__section">
        <div class="container form__section-container">
            <h2>Log in</h2>

            <?php if (isset($_SESSION['login'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['login'];
                        unset($_SESSION['login']);
                        ?>
                    </p>
                </div>
            <?php elseif (isset($_SESSION['reg-success'])) : ?>
                <div class="alert__message success">
                    <p>
                        <?= $_SESSION['reg-success'];
                        unset($_SESSION['reg-success']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="login-logic.php" method="post">
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email" class="mg">
                <input type="password" value="<?= $password ?>" name="password" placeholder="Password" class="mg">
                <button type="submit" name="submit" class="btn mg">Log in</button>

                <small>Don't have account? <a href="index.php">Registration</a></small>

            </form>
        </div>
    </div>

</body>

</html>