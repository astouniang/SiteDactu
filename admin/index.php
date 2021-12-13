<?php include "db_connection.php" ?>
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
    <section class="content-header">
      <h1>
        lES CATEGORIES!!!!!!!!!!!!
        
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="col">
        <div class="col-lg-12">
          <!-- small box -->
          <div class="">
        <li>
        <a href="category_admin.php" class="small-box-footer">CATEGORIES<i class=""></i></a>
        </li>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-12 col-xs-6">
          <!-- small box -->
          <div class="">
            <li>
            <a href="post_admin.php" class="small-box-footer">POSTS <i class=""></i></a>
            </li>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
       
           <li>
           <a href="users_admin.php" class="small-box-footer">USERS<i class=""></i></a>
           </li>
           
          </div>
        </div>
        <!-- ./col -->
        <div>
          <!-- small box -->
         
           

    </section>
    <!-- /.content -->
  </div>
  <!-- Modal add new post -->
    <?php include "layout/modal/add_new_post.php"; ?>
     <!-- // Modal add new Post -->
     <?php include "layout/modal/edit_user.php" ?>
  <!-- /.content-wrapper -->
  <?php include "layout/footer.php"; ?>

  <?php include "layout/rightsidebar.php"; ?>
<!-- ./wrapper -->

<?php include "layout/scripts.php"; ?>
</body>
</html>
