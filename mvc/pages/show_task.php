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
      margin-top:5%;
  }

  
  label {
    font-size: 11pt;
    padding-top:4%;
    padding-left:85px;
  }

.divLbl{

  float:right;
  padding-right:25px;
  margin-top:2%;
}

</style>
</head>

<body>



<?php
//this is how you print something  $data contains the record that was selected on the table.
include "header.php";

?>

<div style="margin-left:90%;margin-top:2%;">

</div>
<?php
print utility\htmlTable::generateTableFromOneRecord($data);
?>


<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">


    <div class="row">
      </div>
      <br>
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner ID: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="ownerid" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->ownerid; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Owner Email:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="email" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->owneremail; ?>"></div>
      </div><br>
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Create Date:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="createddate" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->createddate; ?>"></div>
      </div><br>    
       <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Due Date: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="duedate" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->duedate; ?>"></div>
      </div><br>      
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Message:</label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="message" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->message; ?>"></div>
      </div><br>   
      <div class="row"><div class="col-sm-3"></div>
          <div class="col-sm-2" style="padding-right:0px;"><label class="divLbl">Status: </label></div>
          <div class="col-sm-5" style="padding-left:0px;">
              <input type="text" name="isdone" required class="form-control" style="width:50%;float:left;" value="<?php echo $data->isdone; ?>"></div>
      </div><br>   
  </div><br>    


    <div style="margin-left:40%;"><input type="submit" value="Update Task" class="btn btn-info active" style="width:15%;"></div>
</form>

<div style="margin-left:50%;margin-top:-48px;">
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?>" method="post" id="form1">
    <button type="submit" form="form1" value="delete" class="btn btn-info active" style="width:20%;height:33px;">Delete Task</button>
    <!--<img src="images/Delete_Icon.png" alt="Delete" height="25" width="25">-->
</form>
</div>
<br>






<script src="js/scripts.js"></script>
</body>
</html>