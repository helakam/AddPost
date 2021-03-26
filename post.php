<?php
  if (isset($_POST['save'])) {
  $post = $_POST['post'];
  $img = $_FILES['image']['name'];
  $Folder = "Add Post/picture/".$img;
  $ftype=$_FILES['image']['type'];
  $type=array("image/jpg","image/png","image/jpeg","image/webp");
  $insert = "insert into post values ( 'NULL' ,  '$post' , '$Folder' )";
  
}
>
