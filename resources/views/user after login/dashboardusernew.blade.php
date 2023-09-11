<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/dashboordnew.css')}}">
  </head>
  <body>
<div class="wrapper">
    <div class="left">
    <div class="imgpro">
        <img src="{{ asset('images/'.$data->photo) }}" alt="admin Photo" >
</div>
        <div class="cont">
            <h4>welcome to your profile <br> {{$data->name}}</h4>
            <br>
            <p >email: {{$data->email}}</p>
            <br><br>
            <a class="link" href="logoutuser">Logout profile</a>
            <a class="up" href="updateuser">edite profile</a>
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
  <div class="mainn3">
    <div class="mai">
        <a href="/" target="../blank">
            <img src="imgout/1000_F_105594718_QxMtoxQ7dNVVEUCtfm9SRUbzviJbFSCW.jpg" style="width: 830px; height: 330px;">
            <div class="mainspann">
              <span>shop now</span>
            </div>
         </a>
    </div>
</div>

  <div class="mainn3">
    <div class="mai">
        <a href="showuser" target="../blank" >
            <img src="imgout/pngtree-3d-render-of-a-row-of-pink-shopping-bags-image_3624092.jpg"style="width: 830px; height: 330px;">
            <div class="mainspann">
              <span>my orders</span>
            </div>
         </a>
    </div>
</div>
    </div>    
        </div>
      
  </body>
</html>