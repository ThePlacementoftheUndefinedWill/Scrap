<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="style\stylea.css">
   

   
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header1.php'; ?>

<div class="container">

<section class="products">

   

   <div class="row mx-auto container-fluid">
      

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<script src="js/script.js"></script>
<footer class="mt-5 py-5">
        <div id="down">
        <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-12">
        <img src="img/logo.jpg" alt="">
        <img src="img/logo2.png" alt="">
        <p class="pt-3">Fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna
        fringilla diam maecenas ultricies mi eget mauris.</p>
        
        </div>
        
        <div class="footer-one col-lg-3 col-md-6 col-12">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase list-unstyled">
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Kids</a></li>

        </ul>
        
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-12">
          <h5 class="pb-2">Conact Us</h5>

          
          
          <div>

           <h5 class="text-uppercase">Address</h5>
             <p>123 STREET NAME, CITY, US</p>
              </div>
               <div>
              <h5 class="text-uppercase">Phone</h5>
           <p>(123) 456-7890</p>
                 </div>
                        
               <h5 class="text-uppercase">Email</h5>
              <p>MAIL@EXAMPLE.COM</p>

          </div>
        
        <div class="copyright mt-5">
          <div class="row container mx-autp">
          
          <div class="col-lg-6 col-md-6 col-12">
          <img src="img/pay.png" alt=""> 
        </div>

        <div class="col-lg-1 col-md-6 col-12 text-nowrap">
          <p>AM-Shop eCommerce © 2022. All Rights Reserved</p>
        </div>
        
          
        <div class="col-lg-6 col-md-6 col-12">
            <a href="https://ar-ar.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/?lang=ar"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/jobs"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          </div>
        </div>
        </footer>
        
</body>
</html>