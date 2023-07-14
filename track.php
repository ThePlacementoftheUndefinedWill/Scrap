<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Order Tracking | My Website</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
			padding: 20px;
		}

	h1 {
		font-size: 36px;
		text-align: center;
		margin-bottom: 20px;
	}

	form {
		max-width: 500px;
		margin: 0 auto;
		background-color: #fff;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
	}

	label {
		font-size: 18px;
		display: block;
		margin-bottom: 10px;
	}

	input[type="text"] {
		font-size: 16px;
		padding: 10px;
		border: 1px solid #ddd;
		border-radius: 5px;
		width: 100%;
		margin-bottom: 20px;
		box-sizing: border-box;
	}

	input[type="submit"] {
		font-size: 18px;
		padding: 10px 20px;
		background-color: coral;
		color: #fff;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		transition: all 0.3s ease;
	}

	input[type="submit"]:hover {
		background-color: #fb774b;;
	}
</style>
</head>
<body>
	<h1>Order Tracking</h1>
	<form action="tracking.php" method="post">
		<label for="order-number">Order Number:</label>
		<input type="text" id="order-number" name="order-number" required>
		<input type="submit" value="Track Order">
	</form>
    <footer class="mt-5 py-5", id="down">
   


   
   <div class="row container mx-auto pt-5">
   <div class="footer-one col-lg-3 col-md-6 col-12">
   <img src="img/logo.jpg" alt="">
   <p class="pt-3">Our accessories online shop is a one-stop destination for fashion-forward individuals looking to elevate their look with unique and trendy accessories, curated with care and attention to detail. With a wide selection of high-quality pieces at affordable prices, we make it easy to add the perfect finishing touches to any outfit.</p>
   
   </div>
   
   <div class="footer-one col-lg-3 col-md-6 col-12">
   <h5 class="pb-2">Featured</h5>
   <ul class="text-uppercase list-unstyled">
   <li><a href="#">Women</a></li>
   
   </ul>
   
   </div>

   <div class="footer-one col-lg-3 col-md-6 col-12">
     <h5 class="pb-2">Conact Us</h5>

     
     
     <div>

      <h5 class="text-uppercase">Address</h5>
        <p>4567 Khalid street, Yanbu,</p>
         </div>
          <div>
         <h5 class="text-uppercase">Phone</h5>
      <p>0506874152</p>
            </div>
                   
          <h5 class="text-uppercase">Email</h5>
         <p>AM-MAIL@HOTMAUL.COM</p>

     </div>
   
   <div class="copyright mt-5">
     <div class="row container mx-autp">
     
     <div class="col-lg-6 col-md-6 col-12">
     <img src="img/pay.png" alt=""> 
   </div>

   <div class="col-lg-1 col-md-6 col-12 text-nowrap">
     <p>AM-Shop eCommerce © 2021. All Rights Reserved</p>
   </div>
   
     
       <div class="col-lg-6 col-md-6 col-12">
       <a href="#"><i class="fab fa-facebook-f"></i></a>
       <a href="#"><i class="fab fa-twitter"></i></a>
       <a href="#"><i class="fab fa-linkedin-in"></i></a>
       </div>
     </div>
     </div>
   

   </footer>

</body>
</html>

