<?php
  if (isset($_POST['save'])) {
  $post = $_POST['post'];
  $img = $_FILES['image']['name'];
  $Folder = "Add Post/picture/".$img;
  $ftype=$_FILES['image']['type'];
  $type=array("image/jpg","image/png","image/jpeg","image/webp");
  $insert = "insert into post values ( 'NULL' ,  '$post' , '$Folder' )";
    
    $f=0;
               for($a=0;$a<4;$a++)
               {
               if($type[$a]==$ftype)
               {
                if(mysqli_query($connection, $insert)){
               $f=1;
}
>
