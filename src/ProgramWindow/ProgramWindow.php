<?php

class ProgramWindow
{
    public $x = null;
    public $y = null;
    public $height = null;
    public $width = null;
     function __construct()
    {
        $this->height = 600;
        $this->width = 800;
        $this->x = 0;
        $this->y = 0;
    }
     public function resize(Size $size) //Composition
    {
       $this->height = $size->height;
       $this->width = $size->width;

    }
    public function move(Position $position) //Composition
    {
       $this->x = $position->x;
       $this->y = $position->y;

    }
    

    
}
