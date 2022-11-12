<?php
class Renting
{
    public $idRenting;
    public $status;
    public $date;
    public $isbnBook;
    public $idBook;
    public $idMember;

    public function __construct($idRenting = null, $status = null, $date = null, $isbnBook = null, $idBook = null, $idMember = null)
    {
        $this->idRenting = $idRenting;
        $this->status = $status;
        $this->date = $date;
        $this->isbnBook = $isbnBook;
        $this->idBook = $idBook;
        $this->idMember = $idMember;
    }

    public static function addRenting($renting, mysqli $conn)
    {
        $query = "INSERT INTO `renting`(id,status,date,isbnBook,idBook,idMember) VALUES(null,'$renting->status','$renting->date',
        '$renting->isbnBook',
        '$renting->idBook',
        '$renting->idMember')";
        $result = $conn->query($query);
        return $result;
    }

}
?>