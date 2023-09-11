<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboordnew.css')); ?>">
  </head>
  <body>
 

<div class="wrapper">
    <div class="left">
    <div class="imgpro">
        <img src="<?php echo e(asset('images/'.$data->photo)); ?>" alt="admin Photo" >
</div>
        <div class="cont">
            <h4>welcome to your profile Admin!</h4>
            <br>
            <p >email: <?php echo e($data->email); ?></p>
            <br><br>
            <a class="link" href="logout">Logout</a>
            <br><br> <br><br>
            <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
</div>
    </div>
    <div class="right">
      <div class="projects">
            <h3>ACTIVITY</h3>
            <div class="main">
  <div class="main1">
    <div class="mai">
        <a href="admins" target="../blank">
            <img src="imgout/employee-morale-and-wellbeing.png">
            <div class="mainspan">
              <span>admins</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="users" target="../blank" >
            <img src="imgout/USED_-Employee-engagement-ideas.jpg">
            <div class="mainspan">
              <span>users</span>
            </div>
         </a>
    </div>
</div>
<div class="main2">
    <div class="mai" >
        <a href="products" target="../blank" >
            <img src="imgout/supermarket-store.avif">
            <div class="mainspan">
              <span>products</span>
            </div>
         </a>
    </div>
    <div class="mai">
        <a href="categoryies" target="../blank" >
            <img src="imgout/istockphoto-1306860966-170667a.jpg">
            <div class="mainspan">
              <span>category</span>
            </div>
         </a>
    </div>
</div>
<div class="main3">
    <div class="mai" >
        <a href="orders" target="../blank" >
            <img src="imgout/dollars-cash-currency-pink-background_94008-151.avif">
            <div class="mainspan">
              <span>orders</span>
            </div>
         </a>
    </div>
</div>
    </div>    
        </div>
      
   
    </div>
</div>
  </body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_projectfinal\example\resources\views/admin after login/dashboordnew.blade.php ENDPATH**/ ?>