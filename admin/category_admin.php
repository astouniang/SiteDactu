<?php 
  ob_start();
  include "db_connection.php";
?>
<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "layout/header.php"; ?>
  <?php include "layout/leftsidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">


          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InsertCategory"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new category</button>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <form action="" method="post">
         
          <table class="table table-hover">
            <tr class="info">
              <th style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectAllCategoryCheckbox" name="selectAllCategoryCheckbox">
              </th>
              <th style="text-align: center;">Categories</th>
              <th style="text-align: center;">Description</th>
              <th style="text-align: center;">Edit/Delete</th>
            </tr>
            <?php 
                $counter= 0;
                $sql_select_category = "SELECT * FROM categories ORDER BY id desc";
                $result_sql_select_category = mysqli_query($dbconnection, $sql_select_category);
                while ($rowcategory = mysqli_fetch_assoc($result_sql_select_category))
                {
                  $view_category_id = $rowcategory['id'];
                  $view_cat_title = $rowcategory['cat_title'];
                  $view_cat_desc = $rowcategory['cat_desc'];
                  $view_cat_priority = $rowcategory['cat_priority'];
                  $view_cat_date = $rowcategory['cat_date'];
                  $counter++;
                  
             ?>
             <tbody id="myTable">
            <tr class="success">
              <td style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectOneCheckBoxArray" name="selectOneCheckBoxArray[]" value="<?php echo $view_category_id; ?>">
              </td>
              <td style="text-align: center;"><?php echo $view_cat_title ?></td>
              <td style="text-align: center;"><?php echo $view_cat_desc ?></td>
          
             
              <?php 
                if ($view_cat_status==1)
                {
               ?>
              <td style="text-align: center;"><span class="label label-success">Published</span></td>
              <?php 
                }
                else
                {
              ?>
              
              <?php
                }
              ?>
              <td style="text-align: center;">

                <button type="button" name="edit" class="" data-toggle="modal" data-target="#EditCategory" data-category_id_edit="<?= $view_category_id ?>" data-category_title_edit="<?= $view_cat_title ?>" data-cat_desc_edit="<?= $view_cat_desc ?>" data-cat_slug_edit="<?= $view_cat_slug ?>" data-cat_priority_edit="<?= $view_cat_priority ?>" data-cat_date_edit="<?= $view_cat_date ?>"> <span class="" aria-hidden="true"></span> Modifier</button>

               <button type="button" class="b" data-toggle="modal" data-target="#DeleteCategory" data-category_id_delete="<?= $view_category_id ?>"><span class="" aria-hidden="true"></span> Supprimer</button>
              </td>
            </tr>
            <?php
                } 
             ?>
             </tbody>
          </table>
          </form>
        </div>
        <!-- /.box-body -->
 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
     <!-- Modal add new category -->
      <?php include "layout/modal/add_new_category.php" ?>
     <!-- // Modal add new category -->
    <!-- Modal Delete Category-->
      <?php include "layout/modal/delete_category.php" ?>
    <!-- // Modal Delete Category-->
    <!-- Modal EDIT  category -->
    <?php include "layout/modal/edit_category.php" ?>
<!-- // Modal EDIT  category -->
<!-- Modal add new post -->
    <?php include "layout/modal/add_new_post.php"; ?>
     <!-- // Modal add new Post -->
     <!-- Modal EDIT  user -->
    <?php include "layout/modal/edit_user.php" ?>
<!-- // Modal EDIT  user -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "layout/footer.php"; ?>

  <?php include "layout/rightsidebar.php"; ?>
<!-- ./wrapper -->
<?php include "layout/scripts.php"; ?>



</body>
</html>
