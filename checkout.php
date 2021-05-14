<?php
require_once('includes/connect.php');
require_once('includes/checkout-cart.php');
?>

<?php
$currentpage = 'checkout';
include('includes/header.php');
//require_once('control/user_detail.php');

?>
<style>
main{
    color:black;
}
h4{
    color:red;
    font-size:17px;
}

</style>

<main>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Transaction Checking..</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-black">Items in Cart</span>
                    <span class="badge  badge-pill"><i class="fas fa-cart-plus"></i>
                        <div class="cart_count ">
                            <?php

                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                                echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                            } else {
                                echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                            }

                            ?>
                        </div>
                    </span>
                </h4>
                <ul class="list-group mb-3">
                    <?php

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($product_id as $id) {
                                if ($row['product_id'] == $id) {
                                    checkout($row['product_name'], $row['product_store'], $row['product_price']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    } else {
                        echo "<center><h5>Cart is Empty</h5></center>";
                    }

                    ?>

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Purchase Code</h6>
                            <small>18880010</small>
                        </div>
                        <span class="text-success">-UGX 500/=</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (UGX)</span>
                        <strong><?php echo $total; ?>/=</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Purchase code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        
  <!--     Transactions and bill addressing   -->
<style>
form{
    padding:40px;
}
</style>

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"><strong> Transaction Detailes:</strong></h4>
                <form class="needs-validation" method="post" width="50%" height="50%" action="cart.php?Order=Submitted-Successfully" novalidate>
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                       
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">- Optional</span></label>
                        <input type="email" class="form-control" id="email"  placeholder="email@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address"  placeholder="Nkozi TC" required>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option>Uganda</option>
                                <option>- 0 -</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">District</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option>Mbarara</option>
                                <option>Mpigi</option>
                                <option>Lyantonde</option>
                                <option>Masaka</option>
                            </select>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox py-2">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3"><strong>Payment</strong></h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" value="Credit" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="credit">Mobile Money</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" value="Debit" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="master" name="paymentMethod" value="Master" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="master">Master card</label>
                        </div>
                    </div>
                    <div>
                    <div class="col-md-6 mb-3">
                        <div class="invalid-feedback">
                        
                            </div>
                            <label for="cc-name">Tellephone Number:</label>
                            <input type="text" class="form-control" id="cc-name" name="payment-contact" placeholder="Number Used on Card (Selected)." required>                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit Holder</label>
                            <input type="text" class="form-control" id="cc-number" name="card-name" placeholder="Registered name as on C-Card" required>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success rounded-pill btn-block font-size-26" style="color:black" type="submit" name="pay-btn"><b> Continue to Place Order</b></button>

              
                </form>
            </div>
        </div>
</main>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</div>

<?php
include('includes/footer.php');
?>