<!DOCTYPE html>
<html>
<head>
	<
	<title></title>
</head>
<body>

	<?php
	   $myEmailAddress = "handdavidrichardson@gmail.com";
       $subject = "Question from FROSTY'S BLOG";

       $name = $_POST['Name'];
       $email = $_POST['Email'];
       $message = $_POST['Message'];
       $header = "from: $name <$email>";

       mail ($myEmailAddress,$subject, $message, $header);
       
  ?>

      <p>Thanks for Sending.</p>
</body>
</html>