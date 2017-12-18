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

    font-size:9pt;
    margin-top:2%;
    margin-left:-3%;
}
  
</style>

</head>

<body>

<?php


  include "header.php";
 ?>

<center><h3>Your Tasks</h3></center>
<br>



<?php
if (!empty($data)) {
         $error = " " ;
         print utility\htmlTable::genarateTableFromMultiArray($data);
        }else{
        
            $error = "No Tasks to display";
        }


 ?>

<div>
    <center><label id="error" name="error" class="errorStyle" ><?php echo $error; ?></label></center>
</div>
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