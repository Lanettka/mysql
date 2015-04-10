<html>
<head>
    <title>Webpage in PHP</title>
</head>
<body>
 <div style="line-height:40px;">
 <div>
  <form action="addbook.php" method="post">
	Author<br><input type="text" name="author" maxlength="20" size="25" padding: 5px;></form>
	Book<br><input type="text" name="book" maxlength="20" size="25"><br>
	Size of the file<br><input type="text" name="file_size" maxlength="20" size="25"></form><br>
	<input type="submit" value="Submit">
	</form><br>
	<form enctype="multipart/form-data" action="savefile.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000">Send this file: <input name="userfile" type="file">
	<input type="submit" value="Send File">
	</form>
</div>
</body>
<html>