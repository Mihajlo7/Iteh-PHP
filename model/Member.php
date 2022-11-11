<?php
class Member
{
    public $id;
    public $name;
    public $email;
    public $mobile;
    public $place;

    public function __construct($id = null, $name = null, $email = null, $mobile = null, $place = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->place = $place;

    }

    public static function addMember($member, mysqli $conn)
    {
        $query = "insert into `member`(name,email,mobile,place) values('$member->name','$member->email','$member->mobile','$member->place')";
        $result = mysqli_query($conn, $query);
        return $result;
    }

}
?>