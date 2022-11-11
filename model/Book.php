<?php
class Book
{
    public $isbn;
    public $title;
    public $author;

    public $specimen;

    public function __construct($isbn = null, $title = null, $author = null, $specimen = null)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->specimen = $specimen;
    }
}
?>