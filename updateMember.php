<?php
require 'connect.php';

if (isset($_POST['updateId'])) {
    $user_id = $_POST['updateId'];
    $query = "select * from `member` where id=$user_id";
    $result = mysqli_query($conn, $query);
    $rensponse = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rensponse = $row;
    }
    echo json_encode($rensponse);
} else {
    $rensponse['status'] = 200;
    $rensponse['message'] = "Invalid or data not found";
}

?>