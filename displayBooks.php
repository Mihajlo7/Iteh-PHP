<?php
require 'connect.php';
require 'model/Book.php';
require 'model/Specimen.php';

if (isset($_POST['title'])) {

    $title = $_POST['title'];
    $table = '<table class="table table-striped table-danger">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">ISBN</th>
        <th scope="col">Naslov</th>
        <th scope="col">Autor</th>
        <th scope="col">Godina izdavanja</th>
      </tr>
    </thead>';
    $query = "SELECT b.isbn,b.title,b.author,s.id,s.year FROM book b INNER JOIN specimen s ON(s.isbn=b.isbn) WHERE b.title='$title';";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $isbn = $row['isbn'];
        $title = $row['title'];
        $author = $row['author'];
        $id = $row['id'];
        $year = $row['year'];

        $table .= ' <tr>
            <td scope="row">' . $id . '</td>
            <td>' . $isbn . '</td>
            <td>' . $title . '</td>
            <td>' . $author . '</td>
            <td>' . $year . '</td>
          </tr>';
    }
    $table .= '</table>';
    echo $table;

} else {
    echo "<h1>Nema knjige</h1>";
}
?>