<nav class="navbar navbar-expand-md navbar-light">
  <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="container-fluid">
      <div class="row">

      <!-- sidenavbar -->

      <div class=" col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
        <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Admin</a>
        <div class="bottom-border pb-3">
          <img src="../assets/images/efeed.png" width="80" height="45" class="rounded-circle mr-1">
        </div>
        <ul class="navbar-nav flex-column mt-4">
          <li class="nav-item"><a href="adminhome.php" class="nav-link text-white p-2 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
          <li class="nav-item"><a href="customers.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-user text-light fa-lg mr-3"></i>Customers</a></li>
          <li class="nav-item"><a href="products.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-shopping-cart plus-fill fa-lg mr-3"></i>Products</a></li>
          <li class="nav-item"><a href="orders.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-user text-light fa-lg mr-3"></i>Orders</a></li>
          <li class="nav-item"><a href="signout.php" class="nav-link text-white p-2 mb-2"><i class="fas fa-sign-out-alt fa-lg mr-3"></i>Log out</a></li>

        </ul>
      </div>
      <!--End of Sidenavbar--->
        <!--Top nav---------->
        <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
          <div class="row align-items-center">
            <div class="col-md-4">
              <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
            </div>
            <div class="col-md-5">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control search-input" placeholder="Search">
                  <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>

                </div>
              </form>

            </div>
            
          </div>
          <div>
          </div>
        </div>
        <!--End of Top Nav--->
      </div>
</nav>
