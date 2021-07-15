<?php include("includes/header.php"); ?>
</head>
<body>
  <!--Navbar---------->
  <?php include("includes/navbar.php"); ?>
  <!--End of Navbar--->
  <!--add new customers--->
  <section>
    <div class="container-fluid">
        <div class="row">
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
         <!-- <h1 style="margin-left:20px;">this is products page</h1> -->
<?php
require_once("dbconfig.php");
$select_stmt=$db->prepare("SELECT * FROM product");
$select_stmt->execute();
while ($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
 {
?>
<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" src="../assets/images/<?php echo $row['product_image'];?>" width="400px" height="200px" ></a>
    <div class="card-body">
      <h4 class="card-title text-primary"><?php echo $row['product_name']; ?></h4>
       <h5><?php echo number_format($row['product_price'],2); ?>/-</h5>
    </div>
    <div class="card-footer">
      <form class="form-submit">
        <input type="hidden" class="pid" value="<?php echo $row['product_id']; ?>">
        <input type="hidden" class="pname" value="<?php echo $row['product_name']; ?>">
        <input type="hidden" class="pprice" value="<?php echo $row['product_price']; ?>">
        <input type="hidden" class="pimage"  value="<?php echo  $row[ 'product_image']; ?>">
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
       </div>
      </div>
    </div>
  </section>
  <!--end of adding new customers--->
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
  <!--Footer--->
  <?php include("includes/footer.php"); ?>

  <!-- end of footer -->
