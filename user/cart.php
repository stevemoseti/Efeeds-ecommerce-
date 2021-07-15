<?php include("includes/header.php"); ?>
<style media="screen">
body
{
  padding-top: 56px;
}
</style>
</head>
<body>
  <!--Navbar---------->
  <?php include("includes/navbar.php"); ?>
  <!--End of Navbar--->


  <section>
    <div class="container-fluid">
        <div class="row">
          <div class=" col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">

              <div style="display:<?php if(isset($_SESSION["showAlert"])){echo $_SESSION["showAlert"];}
            	else { echo "none"; } unset($_SESSION["showAlert"])?>" class="alert alert-success alert-dismissible mt-2">

            	<button type="button" class="close" data-dismiss="alert">&times;</button>

            	<strong><?php if(isset($_SESSION["message"])){echo $_SESSION["message"];} unset($_SESSION["showAlert"]);?></strong>

            	</div>
            <!-- container start -->

              <div class="container">
            	<div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                          
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"> </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col" class="text-center">Quantity</th>
                                        <th scope="col" class="text-right">Total Price</th>
                                        <th scope="col" class="text-right">
            							<a href="action.php?clear=all" onClick="return confirm('Are you sure to clear you cart?');" class="btn btn-sm btn-danger">Empty Cart</a>
            							</th>
                                    </tr>
                                </thead>
                                <tbody>
            						<?php
            						require_once( "dbconfig.php");
            						$select_stmt=$db->prepare("SELECT * FROM cart");
            						$select_stmt->execute();
            						$grand_total = 0;
            						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
            						{
            						?>
                                    <tr>
                                        <td><img src="../assets/images/<?php echo $row["product_image"]; ?>" width="50" height="50"/> </td>

                                        <td><?php echo $row["product_name"]; ?></td>

                                        <td><?php echo number_format($row["product_price"],2); ?></td>

                                        <td><input type="number" class="form-control itemQty" value="<?php echo $row['quantity']; ?>" style="width:75px;"></td>

                                        <td class="text-right"><?php echo number_format($row["total_price"],2); ?></td>

                                        <td class="text-right">
            							<a href="action.php?remove=<?php echo $row["cart_id"];?>" onClick="return confirm('Are you sure want to remove this item?');"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            							</td>

            							<input type="hidden" class="pid" value="<?php echo $row["cart_id"]; ?>">
            							<input type="hidden" class="pprice" value="<?php echo $row["product_price"]; ?>">

            							<?php $grand_total +=$row["total_price"]; ?>
                                    </tr>
            						<?php
            						}
            						?>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <td class="text-right"><?php echo number_format($grand_total,2); ?></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong><?php echo number_format($grand_total,2); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <a href="products.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
            					<a href="checkout.php" class="btn btn-md btn-block btn-success text-uppercase <?=($grand_total > 1)?"":"enabled"; ?>"> Checkout </a>
                            </div>
                        </div>
                    </div>
                </div>

              </div>
              <!-- /.container -->


       </div>
       </div>
      </div>
    </div>
  </section>

  <!--Footer--->
  <?php include("includes/footer.php"); ?>
  <!-- end of footer -->
