<!DOCTYPE html>
<html lang="en">

<head>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="title icon" href="images/title-img.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
     crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/userstyles.css">
 <script type="text/javascript" src="admin.js"></script>
  <title><img src="assets/images/efeed.png" alt="picture"></title>

  <!-- Bootstrap core CSS -->



  <style type="text/css">
body{
  padding:65px;
}


  </style>

</head>

<body>

  <!-- Navigation -->
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
          <div >
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
        </div>
          <!--End of Top Nav--->
        </div>
  </nav>


  <!-- end of navigation -->

  <!-- Page Content -->

  <section>
    <div class="container-fluid">
        <div class="row">
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
  <div class="alert-message"></div>
  <div class="container">
    <h3 class="text-muted text-center mb-3">Recent Products</h3>
    <div class="row">
		<?php
		require_once "dbconfig.php";
		$select_stmt=$db->prepare("SELECT * FROM product");
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../assets/images/<?php echo $row['product_image']; ?>" width="400px" height="200px"></a>
              <div class="card-body">
                <h4 class="card-title text-primary"><?php echo $row['product_name']; ?> </h4>
                <h5><?php echo number_format($row['product_price'],2); ?>/-</h5>
              </div>

              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="<?php echo $row['product_id']; ?>">
					<input type="hidden" class="pname" value="<?php echo $row['product_name']; ?>">
					<input type="hidden" class="pprice" value="<?php echo $row['product_price']; ?>">
					<input type="hidden" class="pimage" value="<?php echo $row['product_image']; ?>">
					<input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>

            </div>
          </div>
		<?php
		}
		?>
                </div>
                <!-- /.row -->
              </div>
            <!-- /.row -->
        </div>
  <!-- /.container -->

    </div>
    </div>
  </div>
  </div>
</section>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click", "#addItem", function(e){
			e.preventDefault();
			var form = $(this).closest(".form-submit");
			var id = form.find(".pid").val();
			var name = form.find(".pname").val();
			var price = form.find(".pprice").val();
			var image = form.find(".pimage").val();
			var code = form.find(".pcode").val();

			$.ajax({
				url: "action.php",
				method: "post",
				data: {pid:id, pname:name, pprice:price, pimage:image, pcode:code},
				success:function(response){
					$(".alert-message").html(response);
					window.scrollTo(0,0);
					load_cart_item_number();
				}
			});
		});

		load_cart_item_number();

		function load_cart_item_number(){
			$.ajax({
				url: "action.php",
				method: "get",
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);
				}

			});
		}
	});
  </script>

</body>

</html>
