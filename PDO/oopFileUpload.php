<?php

class File{
	private $_fileformats = ['image/gif','image/jpeg','image/png','image/jpg','vedio','audio'];

	public function uploadFile($file){
		if(is_array($file)){
			if(in_array($file['type'], $this->_fileformats)){
				move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
				echo "file uploaded successfully";
			}else{
				die("file format not supported");
			}
		}else{
			die("file was not uploaded");
		}
	}
}
if($regisred(){
	header("Location:login.php");
})

 ?>