<?php
require_once('includes/connect.php');
require_once('includes/cartelement.php');

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value["product_id"] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
                // echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>

<?php
$currentpage = 'cart';
include('includes/header.php');
?>


<main>
    <div class="container-fluid">
        <div class="row px-5 py-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h4 class="text-center py-3"><b>My Shopping Cart</b></h4>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $product_qty = array_column($_SESSION['cart'], 'product_qty');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['product_id'] == $id) {
                                    cartElement($row['product_image'], $row['product_name'], $row['product_store'], $row['product_price'], $row['product_id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    } 
                    
                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <p>Payment Details</p>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            } else {
                                echo "<b>Price (0 items)</b>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6><strong>Amount Payable</strong></h6>
                        </div>
                        <div class="col-md-6">
        
                            <h6>Sub Total: <br> UGX <b><?php echo $total; ?></b>/=</h6>

                            <h6 class="text-success">15% per product.</h6>
                            <hr>
                            <h6>UGX <b><?php echo $total; ?></b>/=</h6>
                        </div>
                        <div class="col-md-12 text-center py-2">
                            <?php if ($total != 0) : ?>
                                <?php if (isset($_SESSION['username'])) : ?>
                                    <button type="submit" class="btn btn-success mt-3" style="color:white"><a href="checkout.php" class="color-white">Continue to Buy</a></button>
                                <?php else : ?>
                                    <button type="submit" class="btn btn-warning mt-3" style="color:white"><a href="login.php" class="color-white"> &#8594;  Continue to Buy</a></button>
                                <?php endif ?>
                            <?php else : ?>
                                <button type="submit" class="btn btn-success mt-3\" disabled style="color:White"><a href="" class="color-black"> &#8594; Continue to Buy</a></button>
                                <!-- <button type="submit" class=\"btn btn-warning mt-3\"><a href=\"checkout.php\" class=\"color-black\">Proceed to Checkout</a></button> -->
                            <?php endif ?>
                        </div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section></section>
</main>

<?php
include('includes/footer.php');
?>