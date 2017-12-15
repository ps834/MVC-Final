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

 print("Hello $data->fname");


 ?>

<h5><a href="index.php?page=accounts&action=all">Show All Accounts</a></h5>
<h5><a href="index.php?page=tasks&action=all">Show All Tasks</a></h5>


    <script src="js/scripts.js"></script>
</body>
</html>