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
.errorStyle {

     width:50%;
     margin-left:24%;
     height:6%;
     padding-top:2px;

}

.hrefStyle{

    font-size:10pt;
    font-weight:bold;
    text-color:black;

}
</style>


</head>

<body>


<?php

include "header.php";

?>
<br>
      
<?php 


$message = $_SESSION['message']; 
if(strpos($message, 'deleted')){ ?>


<div class="alert alert-warning alert-dismissable errorStyle">
    <center><label id="error" name="error"><?php echo $_SESSION['message']; ?>
            <a href="index.php?page=accounts&action=delete" style="font-size:9pt;">Yes</a></label></center>
            <a href="index.php?page=accounts&action=getMyProfile" class="close" data-dismiss="alert" aria-label="close" style="font-size:9pt;" >No</a></label></center>
</div>

<?php } else if($message!= " "){  ?>

<div class="alert alert-success alert-dismissable errorStyle">
      <center><label id="error" name="error"><?php echo $_SESSION['message']; ?>
            <a href="index.php?page=accounts&action=getMyProfile" class="close" data-dismiss="alert" aria-label="close">x</a></label></center>
</div>  

<?php } 

$_SESSION['message'] = " " ;
?>


<br>
<?php
print utility\htmlTable::generateTableFromOneRecord($data);
?>

    <div style="margin-left:40%;">     
      <a href="index.php?page=accounts&action=callEditProfile" class="btn btn-info active" style="width:12%;">Edit Profile</a>
    </div>
    <div style="margin-left:50%;margin-top:-34px;">
 <!--    <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
          <button type="submit" form="form1" value="delete" class="btn btn-info active" style="height:35px;width:94px;">Delete</button>
      </form>-->
      
      <a href="index.php?page=accounts&action=confirmDelete" class="btn btn-info active" style="width:16%;">Delete Profile</a>
    </div>

<script src="js/scripts.js"></script>
</body>
</html>