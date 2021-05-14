<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
         <img src="images/undraw_secure_login_pdn4.png" alt="">
        </div>
        <div class="login-container">
            <form action="includes/control.php" class="form-container" method="post">
                <h1>Login</h1>
                <div class="input-container">
                    <label for="">username</label><br>
                    <input type="Name" name="username" placeholder="username" required>
                </div>
                <div class="input-container">
                    <label for="">password</label><br>
                    <input type="password" name="password_1" placeholder="password" required>
                </div>

                <button class="btn" type="submit" name="login" value="login">Sign in
                    <a href="index.php"></a>
                </button><br>
                <p></p>
                <p></p>
                <p></p>
                <p>Not yet a member? <a href="signup.php">Sign up</a></p>
                
            </form>
             
         
 

        </div>
    </div>

</body>
</html>