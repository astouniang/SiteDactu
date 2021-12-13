<div class="col-md-4">
          <?php 
            if (!isset($_SESSION['type']))
            {
           ?>
        <div class="login-form">
    <!--<form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Sign in</h2>  --> 
         <!-- 
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
            <a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
      <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
        </div>--> 
    <div class="or-seperator"></div>
    <form action="layout/login.php" method="post">
        <div class="form-group">
          <div class="input-group">
                <span class="input-group-addon"><i class=""></i> </span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class=""></i> </span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary btn-block login-btn">Se connecter</button>
        </div>
        
        
    </form>
    
</div>
 <?php 
            }
            else
            {
              $success_login_id = $_SESSION['id'];
              $success_login_name_admin = $_SESSION['name'];
              $success_login_username_admin = $_SESSION['username'];
              $success_login_email_admin = $_SESSION['email'];
              $success_login_type_password_admin = $_SESSION['password'];
              $success_login_gender_admin = $_SESSION['gender'];
              $success_login_image_admin = $_SESSION['image'];
              $success_login_code_admin = $_SESSION['code'];
              $success_login_status_admin = $_SESSION['status'];
              $success_login_type_admin = $_SESSION['type'];
              
           ?>
<div class="card my-4">
       
        <div class="card-header">
          
          <!-- Status -->
          <p align="center">
            <?php 
              if ($_SESSION['type'] =='1')
              {
               

             ?>
          <a href="admin/" class="btn btn-default btn-flat" target="_blank">Admin</a>
          <?php
           }
           else
            {

           ?>
           <a href="profil.php/" class="btn btn-default btn-flat">Mon Profil</a>
           <?php } ?>
          <a href="layout/logout.php" class="btn btn-default btn-flat">déconnection</a></p>
        </div>
      </div>
      <?php 
            }
          ?>
   

        <!-- Search Widget -->
  

        <!-- Categories Widget -->
        

        <!-- Side Widget -->
   
   </div>