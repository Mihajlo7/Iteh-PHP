<?php
class Specimen
{
    public $id;
    public $year;

    public function __construct($id = null, $year = null)
    {
        $this->year = $year;
    }

    public static function getAllSpecimen($isbn, mysqli $conn)
    {
        $query = "select * from `specimen` where isbn='$isbn'";
        $result = $conn->query($query);
        return $result;
    }
}
?>