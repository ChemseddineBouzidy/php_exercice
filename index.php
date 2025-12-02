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
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
require_once 'src/DateTimeImmutable/DateTimeImmutable.php';
$birthDate = new DateTimeImmutable('2015-01-24 22:00:00');
$gsDate = from($birthDate);
echo $gsDate->format('Y-m-d H:i:s');
// Affiche : 2046-10-02 23:46:40
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
require_once 'src/Tournament/Tournament.php';
$tournament = new Tournament();

$results = [
    'Allegoric Alaskans;Blithering Badgers;win',
    'Devastating Donkeys;Courageous Californians;draw'
];

$teams = $tournament->tally(implode("\n", $results));
echo $teams; // Affiche un tableau avec les noms d'équipes uniques
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
require_once 'src/SimpleCipher/SimpleCipher.php';
$simpleCipher = new SimpleCipher();
echo $simpleCipher->encode('aaaaa'); // Expected output: "abcdefghij"
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
require_once 'src/HighScores/HighScores.php';
$highScores = new HighScores([30, 50, 20, 70]);
print_r($highScores);
echo "<br>";
echo "Latest Score: " . $highScores->latest; // Expected output:
echo "<br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
require_once 'src/Robot/Robot.php';
$robot = new Robot();
echo "Robot Name: " . $robot->getName(); // Expected output: e.g., "AB123"
echo "<br>";
$robot->reset();
echo "Robot Name after reset: " . $robot->getName(); // Expected output: e.g., "CD456"
echo "<br>";
echo "----------------------------------------------------------------------------------------";



// Book Store


/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */

// declare(strict_types=1);

/**
 * Note: we expect the total in cents (1$ = 100 cents).
 */
function total(array $items): int
{
    if (empty($items)) {
        return 0;
    }

    $bookprice = 800; // Prix d'un livre en cents
    
    // Compter les occurrences de chaque livre
    $bookCounts = array_count_values($items);
    
    // Créer un tableau avec le nombre de chaque livre
    $counts = array_values($bookCounts);
    rsort($counts); // Trier par ordre décroissant
    
    // Compter combien de sets de chaque taille on peut faire
    $groups = [0, 0, 0, 0, 0, 0]; // Index 0 non utilisé, 1-5 pour les groupes
    
    while (array_sum($counts) > 0) {
        // Compter combien de livres différents on peut mettre dans ce set
        $distinctBooks = 0;
        foreach ($counts as $count) {
            if ($count > 0) {
                $distinctBooks++;
            }
        }
        
        // Ajouter un groupe de cette taille
        $groups[$distinctBooks]++;
        
        // Réduire les compteurs
        for ($i = 0; $i < $distinctBooks; $i++) {
            $counts[$i]--;
        }
    }
    
    // Optimisation: convertir les groupes de 5 et 3 en groupes de 4 et 4
    // Car 2*4 livres avec 20% de réduction = 2 * 800 * 4 * 0.8 = 5120
    // Alors que 5 livres (25%) + 3 livres (10%) = 800*5*0.75 + 800*3*0.9 = 3000 + 2160 = 5160
    while ($groups[5] > 0 && $groups[3] > 0) {
        $groups[5]--;
        $groups[3]--;
        $groups[4] += 2;
    }
    
    // Calculer le prix total
    $total = 0;
    $discounts = [0 => 0, 1 => 0, 2 => 0.05, 3 => 0.10, 4 => 0.20, 5 => 0.25];
    
    for ($size = 1; $size <= 5; $size++) {
        if ($groups[$size] > 0) {
            $setPrice = $size * $bookprice * (1 - $discounts[$size]);
            $total += $groups[$size] * (int)round($setPrice);
        }
    }
    
    return $total;
}

$result = total([1, 2, 3, 4, 5, 1, 2, 3, 4, 5]);
echo "Total Price: " . $result . " cents"; // Expected output: Total Price