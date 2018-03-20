<?php
$namesExisting = array("Abel","Agnes","Dickens","Danny","Dennis","Alphonce","Mary","Magdalene","Catherine","Cate","Linda",
"Linnet","Brian","Brandon","Brigit","Charles");
			if(isset($_POST['suggestions'])){
				$name = $_POST['suggestion'];
				if(!empty($name)){
					foreach ($namesExisting as $key) {
						if(stripos($key, $name) !== false){
							echo $key;
							echo "<br>";
						}
					}
				}
			}


 ?>