<?php session_start(); ?>
<!DOCTYPE html> 

<html>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="add/add.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link type="text/css" rel="stylesheet" href="css\header.css">
     <link type="text/css" rel="stylesheet" href="css\footer.css">
  <title>Add Product</title>

<body>
<?php include('php/header1.php');?>
<div id="content" >
  <form action="indexaddproduct.php" method="post" enctype="multipart/form-data" >
    

    <div class="main">
      <p class="sign" align="center">Add Your Product</p>
      <form class="form1" enctype="multipart/form-data">
      <div class="form-group">
            
            <div class="remember12" align="center">
             <label for="Pname"><b>Product Name</b></label>
           </div>
    <input class="un " align="center" type="text" placeholder="Enter Name" name="Pname"  required>

  </div>
