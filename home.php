<?php
require 'config/session.php';
if(!isset($_SESSION['login-user'])){
    header("location:login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home Page</title>
</head>
<body>
    
      <!-- ============================================= NAV =============================================== -->

      <nav>
        <div class="contaienr nav__container">
            <a href="" class="nav__logo">Demo</a>

            <ul class="nav__items">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            
            <a href="logout.php" class="btn red">Log out</a>
        </div>
    </nav>


    <!-- ========================================  END OF NAV ======================================== -->


    <!-- ======================================= USER DETAILS ============================================= -->

    <section class="section__details">
        <div class="container table__container-details">


            <h2>User Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sr no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>1</td>
                        <td><?= $_COOKIE['firstname'] ?></td>
                        <td><?= $_COOKIE['lastname']  ?></td>
                        <td><?= $_COOKIE['email']  ?></td>
                        <td><?= $_COOKIE['password']  ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

      <!-- ======================================= End of  USER DETAILS ============================================= -->


</body>
</html>