<?php 

require('oopFileUpload.php');

$file = new File();		
		
		if(isset($_FILES['file'])){
			//submit the file using the uplad function
				$file->uploadFile($_FILES['file']);
		}else{
			echo "File not submitted";
		}
 ?>