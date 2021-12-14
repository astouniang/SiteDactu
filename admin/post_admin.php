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
          
           <?php 
             if (isset($_POST['selectOneCheckBoxArray']))
             {
                 //header("Location: index.php");
               foreach ($_POST['selectOneCheckBoxArray'] as $checked_Box_Post_Id)
               {
                $group_options = $_POST['group_options'];
                switch ($group_options) {
                  case '1':
                    $sql_group_publish = "UPDATE posts SET post_status= '{$group_options}' WHERE id={$checked_Box_Post_Id}";
                     $result_sql_group_publish= mysqli_query($dbconnection, $sql_group_publish);
                    break;
                  case '0':
                    $sql_group_unpublish = "UPDATE posts SET post_status= '{$group_options}' WHERE id={$checked_Box_Post_Id}";
                     $result_sql_group_unpublish= mysqli_query($dbconnection, $sql_group_unpublish);
                    break;
                  case 'delete':
                  $sql_group_delete = "DELETE FROM posts WHERE id ={$checked_Box_Post_Id}";
                  $result_sql_group_delete = mysqli_query($dbconnection, $sql_group_delete);
                  header("Location: post_admin.php");
                    # code...
                    break;
                  
                  default:
                    # code...
                    break;
                }
               }
               header("Location: post_admin.php");
             }

              ?>

          
          <button type="button" class="" data-toggle="modal" data-target="#InsertPost"><span class="" aria-hidden="true" onclick="mouseOver(this)"></span> Ajouter un nouveau post</button>
          <div class="box-tools pull-right">
          
              
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <form action="" method="post" onsubmit="return confirm('Are you sure you want to do that?');">
           <table width=100%>
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                $(document).ready(function(){
                  $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
                </script>
                 
              </th>
              
             </tr>

           </table>
            <br>
          <table class="table table-hover">
            <tr class="">
              <th style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectAllCategoryCheckbox" name="selectAllCategoryCheckbox">
              </th>
              <th style="text-align: center;">Titre</th>
              <th style="text-align: center;">Categories</th>
              <th style="text-align: center;">Modifier</th>
              <th style="text-align: center;">Supprimer</th>
            </tr>
            <?php 
                $counter= 0;
                $sql_select_post = "SELECT * FROM posts ORDER BY id desc";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];
                 
                  $counter++;
                  
             ?>
             <tbody id="myTable">
            <tr class="">
              <td style="text-align: center;">
                <input type="checkbox" class="form-check-input" id="selectOneCheckBoxArray" name="selectOneCheckBoxArray[]" value="<?php echo $view_post_id; ?>">
              </td>
              <td style="text-align: left;"><a href="../post.php?postid=<?= $view_post_id; ?>" target="_blank" style="color:black"><?php echo $view_post_title ?></a></td>
              <?php 
                $sql_select_users = "SELECT * FROM users WHERE id={$view_post_autor}";
                $result_sql_select_users = mysqli_query($dbconnection, $sql_select_users);
                while ($rowusers = mysqli_fetch_assoc($result_sql_select_users))
                {
                  $view_users_id = $rowusers['id'];
                  $view_users_name = $rowusers['name'];
                  $view_users_username = $rowusers['username'];
                  $view_users_email = $rowusers['email'];
                  $view_users_password = $rowusers['password'];
                  $view_users_gender = $rowusers['gender'];
                  $view_users_image = $rowusers['image'];
                  $view_users_code = $rowusers['code'];
                  $view_users_status = $rowusers['status'];
                  $view_users_type = $rowusers['type'];
                }
             ?>



              <td style="text-align: center;"><?php echo $view_users_name ?></td>
              <?php 
                    $sql_select_category_by_id = "SELECT * FROM categories WHERE id ={$view_post_category}";
                    $result_sql_select_category_by_id = mysqli_query($dbconnection, $sql_select_category_by_id);
                     while ($rowcategory_by_id = mysqli_fetch_assoc($result_sql_select_category_by_id))
                      {
                        $view_category_id_by_id = $rowcategory_by_id['id'];
                        $view_cat_title_by_id = $rowcategory_by_id['cat_title'];
                        //$view_cat_desc_by_id = $rowcategory_by_id['cat_desc'];
                      } 
              ?>
              <td style="text-align: center;"><?php echo $view_cat_title_by_id ?></td>
 
              <?php 
                if ($view_post_status==1)
                {
               ?>
              
              <?php 
                }
                else
                {
              ?>
             
              <?php
                }
              ?>
         
              <td style="text-align: center;">

                <button type="button" name="edit" class="" data-toggle="modal" data-target="#EditPost" data-post_id_edit="<?= $view_post_id ?>" data-post_category_edit="<?= $view_post_category ?>" data-post_title_edit="<?= $view_post_title ?>" data-post_autor_edit="<?= $view_post_autor ?>" data-post_date_edit="<?= $view_post_date ?>" data-post_edit_date_edit="<?= $view_post_edit_date ?>" data-post_image_edit="<?= $view_post_image ?>" data-post_text_edit="<?= $view_post_text ?>" data-post_tag_edit="<?= $view_post_tag ?>" data-post_visit_counter_edit="<?= $view_post_visit_counter ?>" data-post_status_edit="<?= $view_post_status ?>" data-post_priority_edit="<?= $view_post_priority ?>"> <span class="" aria-hidden="true"></span> Modifier</button>

               
              </td>
              <td>
              <button type="button" class="" data-toggle="modal" data-target="#DeletePost" data-post_id_delete="<?= $view_post_id ?>"><span class="" aria-hidden="true"></span> Supprimer</button>
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
     <!-- Modal add new post -->
    <?php include "layout/modal/add_new_post.php"; ?>
     <!-- // Modal add new Post -->
    <!-- Modal Delete Post-->
    <?php include "layout/modal/delete_post.php"; ?>
    <!-- // Modal Delete Post-->
    <!-- Modal EDIT  Post -->
    <?php include "layout/modal/edit_post.php"; ?>
    <!-- // Modal EDIT  Post -->
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
