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
          
          <div class = "col-xs-6">
            <?php
            //...............................get data from form with post method and insert data ...................//
            insert_categories();
            ?>
            <form action="" method="post">
              <label for= "cat-title">Add Category</label>
              <div class="form-group">
                <input class="form-control" type="text" name ='cat_title'>
              </div>
              <div class="form-group">
                <input class=" btn btn-primary" type="submit" name ='submit' value = "Add category">
                
              </div>
              
            </form>
            <!-- updating catagories --->
            
            <?php
            //..............update and include categories update file is also in another location.............//
            // which is update_categories.php file
            if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'] ;
            include "include/update_categories.php";
            }
            ?>
          </div>
          <div class = "col-xs-6">
            <table class = "table table-bordered table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th>category iteam</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                //.......................find all categories..................................//
                findAllCategories();
                ?>
                <?php
                //......................delete from database .....................//
                deleteCategories();
                ?>
                
              </tbody>
            </table>
          </div>
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