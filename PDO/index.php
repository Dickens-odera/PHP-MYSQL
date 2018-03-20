<?php 




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>oop file uploads</title>
 </head>
 <body>
 	<form method="post" action="file_process.php" enctype="multipart/form-data">
 		<label for="file">Choose Image</label>
<input type="file" name="file" id="file"/>
<input type="submit" value="Upload"/>
 	</form>
 </body>
 </html>