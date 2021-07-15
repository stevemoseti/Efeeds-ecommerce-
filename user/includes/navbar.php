<nav class="navbar navbar-expand-md navbar-light">
  <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="container-fluid">
      <div class="row">

      <!-- sidenavbar -->

      <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
        <div class="bottom-border pb-3">
          <img src="../assets/images/efeed.png" width="80" height="45" class="rounded-circle mr-1">
        </div>
        <ul class="navbar-nav flex-column mt-4">
          <li class="nav-item"><a href="userhome.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-home fa-lg mr-3"></i>Home</a></li>
          <li class="nav-item"><a href="products.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-shopping-cart plus-fill fa-lg mr-3"></i>Shopping</a></li>
          <li class="nav-item"><a href="deliveries.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-truck  fa-lg mr-3"></i>Deliveries</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-sign-out-alt fa-lg mr-3"></i></i>Logout</a></li>

        </ul>
      </div>
      <!--End of Sidenavbar--->
        <!--Top nav---------->
        <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
          <div class="row align-items-center">
            <div class="col-md-4">
              <h4 class="text-light text-uppercase mb-0">Home</h4>
            </div>
            <div class="col-md-5">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control search-input" placeholder="Search">
                  <button type="button" class="btn btn-white search-button"><i class="fas fa-search"></i></button>

                </div>
              </form>

            </div>
            <div class="col-md-3">
              <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="btn btn-success btn-sm mt-1" href="cart.php">
               <i class="fa fa-shopping-cart"></i>
               <span class="badge badge-light" id="cart-item"></span>
               </a>
                </li>
              </ul>
            </div>
          </div>
          <div>
          </div>
        </div>
        <!--End of Top Nav--->
      </div>
</nav>
