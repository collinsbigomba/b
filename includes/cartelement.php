<?php

function cartElement($productimg, $productname, $productstore, $productprice, $productid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border-top rounded py-2 my-4\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <a href=\"details.php?product_id=$productid\"><img src=$productimg alt=\"Image1\" class=\"img-fluid\"></a>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\"><strong>$productname</strong></h5>
                                <small class=\"text-secondary\">Seller: $productstore</small>
                                <h5 class=\"pt-2\">UGX <b>$productprice</b>/=</h5>
                                <button style=\"color:black\" type=\"submit\" class=\"btn btn-primary\">Save for Later</button>
                                <button style=\"color:black\" type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\"><b>Remove</b></button>
                            </div>
                            <div class=\"qty d-flex col-md-3 py-5\">
                                <div class=\"btn-bx\">
                                    <button type=\"button\" class=\"qty-down btn bg-light border rounded-circle\" data-id=\"pdt$productid\"><i class=\"bx bx-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"qty_input btn bg-light w-25 d-inline text-center p-2\" disabled data-id=\"pdt$productid\">
                                    <button type=\"button\" class=\"qty-up btn bg-light border rounded-circle\" data-id=\"pdt$productid\"><i class=\"bx bx-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>