<?php
// Process delete operation after confirmation
if(isset($_POST["product_id"]) && !empty($_POST["product_id"])){
    // Include config file
    require_once "../includes/connect.php";

    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE product_id = ?";
    
    if($stmt = mysqli_prepare($connect, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["product_id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: add-product.php? Deleted Successfully..!");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connect);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["product_id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: view-product.php? Parameter not found..!");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<style>
body{
    color:black;
    font-size:16px;
    background-color: rgba(250, 181, 135, 0.726);
}
#content{
    padding:1%;
    background:rgba(243, 207, 207, 0.288) 8%;
    color: rgb(80, 9, 9);
}
table{
    background:rgba(243, 207, 207, 0.288) 8%;
    color: rgb(80, 9, 9);
}
th{
    background-color: rgba(250, 181, 135, 0.726);
}
</style>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Delete Product</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger fade in">
                            <input type="hidden" name="product_id" value="<?php echo trim($_GET["product_id"]); ?>"/>
                            <p>Are you sure you want to delete this product?<p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="view-product.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>