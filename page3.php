<?php
$name = "Bruno";

$hour = 14;
$greeting = '';

if ($hour < 12) {
    $greeting = 'Good morning';
}
elseif ($hour < 18) {
    $greeting = 'Good afternoon';
}
else {
    $greeting = 'Good evening';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<h1> THE NAME </h1>

<p> <?php echo $greeting, " ", $name ?> ! </p>


</body>
</html>