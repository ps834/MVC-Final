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
       
</style>


</head>

<body>


<?php

include "header.php";

?>

      <form action="index.php?page=accounts&action=callEditProfile" id="editProfile">
      
          <button type="submit" value="editProfile" >Edit Profile</button>
   
      </form>
      <br><br>
     <!-- <a href="index.php?page=accounts&action=callEditProfile" style="text-decoration:none;margin-left:1150px;">Edit Profile</a>-->
      &nbsp;&nbsp;<img src="images/Delete_Icon.png" alt="Delete" height="25" width="25">
      
      
<br><br>
<?php
print utility\htmlTable::generateTableFromOneRecord($data);


?>




<!--
<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">



      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-3"><h3>Edit Label</h3></div>
          <div class="col-sm-3"></div>
      </div>
      <br><br>
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>First name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="fname" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->fname; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Last name: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="lname" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->lname; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Email: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="email" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->email; ?>"></div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Phone: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="phone" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->phone; ?>"></div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Birthday: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="birthday" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->birthday; ?>"></div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label>Gender: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
            <input type="text" name="gender" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->gender; ?>"></div>
      </div><br>    



   <!-- First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">-->
</form>

<!--
<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form> -->


<script src="js/scripts.js"></script>
</body>
</html>