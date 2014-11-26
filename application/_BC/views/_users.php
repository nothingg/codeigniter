<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</html>
<body>
	<div> Users Test </div>

	<?php 
		foreach($result as $row){
			echo $row->username;
		}
	?>
</body>
</html>