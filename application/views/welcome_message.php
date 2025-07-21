<div class=""></div><?php
					defined('BASEPATH') or exit('No direct script access allowed');
					?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		body {
			display: flex;
			align-content: center;
			justify-content: center;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>software engineering!</h1>
		<?php
		echo "You name : " . $name . " Email : " . $email;
		// foreach ($books as $book)
		// 		echo "Book : " . $book . "<br/>";
		
		?>
</body>

</html>