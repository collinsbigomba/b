
<?php
include 'includes/header.php';
include 'includes/nav-bar.php';


?>
       <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul> 
                  </div>
              
                     
    <main class="repair-form">
    <form method="post" action="add-product.php" class="needs-validation form-signup" novalidate  enctype="multipart/form-data">
        <center>
            <h1 class="h3 mb-3 font-weight-normal">Add New Product</h1>
        </center>
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="product-Name">Product Name</label>
                        <input type="text" name="pname" class="form-control"  required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white" for="prod-type">product Type</label>
                        <input type="text" name="ptype" class="form-control"  required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="store" class="text-black">Product Store </label>
                        <select class="custom-select d-block w-100" name="pstore" id="state" required>
                            <option>Masaka</option>
                            <option>Kampala</option>
                            <option>Jinja</option>
                            <option>Lira</option>
                            <option>Soroti</option>
                            <option>Gulu</option>
                            <option>Arua</option>
                            <option>Mbarara</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group ">
                        <label for="price" class="text-black">Product Price </label>
                        <input type="text" class="form-control" name="pprice" placeholder="Eg. 200000" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Date</label>
                        <input type="text" name="mdate" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="white">Product Image</label>
                        <input type="file" name="image" class="form-control" required> Choose Product image: 
                    </div>
                </div>

            </div><br>

            <center>
                <button class="btn btn-lg btn-warning btn-block col-md-6 rounded-pill" name="add-products" type="submit">ADD NEW PRODUCT</button><br>

            </center>

        </div>
    </form>

    </div>




                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
    </div>
    <!-- End of Page Wrapper -->
</div>
    <?php
include 'includes/footer.php';
include 'includes/script.php';
?>

   

<?php 

if (isset($_POST['add-products'])) {
    $server = "localhost";
    $dbUsername ="root";
    $dbpasswd = "";
    $dataBase = "phone_access";
    $connect = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
  
    if ($connect) {
    $pname = mysqli_real_escape_string($connect, $_POST['pname']);
	$ptype = mysqli_real_escape_string($connect, $_POST['ptype']);
	$store = mysqli_real_escape_string($connect, $_POST['pstore']);
	$price = mysqli_real_escape_string($connect, $_POST['pprice']);
	$date = mysqli_real_escape_string($connect, $_POST['mdate']);
	$pimage = mysqli_real_escape_string($connect, $_FILES['image']['tmp_name']);
	

$query = "INSERT INTO products (product_name, product_type, product_store, product_price, modified, product_image ) VALUES('$pname','$ptype', '$store', '$price', '$date', '$pimage')";
		mysqli_query($connect, $query);
	}

else{

    header ("Location: add-product.php?Connection = failed..");
    
    }
}






/*

$products1 = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (1,'Door-Hinge ', 'secure','Gulu',5000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/1.jpg'),
	(2,'Hinge 12-Inches', 'secure','Lira',9000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/2.jpg'),
	(3,'Stainless Steel-Hinge', 'secure','Mbarara',7000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/3.jpg'),
	(4,'Pandale Door-Handle', 'secure','Masaka Branch',6500,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/4.jpg')";
mysqli_query($connect, $products1); */
?>