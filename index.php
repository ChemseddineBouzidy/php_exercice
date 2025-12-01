<?php
require_once 'src/sweethearts/HighSchoolSweetheart.php';
require_once 'src/PizzaPi/PizzaPi.php';
require_once 'src/ProgramWindow/ProgramWindow.php';
require_once 'src/ProgramWindow/Size.php';
require_once 'src/ProgramWindow/Position.php';

$HighSchoolSweetheart = new HighSchoolSweetheart();
echo "<br>";
echo $HighSchoolSweetheart->firstLetter("John Doe"); // Expected output: "John Doe"
echo "<br>";
echo $HighSchoolSweetheart->initial("John"); // Expected output: "John Doe"
echo "<br>";
echo $HighSchoolSweetheart->initials("Linda Miller"); // Expected output: "John Doe"
echo "<br>";
echo $HighSchoolSweetheart->pair("Blake Miller", "Riley Lewis"); // Expected output: "John Doe + Jane Smith"
echo "----------------------------------------------------------------------------------------";
echo "<br>";
$PizzaPi = new PizzaPi();
echo $PizzaPi->calculateDoughRequirement(4,8); // Expected output: "1000"
echo "<br>";
echo $PizzaPi->calculateSauceRequirement(8,250); // Expected output: "4"
echo "<br>";
echo $PizzaPi->calculateCheeseCubeCoverage(25, 0.5, 30);
echo "<br>";

echo "----------------------------------------------------------------------------------------";
echo "<br>";
$window = new ProgramWindow();
$window->y; // => null
$window->x; // => null
$window->height; // => 600
$window->width; // => 800
echo "Initial Position: (" . $window->x . ", " . $window->y . ")\n";
echo "Initial Size: " . $window->width . "x" . $window->height . "\n";
echo "<br>";
$size = new Size(1024, 768);
$window->resize($size);
echo "Resized Size: " . $window->width . "x" . $window->height . "\n";
echo "<br>";
$position = new Position(100, 150);
$position->x; // => 100
$position->y; // => 150
echo "Position to Move: (" . $position->x . ", " . $position->y . ")\n";
$window->move($position);
echo "<br>";
echo "Moved Position: (" . $window->x . ", " . $window->y . ")\n";
echo "<br>";