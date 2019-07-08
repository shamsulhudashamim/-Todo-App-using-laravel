<?php 

if(isset($_POST['create_post'])){


$post_title = $_POST['title'];
$post_author = $_POST['author'];
$post_category_id = $_POST['post_category_id'];
$post_status = $_POST['post_status'];
$post_image = $_FILES['image']['name'];

$post_image_temp = $_FILES['image']['tmp_name'];

$post_tag = $_POST['post_tag'];
$post_date = date('d-m-y');
$post_content = $_POST['post_content'];

$post_comment_count = 4;

move_uploaded_file($post_image_temp , '../images/'.$post_image);

$query = "INSERT INTO posts (post_tag,post_comment_count, post_status,post_category_id , post_title,post_author,post_date,post_image,post_content) VALUES ('{$post_tag}', {$post_comment_count} , '{$post_status}', '{$post_category_id}' , '{$post_title}' , '{$post_author}', now() , '{$post_image}','{$post_content}') ";


$create_post_query = mysqli_query($connection , $query);
  
  confirmQuery($create_post_query);

}


?>


<form action="" method="post" enctype = "multipart/form-data" >
  <div class="form-group">
    <label for="title">post title</label>
    <input type="text" class="form-control" name="title"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_category">post category id</label>
    <input type="text" class="form-control" name="post_category_id"  placeholder="Enter post category id">
  </div>
  <div class="form-group">
    <label for="title">post author</label>
    <input type="text" class="form-control" name="author"  placeholder="Enter authors name">
  </div>
  <div class="form-group">
    <label for="post_status">post status</label>
    <input type="text" class="form-control" name="post_status"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_image">post image</label>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label for="post_tag">post_tag</label>
    <input type="text" class="form-control" name="post_tag"  placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="post_content">post content</label>
    <textarea class="form-control" name="post_content" id="" cols="30" rows="10"  placeholder="Enter title"></textarea>
  </div>
  <button type="submit"name="create_post" value="publish post" class="btn btn-primary">Submit</button>
</form>


