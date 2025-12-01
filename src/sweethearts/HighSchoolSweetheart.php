<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return $name[0];
        
    }

    public function initial(string $name): string
    {
        return $this->firstLetter(strtoupper($name)) . ".";
    }

    public function initials(string $name): string
    {
          $nameParts = explode(" ", $name);
    $firstInitial = $this->firstLetter($nameParts[0]) . ". ";
    $lastInitial = $this->firstLetter($nameParts[1]) . ". ";
        // echo $nameParts[0] . '<br>';
        // echo $nameParts[1] . '<br>';  
    return $firstInitial . $lastInitial;
 
        
    }

 public function pair(string $sweetheart_a, string $sweetheart_b): string
{
    $initials = $this->initials($sweetheart_a) . "  +  " . $this->initials($sweetheart_b);
    $heart = <<<HEART
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $initials     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
HEART;
    return $heart;
}

}
