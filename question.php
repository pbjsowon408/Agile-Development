<?php

include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Question</title>
  <link rel="stylesheet" href="css/home_style.css" type="text/css">
  <link rel="stylesheet" href="css/button.css" type="text/css">
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


<form action="home.php" method="post" id="form">
</br></br></br></br></br>
<center>
Type: <input type="text" name="que" class="form-control" placeholder="Write a question..." required="required">
</br>

<input type="submit" name="submit" value="Enter" />
</center>
</form>



</body>
</html>