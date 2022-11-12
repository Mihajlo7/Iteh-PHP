<?php
require 'connect.php';
require 'model/Renting.php';

if (isset($_POST['bool'])) {
    $table = '<table class="table table-striped table-primary">
    <thead>
      <tr>
        <th scope="col">Id Rezervacije</th>
        <th scope="col">ISBN</th>
        <th scope="col">Id Knjige</th>
        <th scope="col">Id Clana</th>
        <th scope="col">Datum vracanja</th>
        <th scope="col">Status</th>
      </tr>
    </thead>';
    $result = Renting::getRenting($conn);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $status = $row['status'];
        $date = $row['date'];
        $isbn = $row['isbnBook'];
        $idBook = $row['idBook'];
        $idMember = $row['idMember'];

        $table .= ' <tr>
            <td scope="row">' . $id . '</td>
            <td>' . $isbn . '</td>
            <td>' . $idBook . '</td>
            <td>' . $idMember . '</td>
            <td>' . $date . '</td>
            <td>' . $status . '</td>
          </tr>';

    }

    $table .= '</table>';
    echo $table;
} else {

}
?>