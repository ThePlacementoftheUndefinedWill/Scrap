<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>


    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous" />

    <style>
        .small-img-groub{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;

        }
        .product1 select{
            display: block;
            padding: 5px 10px;
        }
        .product1 input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            margin-right: 10px;
            font-size: 16px;
            
        }
        .buy-btn:hover{
            background-color:chocolate;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>

</head>
<body>
 <!--nav-->
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
  <div class="container">
    <img src="img/logo.jpg" alt="">
    <img src="img/logo2.png" alt="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item">
          <a class="nav-link active" href="user_page.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Shop</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#down">Conact us</a>
        </li>
        
        <li class="nav-item">

         

        <li class="nav-item">
           <b class="container">Hello <span><?php echo $_SESSION['user_name' ] ?></span></b>

          </li>

      
         
         <li class="nav-item">
            <i class="fal fa-search"></i>
  
  
  
    </li>
             <a href="cart.php">

                 <i class="fal fa-shopping-bag"></i>
                 </a>

                 <li>
<a href="logout.php" class="btn mb-3 pt-2">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
</a>
</li>

         


       
    </div>
  </div>
</nav>

 
      
<section class="container product1 my-5 pt-5">
<div class="row mt-5">
    <div class="col-lg-5 col-md-12 col-12">
        <img class="img-fluid w-100 pb-1" src="img/T-shert2/R2.jpg" alt="">
        <div class="small-img-groub">
            <div class="small-img-col">
                <img src="img/T-shert2/R2.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/T-shert2/white1.webp" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/T-shert2/blue1.webp" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/T-shert2/blue2.webp" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-md-12 col-12">
        <h2 class="py-4">Twist Wrap Ring</h2>
        <h6>home/Rings</h6>
        <h3>$650.00</h3>
        <select class="my-3">
            <option>Select size</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
        <input type="number" value="1">


        <button class="buy-btn">Add to cart</button>


        <h4 class="mt-5 mb-3">Product details</h4>
        <span>Intricate and opulent, this marvelous AM-Shop ring reinterprets the spiral trend magnificently. Gently curving lines of white stones of various sizes in round, square, and tapered baguette-shapes sparkle brilliantly in many facets. Complemented by a shimmering finish, the elegant design makes it perfect for dressing up your style, adding a radiant touch of glamor to your look.
        </span>
    </div>
</div>
<div>

</div>
</section>


  
  
<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5 ">
    <h3>our Featured</h3>
    <hr class="mx-auto">
    <p>Discover our handpicked selection of featured products, showcasing the best of what we have to offer and sure to impress even the most discerning shoppers.</p>
    </div>
    <div id=down4>
    <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-12">
                <img src="img/T-shert1/R1.jpg" width="100%" class="small-img" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

        </div>
              <h5 class="p-name"></h5>
              <h4 class="p-price">$700.00</h4>
              <a href="product1.php">
              <button class="buy-btn">Buy Now</button>
              </a>

</div>
    <div class="product text-center col-lg-3 col-md-4 col-12">
            <img src="img/sneakers1/E1.jpg" width="100%" class="small-img" alt="">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"></h5>
            <h4 class="p-price">$150.00</h4>
            <a href="product5.php">

            <button class="buy-btn">Buy Now</button>
            </a>

</div>
      <div class="product text-center col-lg-3 col-md-4 col-12">

              <img class="img-fluid w-100 pb-1" src="img/watches1/N1.webp" alt="">
              <div class="star">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
              </div>
              <h5 class="p-name"></h5>
              <h4 class="p-price">$990.00</h4>
              <a href="product9.php">

              <button class="buy-btn">Buy Now</button>
</a>
</div>
        <div class="product text-center col-lg-3 col-md-4 col-12">

                <img src="img/T-shert3/R3.jpg" width="100%" class="small-img" alt="">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"></h5>
                <h4 class="p-price">$500.00</h4>
                <a href="product3.php">

                <button class="buy-btn">Buy Now</button>
</a>

</div>
  </div>
</div>
  </section>
  












<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
    <div class="footer-one col-lg-3 col-md-6 col-12">
    <img src="img/logo.jpg" alt="">
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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
</body>
</html>