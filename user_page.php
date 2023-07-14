<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   
   <title>Home page</title>
   
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous" />


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
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Shop</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#down">Conact us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="test.php">Ordes</a>
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

 
<section id="home">
  <div class="container">
    <h5 style="color:aliceblue">NEW ARRAIVALS</h5>
  <h1 style="color:aliceblue"><span style="color:rgba(255, 153, 0, 0.76)">Best Price</span> This Year</h1>
  <p style="color:aliceblue">Find the perfect finishing touch for your outfit at our accessories store, where style meets affordability and quality meets convenience.</p>
  <a href="#down4">
  <button>Shop Now</button>
</a>
  </div>
  </section>

  

  
  <section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5 ">
    <h3>Our Featured</h3>
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
    


    <section id="new" class="w-100">

<div class="row p-0 m-0">

<div class="one col-lg-4 col-md-12 col-12 p-0">
<img class="img-fluid"  src="img/b1.jpg" alt="">
<div class="details">
  <h1 style=color:antiquewhite>Earings Showcase</h1>    
  <a href="#down2">
  <button class="text-uppercase"> <h4 style=color:cornsilk >Shop now</h4></button>
</a>
</div>
     </div>
     <div class="one col-lg-4 col-md-12 col-12 p-0">
    <img class="img-fluid"  src="img/b2.jpg" alt="">
    <div class="details">
      <h1 style=color:antiquewhite>Rings options</h1>   
      <a href="#down3">
      <button class="text-uppercase"> <h4 style=color:cornsilk  >Shop now</h4></button>
    </a> 
    </div> 
         </div>
         <div class="one col-lg-4 col-md-12 col-12 p-0">
        <img class="img-fluid"  src="img/b3.jpg" alt="">
        <div class="details">
          <h1 style=color:antiquewhite>necklaces Showcase</h1>    
          <a href="#down1">
          <button class="text-uppercase"> <h4 style=color:cornsilk  >Shop now</h4></button>
        </a>
          </div>
             </div>
           </div>
</section>


    <div class=" text-center mt-5 py-5 ">
      <h3>Major Sales</h3>
      <hr class="mx-auto">
      <p>We have Some exclusive <B>SALES</B> here at AM-Shop.</p>



   
      <section id="banner" class="my-5 py-5">
      <div class="container">
      <h4>End SEASON’S SALE</h4>
      <h1>Autumn Collection<br>UP TO 50% OFF</h1>
      
      <button class="text-uppercase">Shop Now</button>
   
      
      </section>

      <section id="clothes" class="my-5">
        <div id="down3">
        <div class="container text-center mt-5 py-5 ">
        <h3>Rings</h3>
        <hr class="mx-auto">
        <p>Make a statement with our exquisite collection of rings, designed to add a touch of elegance and sophistication to any outfit</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">

                  <img src="img/T-shert2/R2.jpg" width="100%" class="small-img" alt="">
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h5 class="p-name"></h5>
                  <h4 class="p-price">$650.00</h4>
                  <a href="product2.php">

                  <button class="buy-btn">Buy Now</button>
</a>

</div>
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

                    <img src="img/T-shert3/R3.jpg" width="100%" class="small-img" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"></h5>
                    <h4 class="p-price">$550.00</h4>
                    <a href="product3.php">

                    <button class="buy-btn">Buy Now</button>
</a>

</div>
              <div class="product text-center col-lg-3 col-md-4 col-12">

                      <img class="img-fluid w-100 pb-1" src="img/T-shert4/R4.webp" alt="">
                      <div class="star">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                      <h5 class="p-name"></h5>
                      <h4 class="p-price">$400.00</h4>
                      <a href="product4.php">

                      <button class="buy-btn">Buy Now</button>
</a>

</div>
        </div>
      </div>
        </section>


        <section id="watches" class="my-5">
          <div id="down1">
          <div class="container text-center mt-5 py-5 ">
          <h3>Necklaces</h3>
          <hr class="mx-auto">
          <p>Elevate your style with our stunning collection of necklaces, perfect for any occasion.</p>
          </div>
          <div class="row mx-auto container-fluid">
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
               

                    <img class="img-fluid w-100 pb-1" src="img/watches2/N2.webp" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        
                    </div>
                    <h5 class="p-name"></h5>
                    <h4 class="p-price">$800.00</h4>
                    <a href="product10.php">

                    <button class="buy-btn">Buy Now</button>
</a>

</div>
              <div class="product text-center col-lg-3 col-md-4 col-12">

                      <img class="img-fluid w-100 pb-1" src="img/watches3/N3.webp" alt="">
                      <div class="star">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                      <h5 class="p-name"></h5>
                      <h4 class="p-price">$700.00</h4>
                      <a href="product11.php">

                      <button class="buy-btn">Buy Now</button>
</a>

</div>
                <div class="product text-center col-lg-3 col-md-4 col-12">

                        <img class="img-fluid w-100 pb-1" src="img/watches4/N4.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name"></h5>
                        <h4 class="p-price">$400.00</h4>
                        <a href="product12.php">

                        <button class="buy-btn">Buy Now</button>
</a>

</div>
          </div>
        </div>
          </section>


          <section id="Sneakers" class="my-5">
            <div id="down2">
            <div class="container text-center mt-5 py-5 ">
            <h3>Earings </h3>
            <hr class="mx-auto">
            <p>From simple studs to dazzling drops, our earring collection offers a range of styles to complement any look and express your unique personality.</p>
            </div>
            <div class="row mx-auto container-fluid">
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

                      <img src="img/sneakers2/E2.jpg" width="100%" class="small-img" alt="">
                      <div class="star">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                      </div>
                      <h5 class="p-name"></h5>
                      <h4 class="p-price">$200.00</h4>
                      <a href="product6.php">

                      <button class="buy-btn">Buy Now</button>
</a>

</div>
                <div class="product text-center col-lg-3 col-md-4 col-12">

                        <img class="img-fluid w-100 pb-1" src="img/sneakers3/E3.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name"></h5>
                        <h4 class="p-price">$100.00</h4>
                        <a href="product7.php">

                        <button class="buy-btn">Buy Now</button>
</a>

</div>
                  <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid w-100 pb-1" src="img/sneakers4/E4.jpg" alt="">
                    <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      </div>
                      <h5 class="p-name"></h5>
                      <h4 class="p-price">$250.00</h4>
                      <a href="product8.php">

                      <button class="buy-btn">Buy Now</button>
</a>
                    
                    </div>
            </div>
          </div>
            </section>

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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
crossorigin="anonymous"></script>

  </body>
</html>
