<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    
    
 <style>
 
  .modal-header {
      background-color: #59B3E1; 
      // #5cb85c;
      color:white !important;
      font-size: 30px;
      width:35%;
      height:60px;
      margin-top:60px;
  }
  .modal-footer {
      background-color: #59B3E1 ;
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

.div-within {
      
      background-color:#F8F5F5;
      width:35%;
      height:308px;
}

span {

    padding-left:20px;

}
  </style>
</head>

<body>





<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container" align="center">
    <div class="modal-header"> <h4><?php echo $data['site_name'];?></h4></div> 
    <div class="div-within">
        <br><br>
        <span class="glyphicon glyphicon-user"></span>
        <label style="padding-right:126px;"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required class="form-control" style="width:200px; height:40px;">
        <br>
        <span class="glyphicon glyphicon-lock"></span>
        <label style="padding-right:126px;"><b>Password</b></label>&nbsp;
        <input type="password" placeholder="Enter Password" name="password" required class="form-control" style="width:200px; height:40px;">
        <br>
        <button type="submit" class="btn btn-info active" >Login</button>
        <br><br>
        <h6><a href="index.php?page=accounts&action=register" style="text-decoration:none;">Not a member yet? Create an account</a></h6>
    <div>
    <div class="modal-footer"></div>
    </div>


</form>



 


<script src="js/scripts.js"></script>
</body>
</html>