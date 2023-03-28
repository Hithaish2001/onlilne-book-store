
<header class="header">

   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo">Book Addicts</a>

         <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i></a>
         </div>

         <div class="user-box">
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>

</header>