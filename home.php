<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];


if (!isset($user_id)) {
   header('location:login.php');
};

if (isset($_POST['add_to_wishlist'])) {

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);

   $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
   $check_wishlist_numbers->execute([$p_name, $user_id]);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if ($check_wishlist_numbers->rowCount() > 0) {
      $message[] = 'already added to wishlist!';
   } elseif ($check_cart_numbers->rowCount() > 0) {
      $message[] = 'already added to cart!';
   } else {
      $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
      $insert_wishlist->execute([$user_id, $pid, $p_name, $p_price, $p_image]);
      $message[] = 'added to wishlist!';
   }
}

if (isset($_POST['add_to_cart'])) {

   $pid = $_POST['pid'];
   $pid = filter_var($pid, FILTER_SANITIZE_STRING);
   $p_name = $_POST['p_name'];
   $p_name = filter_var($p_name, FILTER_SANITIZE_STRING);
   $p_price = $_POST['p_price'];
   $p_price = filter_var($p_price, FILTER_SANITIZE_STRING);
   $p_image = $_POST['p_image'];
   $p_image = filter_var($p_image, FILTER_SANITIZE_STRING);
   $p_qty = $_POST['p_qty'];
   $p_qty = filter_var($p_qty, FILTER_SANITIZE_STRING);

   $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
   $check_cart_numbers->execute([$p_name, $user_id]);

   if ($check_cart_numbers->rowCount() > 0) {
      $message[] = 'already added to cart!';
   } else {

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$p_name, $user_id]);

      if ($check_wishlist_numbers->rowCount() > 0) {
         $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
         $delete_wishlist->execute([$p_name, $user_id]);
      }

      $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
      $insert_cart->execute([$user_id, $pid, $p_name, $p_price, $p_qty, $p_image]);
      $message[] = 'added to cart!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PharmEasy | Online Pharmacy & Medical Store in India</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="https://assets.pharmeasy.in/apothecary/images/favicon.png" type="image/x-icon">
   <style>
      /* Center the preloader */
      #preloader {
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #ffffff;
         z-index: 9999;
      }

      /* Add animation to the spinner */
      #spinner {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 200px;
         height: auto;
      }
   </style>

</head>

<body>

   <div id="preloader">
      <div id="spinner"></div>
   </div>


   <?php include 'header.php'; ?>
   <div class="home-bg">

      <section class="home">

         <div class="content">
            <span><img src="https://assets.pharmeasy.in/web-assets/dist/e3db129c.png" alt=""></span>
            <!-- <h3>Get More Information About : Wizarding World</h3> -->
            <h3>PharmEasy : Your Rx for Health and Happiness!</h3>
            <p>Effortless prescriptions, doorstep delivery – because your well-being deserves simplicity and care.</p>
            <a href="about.php" class="btn-new">About us</a>
         </div>

      </section>

   </div>
   <div class="fan-club">
      <p class="head">Team PharmEasy</p>
      <h1>Medicines at Your Doorstep, Peace of Mind in Every Dose</h1>
      <p class="info center">
         Your Trusted Partner in Health, Where Convenience Meets Compassion.
      </p>
      <a href="shop.php" class="btn-new">Order Now</a>
      <br><br>
   </div>
   <section class="home-category">

      <h1 class="title">Shop by Categories</h1>

      <div class="box-container">

         <div class="box">
            <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/1e622b0308ec3ab48887512eaa3488a5.png?f=png?dim=256x0" alt="">
            <h3>Personal Care</h3>
            <a href="category.php?category=Personal Care" class="btn">Check Now</a>
         </div>

         <div class="box">
            <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/9cc9a28ea4513009966cae794114eefd.png?f=png?dim=256x0" alt="">
            <h3>Healthcare Devices</h3>
            <a href="category.php?category=Healthcare Devices" class="btn">Check Now</a>
         </div>

         <div class="box">
            <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/335dae76832d370c94f0440f5ba89e1f.png?f=png?dim=256x0" alt="">
            <h3>Health Food</h3>
            <a href="category.php?category=Health Food" class="btn">Check Now</a>
         </div>

         <div class="box">
            <img src="https://cdn01.pharmeasy.in/dam/discovery/categoryImages/514d0d7d01a63502b4ebfec9ae26f4d2.png?f=png?dim=256x0" alt="">
            <h3>Ayurvedic Care</h3>
            <a href="category.php?category=Ayurvedic Care" class="btn">Check Now</a>
         </div>

      </div>

   </section>
   <div class="fan-club middle">
      <p class="head">Team PharmEasy</p>
      <h1>PharmEasy App: Unbox Wellness.</h1>
      <p class="info center">
         Seamless, Convenient, and Always at Your Fingertips. Download Now for a Healthier Tomorrow!
      </p>
      <a href="https://apps.apple.com/in/app/pharmeasy-healthcare-app/id982432643?mt=8" class="btn-new">Download Now</a>
      <br><br>
   </div>
   <section class="products">

      <h1 class="title">latest products</h1>

      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` ORDER BY `id` ASC LIMIT 3");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" class="box" method="POST">
                  <div class="price">₹<span><?= $fetch_products['price']; ?></span>/-</div>
                  <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <div class="name"><?= $fetch_products['name']; ?></div>
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="p_name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="p_price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="p_image" value="<?= $fetch_products['image']; ?>">
                  <input type="number" min="1" value="1" name="p_qty" class="qty">
                  <input type="submit" value="Add to Wishlist" class="option-btn" name="add_to_wishlist">
                  <input type="submit" value="Add to Cart" class="btn" name="add_to_cart">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">No products added yet!</p>';
         }
         ?>


      </div>

   </section>


   <div class="blogs">
      <h1 class="title">Health Blogs</h1>
      <div class="blog-container">
         <div class="fan-club first-blog">
            <p class="head">Team PharmEasy</p>
            <h1>Does Black Coffee Reduce Weight: Insights into Coffee’s Role in Weight</h1>
            <p class="info">
               By The PharmEasy Team
            </p>
            <a href="#" class="btn-new">Read More</a>
            <br><br>
         </div>
         <div class="fan-club first-blog second-blog">
            <p class="head">Team PharmEasy</p>
            <h1>Beetroot Juice: Uses, Benefits, Side Effects Precautions & More!</h1>
            <p class="info">
               By The PharmEasy Team
            </p>
            <a href="#" class="btn-new">Read More</a>
            <br><br>
         </div>
         <div class="fan-club first-blog third-blog">
            <p class="head">Team PharmEasy</p>
            <h1>Ashokarishta: Uses, Benefits, Side Effects, Precautions & More!
            </h1>
            <p class="info">
               By The PharmEasy Team
            </p>
            <a href="#" class="btn-new">Read More</a>
            <br><br>
         </div>
      </div>
   </div>
   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>
   <script src="lottie.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.9/lottie.min.js"></script>
   <script>
      window.addEventListener("load", function() {
         var preloader = document.getElementById("preloader");
         var animation = bodymovin.loadAnimation({
            container: document.getElementById('spinner'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'https://lottie.host/93a86c1c-350e-49c7-afd8-c8f8ca282e47/TxKjvqeWUA.json',
            /* change the filename as needed */
            rendererSettings: {
               preserveAspectRatio: 'xMidYMid slice'
            },
            // Set the width of the animation container
            // (use the same value as the CSS style above)
            // The height will be calculated automatically
            containerParams: {
               width: 100
            }
         });
         setTimeout(function() {
            preloader.style.display = 'none';
         }, 4000); /* set the delay in milliseconds */
      });
   </script>
</body>

</html>