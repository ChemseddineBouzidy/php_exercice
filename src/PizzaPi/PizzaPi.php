<?php

class PizzaPi
{
    static $PI = 3.14159;
    public function calculateDoughRequirement($pizzas,$persons)
    {
        $grams = $pizzas * (($persons * 20) + 200);
    return $grams;
    }

    public function calculateSauceRequirement( $pizzas, $sauceCanVolume)
    {
        $saucePerPizza = 125;
         $cans_of_sauce = $pizzas * $saucePerPizza / $sauceCanVolume;
                return $cans_of_sauce;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        $pizzas = (pow($cheese_dimension, 3)) / ($thickness * self::$PI * $diameter);
        return floor($pizzas);
    }

    public function calculateLeftOverSlices()
    {
        throw new \BadFunctionCallException("Implement the function");
    }
}
