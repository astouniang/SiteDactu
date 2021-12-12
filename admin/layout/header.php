<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>HP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Page</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li><a href="comment_admin.php">
              
             
              <i class=""></i><span class="hidden-xs">  new post</span>
            </a></li>
            <!-- Modal add new post -->
            <?php //include "layout/modal/add_new_post.php"; ?>
             <!-- // Modal add new Post -->
          <!-- Messages: style can be found in dropdown.less-->
  
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span class="hidden-xs"><?php echo $success_login_name_admin; ?></span>
            </a>
            <ul class="dropdown-menu">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="">
                  <a href="../layout/logout.php" class="btn btn-default btn-flat">deconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->