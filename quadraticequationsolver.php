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

if ($a == null || $b == null || $c == null)
{
  echo "<h2>Code/QuadraticEquationSolver:</h2>";
	echo "Something went wrong... Make sure you enter numbers...";
	echo "<html><br><br></html>";

}

else

{

if ($discriminant < 0)
	{
	$b = -$b;
	$a = 2 * $a;
	$imaginarycomponent = sqrt(-$discriminant);
	echo "<h2>Code/QuadraticEquationSolver: Here are the imaginary solutions to the equation</h2>";
	echo "x1 = [($b + (($imaginarycomponent)i)/$a]";
	echo "<html><br><br></html>";
	echo "x2 = [($b - (($imaginarycomponent)i)/$a]";
	
	}
	

else if ($discriminant > 0)
{
$x1 = ((-$b + (sqrt(($b * $b) - (4 * $a * $c))))/(2*$a));
$x2 = ((-$b - (sqrt(($b * $b) - (4 * $a * $c))))/(2*$a));

echo "<h2>Code/QuadraticEquationSolver: Here are the solutions to the equation</h2>";
echo "x1 = ", $x1;
echo "<html><br><br></html>";
echo "x2 = ", $x2;
}

else if ($discriminant == 0)
{
$x = ((-$b + (sqrt(($b * $b) - (4 * $a * $c))))/(2*$a));
echo "<h2>Code/QuadraticEquationSolver: The equation has one solution</h2>";
echo "x = ", $x;
echo "<html><br><br></html>";
}

else {
	echo "<h2>Code/QuadraticEquationSolver:</h2>";
	echo "Something went wrong... Make sure you enter numbers...";
	echo "<html><br><br></html>";
	}
}

?> 

</body>
</html>
