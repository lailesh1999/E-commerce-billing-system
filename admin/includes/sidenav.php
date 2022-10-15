<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)" style="color:blue;">
          ADMIN DASHBOARD
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_unit.php">
                <i class="fas fa-balance-scale text-orange"></i>
                <span class="nav-link-text">ADD UNITS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_unit.php">
                <i class="fas fa-balance-scale text-green"></i>
                <span class="nav-link-text">view_unit</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_tax.php">
                <i class="fab fa-ethereum text-primary"></i>
                <span class="nav-link-text">ADD TAX</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_tax.php">
                <i class="fab fa-ethereum text-yellow"></i>
                <span class="nav-link-text">VIEW TAX</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_category.php">
                <i class="fas fa-archive text-blue"></i>
                <span class="nav-link-text">ADD CATEGORY</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_category.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">VIEW CATEGORY</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_sub_category.php">
                <i class="far fa-id-badge text-pink"></i>
                <span class="nav-link-text">ADD SUB CATEGORY</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_sub_category.php">
                <i class="far fa-id-badge text-violet"></i>
                <span class="nav-link-text">VIEW SUB CATEGORY</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_product.php">
                <i class="fas fa-address-book text-red"></i>
                <span class="nav-link-text">ADD PRODUCT</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_product.php">
                <i class="fas fa-address-book text-yellow"></i>
                <span class="nav-link-text">VIEW PRODUCT</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_supplier.php">
                <i class="fas fa-address-card text-indigo"></i>
                <span class="nav-link-text">ADD SUPPLIER</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_supplier.php">
                <i class="fas fa-address-card text-blue"></i>
                <span class="nav-link-text">VIEW SUPPLIER</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_buy_supplier.php">
                <i class="fas fa-server text-green"></i>
                <span class="nav-link-text">ADD BUY SUPPLIER</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_buy_supplier.php">
                <i class="fas fa-server text-darkblack"></i>
                <span class="nav-link-text">VIEW BUY SUPPLIER</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="add_customer.php">
                <i class="fas fa-archive text-blue"></i>
                <span class="nav-link-text">ADD CUSTOMER</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_customer.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">VIEW CUSTOMER</span>
              </a>
            </li>
             </li>
             <li class="nav-item">
              <a class="nav-link" href="add_admin.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">ADD ADMIN</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_profile.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">MY PROFILE</span>
              </a>
            </li>
        
           <li class="nav-item">
              <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw fa-address-book text-red"></i>
                <span class="nav-link-text">LOG OUT</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
             <li class="nav-item">
              <a class="nav-link" href="buy_items.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">BILLING</span>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="view_bill.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text">VIEW BILLING</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view_supplier_report.php">
                <i class="fas fa-archive text-black"></i>
                <span class="nav-link-text"> SUPPLIER REPORT</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a href="logout.php" class="btn btn-danger">logout</a>
        </div>
      </div>
    </div>
  </div>
  </nav>