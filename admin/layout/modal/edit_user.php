<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['edit_user']))
      {
        $edit_user_id=$_POST['user_id_edit'];
        $edit_user_name=$_POST['user_name_edit'];
        $edit_user_username=$_POST['user_username_edit'];
        $edit_user_email=$_POST['user_email_edit'];
        $edit_user_password11=$_POST['user_password_edit'];
        $edit_user_password=md5($edit_user_password11);
        //$edit_user_gender=$_POST['user_gender_edit'];
        //$add_user_image=$_POST['user_image'];

        $image_extension = pathinfo($_FILES["user_image"]["name"], PATHINFO_EXTENSION);
        if ($image_extension=='jpg' || $image_extension=='jpeg' || $image_extension=='png' || $image_extension=='gif') 
        {
          $add_user_image = $_FILES["user_image"]["name"];
          $add_user_image_temp = $_FILES["user_image"]["tmp_name"];
          move_uploaded_file($add_user_image_temp,"images/users/$add_user_image");
        }
        
       
         

        $edit_user_code=$_POST['user_code_edit'];
        $edit_user_status=$_POST['user_status_edit'];
        $edit_user_type=$_POST['user_type_edit_select'];

        $sql_edit_user = "UPDATE users SET name='$edit_user_name', username='$edit_user_username', email='$edit_user_email', password='$edit_user_password', gender = '$edit_user_gender', image = '$add_user_image', code='$edit_user_code', status='$edit_user_status', type='$edit_user_type' WHERE id={$edit_user_id}";

        
        $result_sql_edit_user= mysqli_query($dbconnection, $sql_edit_user);
        if (!$result_sql_edit_user)
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
        <div class="modal fade" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center"><i class=""></i> Modifier un Utilisateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="">
            
              <p id="user_name_write"></p>
              <p class="text-muted text-center">  </p>
            </div>
            <script>
function mouseOverUser() {
   //var image_user = document.getElementById('user_image_edit');
   var slikazaprikazusera = document.getElementById("user_image_edit").value; 
   var putanjauser = 'images/users/';
   imageuser.setAttribute('src', putanjauser + slikazaprikazusera);
   
   //alert(slikazaprikaz);
}
//function bigImg() {
  // var image = document.getElementById('image');
   //image.setAttribute('src', 'images/blog/nophoto-default1.jpg');
//}
</script>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
                <form method="post" action="" enctype="multipart/form-data">
 
                <div class="form-group col-md-4">
                  <input type="hidden" name="user_id_edit" id="user_id_edit">
                  <label for="cat_title" class="col-form-label"> Nom:</label>
                  <input type="text" class="form-control" id="user_name_edit" name="user_name_edit" placeholder="Nom" required="">
                  
                  <input type="hidden" name="user_image_edit" id="user_image_edit">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Username:</label>
                  <input type="text" class="form-control" id="user_username_edit" name="user_username_edit" placeholder="Username" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cat_title" class="col-form-label"> Email:</label>
                  <input type="email" class="form-control" id="user_email_edit" name="user_email_edit" placeholder="email" data-error="Bruh, that email address is invalid" required="">
                </div>
                <div id="p1" class="form-group col-md-4"></div> <input type="hidden" name="testg" id="testg">

                <input type="hidden" name="user_type_edit" id="user_type_edit">
                <div class="form-group col-md-4">
                  <label for="user_password" class="col-form-label"> Password:</label>
                  <input type="password" data-minlength="6" class="form-control" name="user_password_edit" id="user_password_edit" placeholder="Password" data-toggle="password" required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="user_password_reapet" class="col-form-label"> Confirm Password:</label>
                  <input type="password" class="form-control" name="confirm_password_edit" id="confirm_password_edit" placeholder="Confirm password" data-toggle="passwordconfirm" required>
                </div>
             
                <div class="form-group col-md-4" id="p2" align="center">
                  
                </div>
              
              </div>
              
              <br>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" name="edit_user"><span class="" aria-hidden="true"></span> Enregistrer</button>
              </div>
              </form>
          
       
       
