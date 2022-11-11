<?php
require 'connect.php';
require 'model/Member.php';

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {
    //$query = "insert into `member`(name,email,mobile,place) values('$nameSend','$emailSend','$mobileSend','$placeSend')";
    //$result = mysqli_query($conn, $query);
    $name = $_POST['nameSend'];
    $email = $_POST['emailSend'];
    $mobile = $_POST['mobileSend'];
    $place = $_POST['placeSend'];
    $member = new Member(null, $name, $email, $mobile, $place);
    Member::addMember($member, $conn);
}
?>