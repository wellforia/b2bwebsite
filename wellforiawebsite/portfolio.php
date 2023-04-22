<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1627462932730-846d957668a1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8Mnx8fGVufDB8fHx8&w=1000&q=80) no-repeat">
            <div class="content" >
               <h3>MENS T-SHIRTS OF COTTON<br> H.S. CODE: 610910</h3>
             
               
            </div>
         </div>

        
          <div class="swiper-slide slide" style="background:url(https://img.freepik.com/premium-photo/sexy-man-model-dressed-black-hat-green-shirt-outdoor-photo-against-touristy-tropical-city-landscape_251840-1304.jpg?w=2000) no-repeat">
            <div class="content">
            <h3>MENS SHIRTS OF COTTON<br> H.S. CODE: 620520</h3>
               
              
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(https://5.imimg.com/data5/ECOM/Default/2022/10/YD/IE/ZY/158297193/1002528052227-500x500.jpg) no-repeat">
            <div class="content">
            <h3>WOMENS T-SHIRTS <br> H.S. CODE: 620640</h3>
              
               
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(https://img.joomcdn.net/e9c3e72a693400189a428bad2caed25a496a2b49_original.jpeg) no-repeat">
            <div class="content">
            <h3>T-SHIRTS OF COTTON<br> H.S. CODE: 610910</h3>
               
               
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(https://donohues.com.au/wp-content/uploads/2022/07/S22_WMS_WEST_10039339_front.jpg) no-repeat">
            <div class="content">
            <h3>WOMEN SHIRTS OF COTTON<br> H.S. CODE: 620630</h3>
               
               
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(https://media.istockphoto.com/id/1180610163/photo/baby-clothes-and-accessories-for-the-newborn-selective-focus.jpg?s=612x612&w=0&k=20&c=QQTOWsRWKYlkt2cUPUJOPEPWDyBc47SK3rqrUc80mZ0=) no-repeat">
            <div class="content">
            <h3>BABIES GARMENTS AND ACCESSORIES<br> H.S. CODE: 611120</h3>
               
               
            </div>
         </div>

<a id="prev" href="#">&#8810;</a>
<a id="next" href="#">&#8811;</a>
      </div>

      <div class="swiper-pagination" style="fontsize:32px;"></div>

   </div>

</section>  


<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>