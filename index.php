<?php
session_start();
include 'connection.php';

 ?>
<html>
<head>
  <title><?php echo "Chat Room - ".date("Y")  ; ?></title>
       <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
  <center>
<form action="" method="post" id="form">
<img src="logo.png" title="Chat Room">
<input class="form-control" type="text" name="name" placeholder="User Name" required="required">
<input class="form-control" type="password" name="pwd" placeholder="Password" required="required">
<br/>
<button type="submit" name="login" class="btn btn-info">Login</button>
Or
<button type="submit" name="reg" class="btn btn-success">Sign Up</button>
<br/><br/>
  <button class="btn btn-info"><a href="contact_me.php">Contact Me</a></button>
<br/><br/>
<?php include 'login.php'; ?>
</form>
</center>
</body>
</html>
