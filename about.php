<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>



<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutusimg.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We offer a tremendous gathering of books in the various classifications of Fiction, Non-fiction, Biographies, History, Religions, Self – Help, Children. We likewise move in immense accumulation of Investments and Management, Computers, Engineering, Medical, College and School content references books proposed by various foundations as schedule the nation over. Other than this, we likewise offer an expansive gathering of E-Books at reasonable valuing</p>
         <p>We endeavor to broaden consumer loyalty by providing food simple easy using web indexes, brisk and easy-to-understand installment alternatives, and snappier conveyance frameworks. Upside to the majority of this, we are arranged to give energizing offers and charming limits on our books.</p>
         <p>Too, we modestly welcome every one of the merchants around the nation to band together with us. We will without a doubt give you the stage to many shimmering areas and develop the BOOK ADDICTS family. We might want to thank you for shopping with us. You can keep in touch with us for any new musings at abc@gmail.com helping us to ad-lib for the peruser fulfillment.</p>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>