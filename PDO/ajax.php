<?php 



?>
<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
				$('input').keyup(function(){
					var name = $('input').val();
						$.post('suggestions.php',{
							suggestion: name
						}, function(data, status){
							$('#test').html(data);
						})
				});
		});
	</script>
</head>
<body>
		<input type="text" name="name"/>
		<p id="test"> </p>
</body>
</html>