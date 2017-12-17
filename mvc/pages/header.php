<!DOCTYPE html>
<html>
<head>
<style>

div {
    background-color: lightblue;
    width:1350px;
    height:70px;

   
}

p {
  
  text-color:red;
}


</style>
</head>
<body>

<div>
  
  
  <?php
               if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        
        echo "Hello ";
                 print_r($_SESSION["name"]);
  ?>
  
      <form action="index.php?page=accounts&action=logout" id="logout">
      
          <button type="submit" form="logout" value="logout" >Logout</button>
  
      </form>
</div>

</body>
</html>