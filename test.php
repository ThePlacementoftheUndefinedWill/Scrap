
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>
	<style>
		.order-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 20px auto;
			width: 70%;
			border: 2px solid #ddd;
			padding: 20px;
			border-radius: 10px;
		}
		.order-header {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.order-image {
			max-width: 300px;
			margin-bottom: 10px;
		}
		.order-details {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			width: 100%;
			margin-bottom: 10px;
			font-size: 16px;
			font-weight: bold;
		}
		.order-button {
			padding: 10px;
			border: 2px solid #ddd;
			background-color: #fff;
			color: #000;
			font-size: 18px;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.3s ease;
		}
		.order-button:hover {
			background-color: coral;
			color: #fff;
			border-color: #555;
		}
	</style>
</head>
<body>
	<div class="order-container">
		<div class="order-header">Order #123456</div>
		<img class="order-image" src="img\sneakers2\1.webp" alt="Order Image">
		<div class="order-details">
			<div>Date: 01/05/2023</div>
			<div>Time: 10:30 AM</div>
		</div>
	</div>
	<div class="order-container">
		<div class="order-header">Order #789012</div>
		<img class="order-image" src="img\T-shert4\blue1.webp" alt="Order Image">
		<div class="order-details">
			<div>Date: 02/05/2023</div>
			<div>Time: 2:15 PM</div>
		</div>
    <a href="track.php">
		<button class="order-button">Track Order</button>
    </a>
	</div>
</body>
</html>


            
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
