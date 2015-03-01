<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>QES</title>
</head>

<body>
<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$discriminant = (($b * $b) - (4 * $a * $c));

if ($discriminant < 0)
	{
	echo "Imaginary solutions are not possible yet...";
	echo "<html><br><br></html>";
	}	

else if ($discriminant > 0)
{
$x1 = ((-$b + (sqrt(($b * $b) - (4 * $a * $c))))/(2*$a));
$x2 = ((-$b - (sqrt(($b * $b) - (4 * $a * $c))))/(2*$a));

echo "Here are the solutions to the equation:";
echo "<html><br><br></html>";
echo "x1 = ", $x1;
echo "<html><br></html>";
echo "x2 = ", $x2;
}

else {
	echo "Something went wrong... Make sure you enter numbers...";
	echo "<html><br><br></html>";
	}
?> 
</body>
</html>