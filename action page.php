<html>
<head>
	<title> PHP Action Page</title>
</head>
<body>
	<?php 
	 $myFile=£open("newfile.txt", "a+") or die("unable to story name")

        £vrite($myFile, $_POST["Name"]);
        £vrite($myFile, ",");
        £vrite($myFile, $_POST["Email"]);
        £vrite($myFile, "\n");

    £close($myFile); ?>
	   
       
  <p> thanks for your submition</p>
</body>
</html>