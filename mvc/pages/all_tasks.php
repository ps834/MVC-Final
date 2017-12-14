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

print utility\htmlTable::genarateTableFromMultiArray($data);


?>

<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

	 ID: <input type="text" name="id" value="<?php echo $data->id; ?>"><br>
    Owner ID: <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>"><br>
    Owner Email: <input type="text" name="email" value="<?php echo $data->owneremail; ?>"><br>
    Create Date: <input type="text" name="createddate" value="<?php echo $data->createddate; ?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
    Status: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br>

    <input type="submit" value="Insert">

</form>


<script src="js/scripts.js"></script>
</body>
</html>