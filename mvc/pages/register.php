<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    
    
<style>
    
label {    
    padding-top:4%;
    padding-left:85px;
    }
    
  body {
    font-family: 'Open Sans', sans-serif;
  }
    
</style>
</head>

<body>

<?php

include "header.php";
?>

<div class="container" align = "center" style="margin-top: 2%;">

<div>
<form action="index.php?page=accounts&action=register" method="post">

      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-3"><label>Welcome to MVC Home</label></div>
          <div class="col-sm-3"></div>
      </div>
      <br><br>
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>First name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="text" name="fname" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Last name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="text" name="lname" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Email: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="email" name="email" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Phone: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="number" name="phone" maxlength="10" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Birthday: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="text" name="birthday" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Gender: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="text" name="gender" required class="form-control" style="width:50%;float:left;" required>
          </div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Password: </label></div>
          <div class="col-sm-5" style="padding-left:0px;"><input type="password" name="password" required class="form-control" style="width:50%;float:left;" required></div>
      </div><br>    
    
    <br>
    <input type="submit" value="Submit form" class="btn btn-info active" >
</form>
</div>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
