<!DOCTYPE html>
<html>
<head>
<style>

div {
    background-color: lightblue;
    width:1350px;
    height:100px;

   
}



</style>
</head>
<body>

<div>
  
  
  <?php
      
      
      if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
      echo "<b>Hello </b> ";
      $name = $_SESSION["name"];
      print("<b>$name</b>");
  ?>
  
      <form action="index.php?page=accounts&action=logout" id="logout">
      
          <button type="submit" form="logout" value="logout" >Logout</button>
  
      </form>
      <br><br>
      &nbsp;<a href="index.php?page=accounts&action=getMyProfile" style="text-decoration:none;">My Profile</a> &nbsp;
     <!-- <a href="index.php?page=accounts&action=callEditProfile" style="text-decoration:none;">Edit Profile</a>-->
</div>

</body>
</html>