<?php
require 'connect.php';

if (isset($_POST['displaySend'])) {
  $table = '<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Ime Prezime</th>
        <th scope="col">Email</th>
        <th scope="col">Telefon</th>
        <th scope="col">Grad</th>
        <th scope="col">Operacije</th>
      </tr>
    </thead>';

  $query = "select * from `member`";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $place = $row['place'];

    $table .= ' <tr>
        <td scope="row">' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $mobile . '</td>
        <td>' . $place . '</td>
        <td>
            <button class="btn btn-dark" onclick="getMember(' . $id . ')">Izmeni</button>
            <button class="btn btn-danger" onclick="deleteMember(' . $id . ')">Obrisi</button>
        </td>
      </tr>';
  }
  $table .= '</table>';
  echo $table;

}

?>