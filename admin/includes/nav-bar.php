 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    
    </div>
    <div class="sidebar-brand-text mx-3"><img src="img/logo/UU.jpg" alt="">
    <h5>Phone Accessories</h5>
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
       <i class="fas fa-user-shield"></i>
        <span>Admin Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="add-product.php?add-new-products=1">
        <i class="fas fa-fw fa-cog"></i>
        <span>Add New Products</span>

    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">

<form action="view-product.php?all-products-in-store" method="post">
<button type="submit" name="get-all-products" class="btn btn-danger">
<i class="fas fa-fw fa-wrench"></i>
<span>View All Products</span>
</button>
</form>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.php?registered-customers">
        <i class="fas fa-fw fa-table"></i>
        <span>View All Customers</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.php?all-orders">
        <i class="fas fa-fw fa-table"></i>
        <span>View All Orders</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.php?wishlist-items">
        <i class="fas fa-fw fa-table"></i>
        <span>Vew Wishlist</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.php?products-into-cart">
        <i class="fas fa-fw fa-table"></i>
        <span>View Cart Items</span></a>
</li>


</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>