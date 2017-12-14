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
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);
?>


<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

    Owner ID: <input type="text" name="ownerid" value="<?php echo $data->ownerid; ?>"><br>
    Owner Email: <input type="text" name="email" value="<?php echo $data->owneremail; ?>"><br>
    Create Date: <input type="text" name="createddate" value="<?php echo $data->createddate; ?>"><br>
    Due Date: <input type="text" name="duedate" value="<?php echo $data->duedate; ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message; ?>"><br>
    Status: <input type="text" name="isdone" value="<?php echo $data->isdone; ?>"><br>

    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="insertForm">
    <button type="submit" form="form1" value="delete">Insert Data</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>