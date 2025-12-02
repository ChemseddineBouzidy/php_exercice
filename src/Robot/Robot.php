<?php

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

declare(strict_types=1);

class Robot
{
    private ?string $name = null;             // Nom du robot (null si non défini)
    private static array $usedNames = [];     // Tous les noms déjà utilisés

    // Retourne le nom du robot
    public function getName(): string
    {
        if ($this->name === null) {
            $this->name = $this->generateUniqueName();
        }
        return $this->name;
    }

    // Réinitialise le robot à l'état usine
    public function reset(): void
    {
      if ($this->name !== null) {
        // Retirer le nom actuel de la liste des noms utilisés
        $index = array_search($this->name, self::$usedNames);
        echo "Index to remove: " . $index . "<br>";
        if ($index !== false) {
            unset(self::$usedNames[$index]);
            // Réindexer le tableau pour éviter les trous
            // self::$usedNames = array_values(self::$usedNames);
        }
        $this->name = null;
      }
    }

    // Génère un nom aléatoire unique
    private function generateUniqueName(): string
    {
        do {
            $name = strtoupper(
                chr(rand(65, 90)) . chr(rand(65, 90)) . // 2 lettres
                rand(0, 9) . rand(0, 9) . rand(0, 9)    // 3 chiffres
            );
        } while (in_array($name, self::$usedNames));

        self::$usedNames[] = $name;
        echo "Used Names: ";
        echo implode(", ", self::$usedNames);
        echo "<br>";
        return $name;
    }
}
