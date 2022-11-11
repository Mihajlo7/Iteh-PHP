<?php
class Specimen
{
    public $id;
    public $year;

    public function __construct($id = null, $year = null)
    {
        $this->year = $year;
    }
}
?>