
<?php 



if(isset($_GET['p_id']))
{

$the_post_id =$_GET['p_id'];

}
$query = "SELECT * FROM posts";
$select_posts_by_id = mysqli_query($connection , $query);
while( $row= mysqli_fetch_assoc($select_posts_by_id)){
$post_id = $row['post_id'];
$post_author = $row['post_author'];
$post_title = $row['post_title'];

$post_category_id = $row['post_category_id'];
$post_status = $row['post_status'];
$post_image = $row['post_image'];
$post_tag = $row['post_tag'];
$post_comment_count = $row['post_comment_count'];
$post_date = $row['post_date'];
$post_content = $row['post_content'];


}








?>


<form action="" method="post" enctype = "multipart/form-data" >
  <div class="form-group">
    <label for="title">post title</label>
    <input value=" <?php echo $post_title; ?> " type="text" class="form-control" name="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_category">post category id</label>
    <input value=" <?php echo $post_category_id; ?> " type="text" class="form-control" name="post_category_id"  placeholder="Enter post category id">
  </div>
  <div class="form-group">
    <label for="title">post author</label>
    <input value=" <?php echo $post_author; ?> "  type="text" class="form-control" name="author"  placeholder="Enter authors name">
  </div>
  <div class="form-group">
    <label for="post_status">post status</label>
    <input value=" <?php echo $post_status; ?> " type="text" class="form-control" name="post_status"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_image">post image</label>
    <img width='100' src="../images/<?php echo $post_image; ?>" alt="">
  </div>
  <div class="form-group">
    <label for="post_tag">post_tag</label>
    <input value=" <?php echo $post_tag; ?> " type="text" class="form-control" name="post_tag"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_content">post content</label>
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
    	  <?php echo $post_content; ?> 
    </textarea>
  </div>
  <button type="submit"name="create_post" value="publish post" class="btn btn-primary">Submit</button>
</form>