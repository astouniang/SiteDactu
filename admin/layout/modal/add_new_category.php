<?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_category']))
      {
        $add_cat_title=$_POST['cat_title'];
        $add_cat_desc=$_POST['cat_desc'];
        $add_cat_slug=$_POST['cat_slug'];
        $add_cat_date=$_POST['cat_date'];
        $add_cat_edit_date=$_POST['cat_edit_date'];
        $add_cat_status=$_POST['cat_status'];
        $add_cat_priority=$_POST['cat_priority'];

        $add_cat_title = mysqli_real_escape_string($dbconnection, $add_cat_title);
        $add_cat_desc = mysqli_real_escape_string($dbconnection, $add_cat_desc);
        $add_cat_slug = mysqli_real_escape_string($dbconnection, $add_cat_slug);
        $add_cat_status = mysqli_real_escape_string($dbconnection, $add_cat_status);

        $sql_add_category = "INSERT INTO categories(cat_title,cat_desc, cat_slug, cat_date, cat_edit_date, cat_status, cat_priority) VALUES('$add_cat_title', '$add_cat_desc', '$add_cat_slug', '$current_date', '$current_date', '$add_cat_status', '$add_cat_priority')";
        $result_sql_add_category= mysqli_query($dbconnection, $sql_add_category);
        if (!$result_sql_add_category)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "Data added successfully";
        header("Location: category_admin.php");
                }
      }
     ?>
      <!--
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      --> 
        <div class="modal fade" id="InsertCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h4 class="modal-title" id="exampleModalLongTitle" align="center"><i class=""></i> Ajouter une Categorie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                <div class="form-group">
                  <label for="cat_title" class="col-form-label">Titre:</label>
                  <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="titre categoie" required="">
                </div>
                <div class="form-group">
                  <label for="cat_desc" class="col-form-label">Description Categorie:</label>
                  <input type="text" class="form-control" id="cat_desc" name="cat_desc" placeholder="Entrer une description" required="">
                </div>
              
              </div>
              <br><br><br>
              <div class="modal-footer">

                <button type="submit" class="" name="save_category"><span class="" aria-hidden="true"></span> Enregistrer</button>
              </div>
              </form>
            </div>
          </div>
        </div>