<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        src = "https://kit.fontawesome.com/64d58efce2.js"
        crossorigin = "anonymous"
    </script>
    <title>Categories</title>
</head>

<body>
    
    <div class="container">
        <div class="img-container">
            <img src="images/undraw_welcome_cats_thqn.png" alt="">
        </div>
        <div class="login-container">
            <form action="includes/control.php" method="POST" class="form-container">
                <h1>Signup</h1>
             
                <div class="input-container">
                    <label for="">User name</label><br>
                    <input type="Name" name="username" placeholder="username" >
                </div>

                <div class="input-container">
                    <label for="">Email</label><br>
                    <input type="email" name="email" placeholder="email" >
                </div>

                <div class="input-container">
                    <label for="">Password</label><br>
                    <input type="password" placeholder="password" name="password_1" required>
                </div>
                <div class="input-container">
                    <label for=""> Confirm password</label><br>
                    <input type="password" placeholder=" confirm password" name="password_2" required>
                </div>
                
                <button class="btn" type="submit" name="sign-up">Sign Up</button><br>
                <p>Already a member? <a href="login.php">Login</a></p>
                <button style="background:warning;" <?php "class=\"qty-up btn bg-light border rounded-circle\"" ?>><a href="index.php">Cancel</a></button>
            </form>
        
        
        
        </div>
    </div>

</body>

</html>