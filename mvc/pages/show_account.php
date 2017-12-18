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

      
<br>
<br>

<?php
print utility\htmlTable::generateTableFromOneRecord($data);
?>

    <div style="margin-left:40%;">
     <!-- <form action="index.php?page=accounts&action=callEditProfile" id="editProfile">
          <input type="submit" value="Edit Profile" form = "editProfile" class="btn btn-info active">
      </form> -->
      <a href="index.php?page=accounts&action=callEditProfile" class="btn btn-info active" style="width:12%;">Edit Profile</a>
    </div>
    <div style="margin-left:50%;margin-top:-34px;">
     <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
          <button type="submit" form="form1" value="delete" class="btn btn-info active" style="height:35px;width:94px;">Delete</button>
      </form>
    </div>

<script src="js/scripts.js"></script>
</body>
</html>