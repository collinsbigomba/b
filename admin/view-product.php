<?php
include 'includes/header.php';
include 'includes/nav-bar.php';


?>
<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
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
<div id="content">              

<?php
if (isset($_POST['get-all-products'])) {
    //require "../configurations.php";
    $connect = mysqli_connect('localhost', 'root', '', 'phone_access' );
    /* $conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);  */
    if (!$connect ) {
      ("connection to database failed!");
      }
  
      $sql = "SELECT 
      product_id, 
      product_image, 
      product_name, 
      product_type, 
      product_store, 
      product_price, 
      modified
       FROM products";
      $results = $connect->query($sql);
      if ($results->num_rows > 0) {
    echo"<br>";
    echo' <a href="add-product.php"><button class="btn btn-secondary">Add New Product</button></a>';
      echo "<div class='table-B'>";
      echo" <table>";
      echo "<thead>";
          echo "<tr>";
              // echo "<th>#</th>";
          echo "<th>Product ID</th>";
          echo "<th>Product Image</th>";
          echo "<th>Product Name</th>";
          echo "<th>Product Type</th>";
          echo "<th>Store</th>";
          echo "<th>Price</th>";
          echo "<th>Date </th>";
          echo "<th>Take Action</th>";
         
          echo "</tr>";
          echo "</thead>";
      while ($row = $results-> fetch_array()) {
      echo "<tr>";
      echo"<td>" .$row['product_id']."</td>";
      echo"<td>" .$row['product_image'] ."</td>";
      echo"<td>" .$row['product_name'] ."</td>";
      echo"<td>" .$row['product_type'] ."</td>";
      echo"<td>" .$row['product_store'] ."</td>";
      echo"<td>" .$row['product_price'] ."</td>";
      echo"<td>" .$row['modified'] ."</td>";
      echo "<td>";
        
          echo "<a href='update.php?product_id=". $row['product_id'] ."' title='Update Record' data-toggle='tooltip'><i class='far fa-edit'></i></a>";
          echo "<a href='delete.php?product_id=". $row['product_id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash-alt'></i> </a>";
          echo "</td>";
      echo "</tr>";
       }
      echo "</tbody>";                            
     echo "</table>";
  
     }
     else{
      echo"No Results form table because No Patient has been added!.";
  
     }
  }


?>


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

   

