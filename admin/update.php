<?php
// Include config file
require_once "../includes/connect.php";

// Define variables and initialize with empty values
$product_name = $product_type = $product_store = "";
$name_err = $product_type_err = $p_store_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["product_id"]) && !empty($_POST["product_id"])){
    // Get hidden input value
    $product_id = $_POST["product_id"];
    
    // Validate product_name
    $input_name = trim($_POST["product_name"]);
    if(empty($input_name)){
        $name_err = "Please enter product name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid product name.";
    } else{
        $product_name = $input_name;
    }
    
    // Validate product_type product_type
    $input_product_type = trim($_POST["product_type"]);
    if(empty($input_product_type)){
        $product_type_err = "Please enter an product type.";     
    } else{
        $product_type = $input_product_type;
    }
    
    // Validate product_store
    $input_p_store = trim($_POST["product_store"]);
    if(empty($input_p_store)){
        $p_store_err = "Please enter the Product Store.";     
    } elseif(!ctype_digit($input_p_store)){
        $p_store_err = "Please enter a positive integer value.";
    } else{
        $product_store = $input_p_store;
    }
    
    $input_p_price = trim($_POST["product_price"]);
    if(empty($input_p_price)){
        $p_store_err = "Please enter the Product Price/Cost.";     
    } elseif(!ctype_digit($input_p_price)){
        $p_store_err = "Please enter a positive integer value.";
    } else{
        $product_price = $input_p_price;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($product_type_err) && empty($p_store_err)){
        // Prepare an update statement
        $sql = "UPDATE products SET product_name=?, product_type=?, product_store=?, product_price=? WHERE product_id=?";
         
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_product_type, $param_p_store, $param_p_price , $param_id);
            
            // Set parameters
            $param_name = $product_name;
            $param_product_type = $product_type;
            $param_p_store = $product_store;
            $param_p_price = $product_price;
           $param_id = $product_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php?Success = Updated succesfully..!");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connect);
} else{
    // Check existence of product_id parameter before processing further
    if(isset($_GET["product_id"]) && !empty(trim($_GET["product_id"]))){
        // Get URL parameter
        $product_id =  trim($_GET["product_id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE product_id = ?";
        if($stmt = mysqli_prepare($connect, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $product_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $product_name = $row["product_name"];
                    $product_type = $row["product_type"];
                    $product_store = $row["product_store"];
                    $product_price = $row["product_price"];
                } else{
                    // URL doesn't contain valid product_id. Redirect to error page
                    header("location: update.php?Error= URL = No valid ID");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($connect);
    }  else{
        // URL doesn't contain product_id parameter. Redirect to error page
        header("location: update.php? Error= Can't get the Parameter..!");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<title>Phone Accessories</title>
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
                        <h2>Update product Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record. <br><small>Note that this update will appear as a new record in the market.</small></p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Product Name</label>
                            <input type="text" product_name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($product_type_err)) ? 'has-error' : ''; ?>">
                            <label>Product Type</label>
                            <textarea product_name="product_type" class="form-control"><?php echo $product_type; ?></textarea>
                            <span class="help-block"><?php echo $product_type_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($p_store_err)) ? 'has-error' : ''; ?>">
                            <label>Product Store</label>
                            <input type="text" product_name="product_store" class="form-control" value="<?php echo $product_store; ?>">
                            <span class="help-block"><?php echo $p_store_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($p_store_err)) ? 'has-error' : ''; ?>">
                            <label>Product Price</label>
                            <input type="text" product_name="product_price" class="form-control" value="<?php echo $product_price; ?>">
                            <span class="help-block"><?php echo $p_store_err;?></span>
                        </div>
                        <input type="hidden" product_name="product_id" value="<?php echo $product_id; ?>"/>
                        <input type="submit" name="update" class="btn btn-primary" value="Submit">
                        <a href="index.php?product_id=?" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

