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
        
        
            <div class="row">
      </div>
      <br>
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner ID: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="ownerid" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner Email:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="email" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Create Date:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="createddate" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Due Date: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="duedate" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Message:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="message" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Status: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="isdone" required class="form-control" style="width:50%;float:left;"></div>
      </div><br>   
  </div><br> 
  
  
  
      <!--  Owner ID: <input type="text" name="ownerid" value=""><br>
        Owner Email: <input type="text" name="email" value=""><br>
        Create Date: <input type="text" name="createddate" value=""><br>
        Due Date: <input type="text" name="duedate" value=""><br>
        Message: <input type="text" name="message" value=""><br>
        Status: <input type="text" name="isdone" value=""><br>-->

        <center><input type="submit" value="Insert"></center>
</form>



<script src="js/scripts.js"></script>
</body>
</html>