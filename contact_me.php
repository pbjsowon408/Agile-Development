<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
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
  <h1>Contact Me</h1>
  <hr>
  <br/>
  <form action="" method="post" id="contact">

  <input class="form-control" type="text" name="sender" id="name" placeholder="Student Name" required="required"><br/>
  <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" required="required"><br/>
  <textarea rows="15" class="form-control" name="msg" id="message" placeholder="Write a message..." required="required"></textarea>
  </form>
<p>
<button type="submit" name="envoi" class="btn btn-default" onClick="sendMail();">Send <span class="glyphicon glyphicon-send"></span></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp
<button class="btn btn-default"><a href="index.php">Back</a></button>
</p>



<script>

function sendMail()
{
	var yourMessage = "Hello Lecturer, \n\n" + document.getElementById("message").value + "\n\nRegards,\n" + document.getElementById("name").value;
	var subject = document.getElementById("subject").value;
	document.location.href = "mailto:pbjsowon408@gmail.com?subject="
		+ encodeURIComponent(subject)
		+ "&body=" + encodeURIComponent(yourMessage);
}
</script>
	
	
	
</center>
</body>
</html>
