<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title> <!-- here take a look at class error note!-->
<style type="text/css" media="all">
	.error{  
font-weight: bold;
color: #C00;
	}
</style>
</head>
<body>
<?php
if (!empty($_REQUEST['name'])){// Validating name
	$name=$_REQUEST['name'];
}
else{
	$name=Null;
	echo '<p class="error">You forgot to enter your name!</p>';
}

if(!empty($_REQUEST['email'])){//validating mail
	$email=$_REQUEST['email'];
}
else{
	$email=Null;
	echo '<p class="error">You forgot to enter Email!</p>';
}
if(!empty($_REQUEST['comments'])){ //validating comments 
	$comments=$_REQUEST['comments'];
}
else{
	$comments=Null;
	echo '<p class="error">You forgot to enter comments!</p>';
}

if(isset($_REQUEST['gender'])){
$gender=$_REQUEST['gender'];

if ($gender=='M'){
	$message='<p><strong>Good day Sir!</strong></p>';
}
elseif ($gender=='F'){
	$message='<p><stong>Good day Maddam!</strong></p>';
}
else {
	$gender=Null;
	echo '<p class="error">Gender should be ether "M" or "F"</p>';
}
}
else{
	$message=Null;
	echo '<p class="error">You forgot to enter gender!</p>';
}

if ($name && $email && $comments && $gender) {
	echo "<p>Thank you <strong>$name</strong> for your comment:</p> <pre>$comments</pre> 
	<p>we will reply to you at <em>$email</em></p>";
	echo "<p>$message</p>";
	# code...
}



?>
</body>
</html>