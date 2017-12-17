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
</head>

<body>

<?php
//this is how you print something
session_start();
print_r($_SESSION);
print utility\htmlTable::genarateTableFromMultiArray($data);


?>

	<br>
	<form action="index.php?page=tasks&action=insertTasks" method="post" id="insertForm">
	    <button type="submit" form="insertForm" value="Insert a Task">Insert a Task</button>
	</form>

<script src="js/scripts.js"></script>
</body>
</html>