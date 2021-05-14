
<?php

require_once('includes/connect.php');
require_once('includes/detail.php');
?>

<?php
$currentpage = 'details';
include('includes/header.php');
?>

<main>
    
    <?php
    
    $item_id = $_GET['product_id'];
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
    } else {
    }
    foreach ($result as $item) :
        if ($item['product_id'] == $item_id) :
    ?>
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                            <img src=" <?php echo $item['product_image'] ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                <style>
                                    .btn{
                                    color:black;
                                    }
                                </style>

                                    <button type="submit" class="btn btn-primary form-control" style="color:black">Add to whishlist</button>
                                </div>
                                <div class="col">
                                    <form action="details.php" method="post">
                                        <?php if (in_array($item_id, $item_array_id?? [])): ?>
                                            <button type="submit" name="add" class="btn btn-danger font-size-16 form-control" style="color:black" disabled>Add to Cart</button>
                                        <?php else : ?>
                                            <button type="submit" name="add" class="btn btn-danger font-size-16 form-control" style="color:black">Add to Cart</button>
                                        <?php endif; ?>
                                        <input type='hidden' name='product_id' value='<?php echo $item_id ?>'>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 py-5">
                            <h5 class="font-baloo font-size-24"><b><?php echo $item['product_name'] ?></b></h5>
                            <small>From <?php echo $item['product_store']." Main Store" ?> </small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14"> 2034 Ratings Sales Weekly.</a>
                            </div>
                            <hr class="m-0">

                            <table class="my-3">
                                <br>
                                <tr class="font-rale font-size-14">
                                    <td>Product Cost:</td>
                                    <td class="font-size-20 ">  <span><b> UGX: <?php echo $item['product_price'] ?></b></span>/=
                                </td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td><p>Buy in Large Quantities to Save up to <span class="font-size-14 text-danger">35%</span></p></td>
                                </tr>
                            </table>

                        
                            <br>
                            <div class="col-8">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo py-2"><b>Quantity:</b></h6>
                                    <div class="px-4 d-flex font-rale btn-bx">
                                        <input type="number" name="item-qty" id="" placeholder="1" class="increases-item-qty">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <br><br>
                        
            </section>
    <?php
        endif;
    endforeach;
    ?>
</main>

<?php
include('includes/footer.php');
?>