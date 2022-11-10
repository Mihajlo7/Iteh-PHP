<?php
require 'connect.php';

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {
    $query = "insert into `member`(name,email,mobile,place) values('$nameSend','$emailSend','$mobileSend','$placeSend')";
    $result = mysqli_query($conn, $query);
}
?>