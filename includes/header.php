<?php
session_start();
//include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="stylecart6.css">
    <link rel="stylesheet" href="styles6.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/boxicons.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css"> !-->
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?
    family=Poppins:wght@300;400;500;600;700&display=swap">
    </head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="img/https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="img/https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="img/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="img/homepage.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Phone Accessories Store</title>
</head>
    
    <div class="main">
    <nav>
        <div class="lod">
           <img src="../images/co.jpg" alt="" class="tt">
        </div> 
         <div class="nav-link">
            <ul>
                <li><a href=""></a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="Phones.php">Phones</a></li>
                <li><a href="Accessories.php">Accessories</a></li>
                 <li>&nbsp; 
                <div class="input-group1">
                <a href="cart.php">
                <div class="cart_count ">

                <?php
                echo '<i class="fas fa-shopping-cart fa-1.8x text-center" ></i>';
                    if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                        echo "<span id=\"cart_count\" class=\"text-primary \">$count</span>";
                        } else {
                        echo "<span id=\"cart_count\" class=\"text-primary\">0</span>";
                    }

                    ?>
                </div>  
                </a>
                </div>
                </a>
                </li>
                <li><a href="signup.php"> REGISTER</a></li>
               
                <li width="fit-content"><a href="login.php">
                 <?php
                    if (!isset($_SESSION['username'])) {
                      echo "<p  class=\"nav-item ml-md-3\">
                            <a class='px-2' class=\"btn login-up\" href=\"login.php\">
                            <i class='fas fa-user-circle'></i>LOGIN</a>
                                </p>";
                                
                        } else {
                            echo " <p  class=\"nav-item ml-md-3\">
                                <a class='px-1' class=\"btn btn-primary nav-link\" href=\"index.php?\">
                                <i class='fas fa-user-circle'></i>(" . $_SESSION['username'] . ")<b>-Logout</a>
                                </p>";
                                
                        }
                        ?>
                </a></li>
        </ul>
        </div>

    </nav>