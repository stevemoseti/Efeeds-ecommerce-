
 <?php include("includes/header.php"); ?>
 <style>
 /* user home styles */

 .wrapper {
   width: auto;
   height: 100vh;
   background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
     url("../assets/images/agric2.jpg");
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   backdrop-filter: opacity(80%);
 }
 .Container {
   width: 100%;
   height: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
 }
 .header {
   text-align: center;
 }
 .heading1{
   font-family: "Raleway", sans-serif;
   font-size: 4rem;
   font-weight: 600;
   letter-spacing: 0.2rem;
   color: white;
   padding: 25% 20px 8px;
 }
 .para {
   font-family: "Raleway", sans-serif;
   font-size: 1.5rem;
   font-weight: 600;
   letter-spacing: 0.2rem;
   color: white;
   padding: 10px 15px;
 }
 .butn {
   font-size: 1.0rem;
   font-weight: 500;
   letter-spacing: 0.15rem;
   color: black;
   background-color: #fff200;
   padding: 20px 30px;
   margin: 50px 5px 0;
   border: none;
   cursor: pointer;
 }
</style>
 <body>
   <!--Navbar---------->
   <?php include("includes/navbar.php"); ?>
   <!--End of Navbar--->


<!-- wrapper section start -->
   <section>
     <div class="container-fluid">
       <div class="row mb-5">
         <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
           <div class="row">
             <div class="col-12 mb-4">
                <h3>My Deliveries</h3>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
<!-- wrapper section end -->

   <!--Footer--->
   <?php include("includes/footer.php"); ?>
   <!-- end of footer -->
