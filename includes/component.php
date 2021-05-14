<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"item py-2\">
                <div class=\"product \">
                    <a href=\"details.php?product_id=$productid\"><img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$productname</h6>
                    
                        <div class=\"rating text-danger font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                            24k-
                        </div>
                        <br>
                        <div class=\"price py-2\"> 
                            <span>
                            UGX <b>$productprice</b> /=</span>
                            <h5>Discounts: <b>15% </b>- Off</h5>
                            <br>
                        </div>
                        <br>
                        <center>
                        <button type=\"submit\" class=\"btn btn-danger\" name=\"detail-link\"><a href=\"details.php?product_id=$productid\" 
                        class=\"color-white\">Add to Cart</a></button>
                        </center>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div> 
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}
?>
<style>
button{
    background: red;
    color: white;
}
</style>

<?php

function component2($productname, $producttype, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $producttype\">
                <div class=\"item py-2\" style=\"width: 200px;\">
                <div class=\"product \">
                    <a href=\"details.php?product_id=$productid\"><img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$productname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"price py-2\">
                            <span>UGX <b>$productprice</b> /=</span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?product_id=$productid\" class=\"color-black\">View Item</a></button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div> 
                </div>
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

function component3($productname, $productstore, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $productstore\">
                <div class=\"item py-2\" style=\"width: 200px;\">
                <div class=\"product \">
                    <a href=\"details.php?product_id=$productid\"><img src=\"$productimg\" alt=\"product1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$productname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"price py-2\">
                            <span>UGX <b>$productprice</b> /=</span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?product_id=$productid\" class=\"color-black\">View Item</a></button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div> 
                </div>
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

