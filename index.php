<?php
require_once 'src/sweethearts/HighSchoolSweetheart.php';
require_once 'src/PizzaPi/PizzaPi.php';
require_once 'src/ProgramWindow/ProgramWindow.php';
require_once 'src/ProgramWindow/Size.php';
require_once 'src/ProgramWindow/Position.php';
require_once 'src/Proverb/Proverb.php';

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
echo $PizzaPi->calculateDoughRequirement(4, 8); // Expected output: "1000"
echo "<br>";
echo $PizzaPi->calculateSauceRequirement(8, 250); // Expected output: "4"
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
echo "----------------------------------------------------------------------------------------";
echo "<br>";
function language_list(...$items)
{
    // implement the language list function
    return $items;
}
function add_to_language_list($language_list, $new_language)
{
    $language_list[] = $new_language;
    return $language_list;
}
function prune_language_list($language_list)
{

    array_shift($language_list);
    return $language_list;
}
function current_language($language_list)
{
    // return $language_list[0];
    // return current($language_list);


    return reset($language_list);
}
function language_list_length($language_list)
{
    return count($language_list);

}
function isPalindrome(int $number): bool
{

    return $number == strrev($number);
}
$result = isPalindrome(1441);
echo "Is 1441 a palindrome? " . ($result ? "Yes" : "No");
echo "<br>";
//   function validate(string $input): string
//     {
//         if (gettype($input) == 'string' ) {
//             return 'Must be a whole number larger than 0 =>    '. gettype($input);
//         }elseif (empty($input)){
//             return 'Required field';

//         }
//         return ' '  . gettype($input);
//     }
//     $validationResult = validate('');
//     echo "Validation Result: " . $validationResult;
function validate(string $input): string
{
    // Check if empty or only whitespace
    if (trim($input) === '') {
        return 'Required field';
    }
    
    // Cast to integer according to PHP type casting rules
    $number = (int)$input;
    
    // Check if the result is a positive non-zero whole number
    if ($number <= 0) {
        return 'Must be a whole number larger than 0';
    }
    
    return '';
}

// Test cases
echo "<br>--- Validation Tests ---<br>";
echo "validate(''): '" . validate('') . "'<br>";
echo "validate('   '): '" . validate('   ') . "'<br>";
echo "validate('0'): '" . validate('0') . "'<br>";
echo "validate('-5'): '" . validate('-5') . "'<br>";
echo "validate('42'): '" . validate('42') . "'<br>";
echo "validate('123abc'): '" . validate('123abc') . "'<br>";
echo "validate('abc'): '" . validate('abc') . "'<br>";
echo "validate('12.5'): '" . validate('12.5') . "'<br>";
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
  function getColorsValue(array $colors): int
    {
        $colorslist= [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white'
    ];
        // $nameParts = explode('-', $colors);
        
        return array_search($colors[0], $colorslist) * 10 + array_search($colors[1], $colorslist);
    }
    $result = getColorsValue(['white',  'red']);
    echo "Color Value: " . $result;
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
$proverb = new Proverb();
$lines = $proverb->recite(['nail', 'shoe', 'horse', 'rider', 'message', 'battle', 'kingdom']);
foreach ($lines as $line) {
    echo $line . "\n";
    echo "<br>";
}