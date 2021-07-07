<?php
session_start();
setcookie("chat_room","Messages",time() +3600 * 10,"/",TRUE,TRUE);
include 'connection.php';
include 'inc/fun.php';

if (!isset($_SESSION['user_name'])) {
  header("location:index.php");
}else{
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome !</title>
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
  <?php
  $user = $_SESSION['user_name'];
       $get_user = "SELECT * FROM users WHERE user_name='$user'";
       $run_user = mysqli_query($con,$get_user);
       $row = mysqli_fetch_array($run_user);

       $user_id = $row['user_id'];
       $user_name = $row['user_name'];
       echo "
       <h3 align='center'><b>- Hello! $user_name -</b></h3>";
   ?>
   
   <h3 align='center'>Question : 
   <?php
	
	echo $_SESSION['que'] = filter_input(INPUT_POST, "que");
	
   ?>
   </h3>
   
  <div>
    <div id="msg">

<form action="" method="post" id="form">
  <div id="txt">
<?php get_post(); ?>
  </div>
<input type="text" name="msg" class="form-control" placeholder="Write Your Message Here!" required="required">
<center>
<button type="submit" name="send" class="btn btn-info">Send</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <button class="btn btn-warning"><a href="logout.php">Logout</a></button>
<?php insert_msg(); ?>
</center>
</form>
<div id="user">
  <h4 align="center">All Members :</h4>
  <hr>
<?php get_user(); ?>

    </div>



    </div>
</div>

<div id="footer">
<footer> By Park Byoung Jun - <?php echo date("Y"); ?></footer>
</div>
</body>
</html>
<?php  }
?>
