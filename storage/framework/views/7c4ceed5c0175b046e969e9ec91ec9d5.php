<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboord.css')); ?>">
    <title>Document</title>
</head>
<body>
<div class="header-container">
       
   <img src="<?php echo e(asset('images/'.$data->photo)); ?>" alt="admin Photo" style="height: 150px;">
   <h1 class="m-t-10 m-b-5">welcome!</h1>
   <p class="m-b-10"> <?php echo e($data->email); ?></p>
   <a href="logout">Logout</a>

</div>
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
</body>
</html><?php /**PATH C:\Users\dell\Desktop\iti_projectfinal\example\resources\views/admin after login/dashboord.blade.php ENDPATH**/ ?>