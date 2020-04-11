<?php
require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$talk = new Hello();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="">
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
<div>
	<h1>
		<?php echo $talk->talk();?>
		<?php echo SayHello::world()?>
	</h1>
</div>
</body>
</html>
