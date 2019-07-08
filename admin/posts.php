<?php include "include/admin_header.php" ?>
<?php if($connection) echo "connected"; ?>
<div id="wrapper">
  <!-- Navigation -->
  <?php include "include/admin_navigation.php" ; ?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
          Welcome to Admin panel
          <small>Author</small>
          </h1>
          
<?php

if(isset($_GET['source'])){


$source = $_GET['source'] ;

}

else{

  $source ='';
}
switch($source){

case 'add_post';
include "include/add_post.php";
break ;

case 'edit_post';
include "include/edit_post.php";
break;

case '40';
echo 'statement'; 
break ;

case '57';
echo 'statement'; 
break;

default;
include "include/view_all_posts.php";
break;

}





 ?>




          
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php include 'include/admin_footer.php' ; ?>