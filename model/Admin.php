<?php
require 'connect.php';
class Admin
{
    public $id;
    public $username;
    public $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public static function loginAdmin($admin, mysqli $conn)
    {
        $query = "select * from `admin`where username='$admin->username' and email='$admin->email'";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}
?>