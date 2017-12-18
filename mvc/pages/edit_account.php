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
  
    table, th, td {
    border: 1px solid #F1ECEA;
    text-align:center;
    font-size:11pt;
}
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


<center><h3>Edit Profile</h3></center>
<br>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

   <div class="row">
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">First name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="fname" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->fname; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Last name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="lname" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->lname; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Email: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="email" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->email; ?>"></div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Phone: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="phone" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->phone; ?>"></div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Birthday: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="birthday" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->birthday; ?>"></div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Gender: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="gender" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->gender; ?>"></div>
      </div><br>    
      
      <center><input type="submit"  class="btn btn-info active"  value="Save"></center>
</form>




<script src="js/scripts.js"></script>
</body>
</html>