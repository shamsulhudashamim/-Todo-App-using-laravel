<?php

function confirmQuery($result){
	global $connection ;
	if(!$result){
    die("query failed" .mysqli_error($connection));
  }
}


function insert_categories(){
		global $connection ;
if(isset($_POST['submit'])){
$cat_title = $_POST['cat_title'];
if($cat_title == "" || empty($cat_title)){
echo "this file should not be empty";
}
else{
$query = "INSERT INTO catagories(cat_title) VALUES ('{$cat_title}') ";
$create_catagory_query = mysqli_query($connection , $query);
if(!$create_catagory_query){
die("query failed".mysqli_error());
}
}


}
}
function findAllCategories(){
	global $connection ;
	$query = "SELECT * FROM catagories";
$select_catagories = mysqli_query($connection , $query);
while( $row= mysqli_fetch_assoc(  $select_catagories)){
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];
echo "<tr>";
	echo " <td> {$cat_id} </td>";
	echo " <td> {$cat_title} </td>";
	echo " <td><a href= 'categories.php?delete={$cat_id}'> Delete </a> </td>";
	echo " <td><a href= 'categories.php?edit={$cat_id}'> Edit </a> </td>";
echo "</tr>";
}
}
function deleteCategories(){
	global $connection ;
if(isset($_GET['delete'])){
$the_cat_id = $_GET['delete'];
$query = "DELETE  FROM catagories WHERE cat_id = {$the_cat_id} ";
$delete_query = mysqli_query($connection , $query);
header("Location: categories.php");
}
}
?>