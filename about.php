<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About : Wizarding World</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="https://assets.pharmeasy.in/apothecary/images/favicon.png" type="image/x-icon">
</head>

<body>

   <?php include 'header.php'; ?>
   <div class="home-bg about-us">
      <section class="home">

         <div class="content">
            <span><img src="https://assets.pharmeasy.in/web-assets/dist/e3db129c.png" alt=""></span>
            <h3>PharmEasy Chronicles: Crafting a Legacy of Wellness.</h3>
            <p>Discover Our Story, Rooted in Care, Innovation, and Your Journey to a Healthier Life.</p>
            <a href="#scroll" class="btn-new">Scroll down</a>
         </div>

      </section>

   </div>
   <section class="about" id="scroll">

      <div class="row">

         <div class="box">
            <img id="wizarding_world_logo" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/PharmEasy_logo.png">
            <h3>What is PharmEasy ??</h3>
            <p>
               <b><i>PharmEasy is a consumer healthcare “super app”.</i></b>
               that provides consumers with on-demand, home delivered access to a wide range of prescription, OTC pharmaceutical, other consumer healthcare products, comprehensive diagnostic test services, and teleconsultations thereby serving their healthcare needs.
            </p>
            <p>
               PharmEasy offers 1 lakh+ medicines and health products across various categories through its retail partners which are spread across the country. You can simply place an order on our website/app and we will deliver your online medicine order in as low as 4 hours, with a guaranteed delivery to you in 24-48* hrs!
               You can either pay online or opt for COD (cash on delivery) for your orders.
            </p>
            <p>
               Our team of experts work hard to provide reliable, accurate and trusted information. Our objective is to make healthcare services accessible and deliver credible, carefully handpicked, validated and well-curated healthcare content. All our medicine and healthcare content is strictly moderated by our team of healthcare experts, qualified and trusted doctors, pharmacists, and editors.
            </p>
            <h3>Core Values of PharmEasy</h3>
            <p>
               To further our vision and goals, we came up with the following core values. Our values are highly instrumental in deciding where we want to go and how we will get there.
               We believe that great work culture is a vital ingredient to a company’s success. Our team members are encouraged to take ownership and work as a unit. Every team member inspires and motivates other members to contribute to the team’s success.
            </p>
            <a href="contact.php" class="btn">contact us</a>
            <a href="shop.php" class="btn">Our Store</a>
         </div>
   </section>

   <section class="reviews">

      <h1 class="title">clients reviews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>PharmEasy is a game-changer! Quick deliveries, affordable prices, and a user-friendly interface. My go-to for all healthcare needs!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Impressed with the seamless experience on PharmEasy. The app is intuitive, and the customer support is exceptional. Highly recommend.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Emily Davis</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>PharmEasy made getting my medications hassle-free. The doorstep delivery is a lifesaver, especially during busy days. Thank you, PharmEasy!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Michael Lee</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>As a healthcare professional, I appreciate PharmEasy's commitment to quality and safety. Reliable service with a wide range of genuine products.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jenny Nguyen</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>IEfficiency at its best! PharmEasy not only saves me time but also money. The discounts and offers are fantastic. Happy customer!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Alex Rodriguez</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>PharmEasy has become my health companion. The app is so convenient, and their dedication to customer satisfaction is evident. Kudos to the team!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Olivia Wilson</h3>
         </div>

      </div>

   </section>









   <?php include 'footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>