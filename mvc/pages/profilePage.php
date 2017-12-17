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
  label {    
    padding-top:1%;
    padding-left:26px;
    }
    </style>

</head>

<body>

<?php


  include "header.php";
// print("Hello $data->owneremail");

 ?>

<br> 
 	<form action="index.php?page=tasks&action=insertTasks" method="post" id="insertForm">
	    <button type="submit" form="insertForm" value="Insert a Task">Insert a Task</button>
	</form>
 
  <!--	<form action="index.php?page=tasks&action=insertTasks" method="post" id="myProfileForm">
	    <button type="submit" form="myProfileForm" value="myProfile">My Profile</button>
	</form>-->
 
 <!--<h3><a href="index.php?page=accounts&action=all">My Profile</a></h3>-->
 <br>



<!--<h5><a href="index.php?page=accounts&action=all">Show All Accounts</a></h5>
<h5><a href="index.php?page=tasks&action=all">Show All Tasks</a></h5>-->


<?php

print utility\htmlTable::genarateTableFromMultiArray($data);

 ?>

<br><br>


<script src="js/scripts.js"></script>
</body>
</html>