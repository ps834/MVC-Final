<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
    
<style>

  body {
    font-family: 'Open Sans', sans-serif;
  }
table, th, td {
    border: 1px solid #F1ECEA;
    text-align:center;
    font-size:11pt;
}

.errorStyle {

      width:400px;
      margin-left:34%;
      height:6%;
     padding-top:2px;

}

  
</style>

</head>

<body>

<?php

  include "header.php";
 ?>

<center><h3>Your Tasks</h3></center>

<?php if($_SESSION['message']!= " "){  ?>
<div class="alert alert-success alert-dismissable errorStyle">
    
    <center><label id="error" name="error"><?php echo $_SESSION['message']; ?>
            <a href="index.php?page=tasks&action=goToProfile" class="close" data-dismiss="alert" aria-label="close">x</a></label></center>
</div>
<?php } 

$_SESSION['message'] = " " ;
?>

<?php 

if(strpos($_SESSION['message'],'No Tasks')){  ?>

    <center><label id="error" name="error"><?php echo $_SESSION['message']; ?></label></center>
    
<?php 

}
$_SESSION['message'] = " " ;
 ?>






<?php
if (!empty($data)) {
         print utility\htmlTable::genarateTableFromMultiArray($data);
      }
?>




<br>
<div>
   <center>
       	<form action="index.php?page=tasks&action=insertTasks" method="post" id="insertForm">
      	    <button type="submit" form="insertForm" value="Insert a Task" class="btn btn-info active" style="width:10%;">Insert a Task</button>
      	</form>
   <center>
    </div>
<br><br>


<script src="js/scripts.js"></script>
</body>
</html>