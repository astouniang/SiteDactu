<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_user']))
      {
        $add_user_name=$_POST['user_name'];
        $add_user_username=$_POST['user_username'];
        $add_user_email=$_POST['user_email'];
        $add_user_password1=$_POST['user_password'];
        $add_user_password=md5($add_user_password1);
        $add_user_gender=$_POST['user_gender'];
        //$add_user_image=$_POST['user_image'];


        $add_user_code=$_POST['user_code'];
        $add_user_status=$_POST['user_status'];
        $add_user_type=$_POST['user_type'];

        $sql_add_user = "INSERT INTO users(name,username,email,password,gender,image,code,status,type) VALUES('$add_user_name', '$add_user_username', '$add_user_email', '$add_user_password', '$add_user_gender', '$add_user_image', '$add_user_code', '$add_user_status', '$add_user_type')";
        $result_sql_add_user= mysqli_query($dbconnection, $sql_add_user);
        if (!$result_sql_add_user)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "Data added successfully";
                  header("Location: users_admin.php");
                }
      }
     ?>
      <!--
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      --> 
        <div class="modal fade" id="InsertUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="" id="exampleModalLongTitle" align="center"><i class="f"></i> Ajouter un nouveau utilisateur!!!!!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
 
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Name:</label>
                  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter Name Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Username:</label>
                  <input type="text" class="form-control" id="user_username" name="user_username" placeholder="Enter Username Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Email:</label>
                  <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter Email Here" data-error="Bruh, that email address is invalid" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="user_type" class="col-form-label"> User type:</label>
                      <select class="form-control" id="user_type" name="user_type" required>
                    <option value="" disabled selected>Select...</option>
                    <option value="0" >Utilisateur</option>
                    <option value="1">Administrateur</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="user_password" class="col-form-label"> Password:</label>
                  <input type="password" data-minlength="6" class="form-control" name="user_password" id="user_password" placeholder="Enter Password Here" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="user_password_reapet" class="col-form-label"> Confirm Password:</label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password" required>
                </div>
   
              
              </div>
              <br>
              <div class="modal-footer">
                
                <button type="submit" class="" name="save_user"><span class="" aria-hidden="true"></span> Enregistrer</button>
              </div>
              </form>
            </div>
          </div>
        </div>
