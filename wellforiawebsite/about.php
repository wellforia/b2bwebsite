<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .swiper-slide slide img {background-size:"cover";}
</style>
</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="about">

   <img src="https://img.freepik.com/free-photo/shop-clothing-clothes-shop-hanger-modern-shop-boutique_1150-8886.jpg?w=740&t=st=1671885368~exp=1671885968~hmac=80fee3bfb0a13b3d24e1eab4fdecc881b210f6c4fd2dcd63decda1a85bfbb059" alt="">
   <h3>about us</h3>
   <p>Foria is one of the largest and the most recognized online stores for Indian ethnic wears. Founded in 2019, Foria today, has emerged to be a globally loved and preferred provider of a variety of Indian ethnic attires including Sarees, Suits,Kurtis, Lehengas, Sherwani, Kaftans and more. We are based out of Jaipur, Rajasthan, India. We at Foria boast of our team of designers and craftsmen, who works together to make our dream of defining Indian ethnicity come alive</p>
   <a href="contact.php" class="btn">contact us</a>

</section>
<section class="services">

   <h1 class="heading">Certifications</h1>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images\1.1.jpeg" alt="" >
            <div class="content">
               <h3>cin Certificate</h3>
               
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images\1.2.jpeg" alt="">
            <div class="content">
               <h3>DIPP Certificate</h3>
               
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images\1.3.jpeg" alt="">
            <div class="content">
               <h3>Company Pancard</h3>
               
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images\1.4.jpeg" alt="">
            <div class="content">
               <h3>GST Certificate</h3>
              
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images\1.5.jpeg" alt="">
            <div class="content">
               <h3>IEC Certificate</h3>
           
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images\1.6.jpeg" alt="">
            <div class="content">
               <h3>msme Certificate</h3>
              
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>
<section class="team">

   <h1 class="heading">our team</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\Anshul Sir.jpeg" alt="">
         <h3>Mr. Anshul Goyal</h3>
         <p>CEO, Founder</p>
         <div class="share">
            
         </div>
      </div>

      <div class="box">
         <img src="images\ajay photo.jpeg" alt="">
         <h3>Mr. Ajay Saini</h3>
         <p>CFO ,Co-Founder</p>
         <div class="share">
            
         </div>
      </div>

      <div class="box">
         <img src="images\chetna mam.jpeg" alt="">
         <h3>Ms. Chetna</h3>
         <p>Chief Operation Officer</p>
         <div class="share">
            
         </div>
      </div>

      <div class="box">
         <img src="images\manisha Photo.jpeg" alt="">
         <h3>Ms. Manisha </h3>
         <p>Chief Marketing Officer</p>
         <div class="share">
            
         </div>
      </div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>