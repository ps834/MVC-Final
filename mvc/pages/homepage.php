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
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      font-size: 30px;
      width:40%;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  
body {
    font-family: 'Open Sans', sans-serif;
  }
  
  
button {

      width:85px; 
      height:50px;
      padding-top:8px;
      padding-left:12px;

}

.div-within {
      
      background-color:red;
      width:40%;
      height:400px;
}
  </style>
</head>

<body>


<h3><a href="index.php?page=accounts&action=register" style="text-decoration:none;">Sign up</a></h3>


<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container" align="center">
    <div class="modal-header"> <h4><?php echo $data['site_name'];?></h4></div> 
    <div class="div-within">
        <br><br>
        <label style="padding-right:126px;"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required class="form-control" style="width:200px; height:40px;">
        <br><br>
        <label style="padding-right:126px;"><b>Password</b></label>&nbsp;
        <input type="password" placeholder="Enter Password" name="password" required class="form-control" style="width:200px; height:40px;">
        <br><br>
        <button type="submit" class="btn btn-info active" >Login</button>
    <div>
    </div>


</form>



 

 




<script src="js/scripts.js"></script>
</body>
</html>