<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="contact">

   <h1 class="heading">Contact Us</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>Your Name</span>
            <input type="text" placeholder="Enter Your Name" name="name" required>
         </div>

         <div class="inputBox">
            <span>Your Email</span>
            <input type="email" placeholder="Enter Your Email" name="email" required>
         </div>

         <div class="inputBox">
            <span>Your Number</span>
            <input type="number" placeholder="Enter Your Number" name="number" required>
         </div>

         <div class="inputBox">
            <span>Choose plan</span>
            <select name="plan">
               <option value="basic">Basic Plan</option>
               <option value="premium">Premium Plan</option>
               <option value="ultimate">ultimate Plan</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Your Address</span>            
            <textarea name="address" placeholder="Enter Your Address" required cols="30" rows="10"></textarea>
         </div>

         <div class="inputBox">
            <span>Your Message</span>            
            <textarea name="message" placeholder="Enter Your Message" required cols="30" rows="10"></textarea>
         </div>

      </div>

      <input type="submit" value="send message" name="send" class="btn">

   </form>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>