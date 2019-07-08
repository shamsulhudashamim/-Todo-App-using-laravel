<table class = "table table-bordered table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                
                <th>category</th>
                <th>status</th>
                <th>image</th>
                <th>tags</th>
                <th>comments</th>
                <th>date</th>
              </tr>
            </thead>
            <tbody>

<?php

$query = "SELECT * FROM posts";
$select_posts = mysqli_query($connection , $query);
while( $row= mysqli_fetch_assoc($select_posts)){
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
echo "<tr>";
echo "<td>{$post_id}</td>";
echo "<td>{$post_title}</td>";
echo "<td>{$post_author}</td>";
echo "<td>{$post_category_id}</td>";
echo "<td>{$post_status}</td>";
echo "<td><img class='img-responsive' src='../images/$post_image' alt ='image'></td>";
echo "<td>{$post_tag}</td>";
echo "<td>{$post_comment_count}</td>";
echo "<td>{$post_date}</td>";
echo "<td>{$post_content}</td>";
echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";

echo "</tr>";

}

 ?>

              
                <td>10</td>
                <td>shamim</td>
                <td>book</td>
                <td>science fickson</td>
                <td>how are we</td>
                <td>show image</td>
                <td>php laravel wordpress</td>
                <<td>comments</td>
                <<td>date</td>
             
            </tbody>
          </table>

          <?php
          if (isset($_GET['delete']))
          {
            $the_post_id = $_GET['delete'];
            $query=" DELETE FROM posts WHERE post_id= {$the_post_id} ";
            $delete_query = mysqli_query($connection, $query);

          }
          ?>