<!DOCTYPE html>
<html>
<head>
<style>

.divStyle {
    background-color: lightblue;
    width:100%;
    height:21%;
    margin-top:-20px;

   
}

body {
    font-family: 'Open Sans', sans-serif;
  }
  
  
button {

      width:85px; 
      height:40px;
      padding-top:8px;
      padding-left:12px;

}

label {    
    padding-top:1%;
    padding-left:26px;
    }

h1 {
  padding-top:35px;
  padding-left:20px;
}

</style>
</head>
<body>

<div class="divStyle">
  
  
    
  <h1>MVC Home</h1>  
  
  <?php  if($_GET["action"] != "register"){ 
      
      
      if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $userName='';
        if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
            $userName="Hello ". $_SESSION['name'];
       

}?>

      <div class="row">
        <div class="col-sm-2"><label><?php print("<b>" . $userName . "</b>"); ?></label></div>
        <div class="col-sm-7"></div>
        <div class="col-sm-1"><a href="index.php?page=tasks&action=goToProfile" style="text-decoration:none;">My Tasks</a></div>
        <div class="col-sm-1"><a href="index.php?page=accounts&action=getMyProfile" style="text-decoration:none;">My Profile</a></div>
        <div class="col-sm-1"><a href="index.php?page=accounts&action=logout" style="text-decoration:none;">Logout</a> </div>
      </div>
     
      <?php } ?>
      
      
      
</div>

</body>
</html>