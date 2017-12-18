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
    .divLbl{
    
      float:right;
      padding-right:25px;
      margin-top:2%;
    }
</style>
</head>

<body>




<?php 

include "header.php";

?>

    <form action="index.php?page=tasks&action=save" method="post">
        
        
      <center><h3>Enter Task details</h3></center>
        
      <div class="row">
      </div>
      <br>
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner ID: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="number" name="ownerid" required class="form-control" style="width:50%;float:left;" placeholder="Enter Owner ID"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner Email:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="email" name="email" required class="form-control" style="width:50%;float:left;" placeholder="Enter Email ID"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Create Date:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="createddate" required class="form-control" style="width:50%;float:left;" placeholder="Enter Date in (yyyy-mm-dd)"></div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Due Date: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="duedate" required class="form-control" style="width:50%;float:left;" placeholder="Enter Date in (yyyy-mm-dd)"></div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Message:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="message" required class="form-control" style="width:50%;float:left;" placeholder="Add Message"></div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Status: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="number" name="isdone" required class="form-control" style="width:50%;float:left;"  placeholder="0:Incomplete, 1:Complete"></div>
      </div><br>   
  </div><br> 
  


        <center><input type="submit" value="Insert" class="btn btn-info active" style="width:10%;"></center>
</form>



<script src="js/scripts.js"></script>
</body>
</html>