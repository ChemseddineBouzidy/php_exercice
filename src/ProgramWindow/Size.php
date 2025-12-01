<?php
require_once("ProgramWindow.php");
Class Size extends ProgramWindow
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        parent::__construct();
        $this->height = $height;
        $this->width = $width;
    }
    
}