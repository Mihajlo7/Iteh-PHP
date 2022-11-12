<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Izdavanja</title>
</head>

<body>
    <!-- MENI-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/img_avatar2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Admin
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#">Rezervacije</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="member.php">Clanovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="book.php">Knjige</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kreiranje rezervacije</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="completedate">Datum rezervacije</label>
                            <input type="text" class="form-control" id="completedate"
                                placeholder="Unesite ime i prezime">
                        </div>
                        <div class="form-group">
                            <label for="completeisbn">ISBN Knjige </label>
                            <input type="text" class="form-control" id="completeisbn" placeholder="Unesite isbn knjige">
                        </div>
                        <div class="form-group">
                            <label for="completeidbook">Id Knjige </label>
                            <input type="text" class="form-control" id="completeidbook" placeholder="Unesite id knjige">
                        </div>
                        <div class="form-group">
                            <label for="completeidmember">Id clana </label>
                            <input type="text" class="form-control" id="completeidmember"
                                placeholder="Unesite id clana">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="addRenting()">Sacuvaj</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Zatvori</button>

                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Rezervacije</h1>
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#completeModal">
            Dodaj novu rezervaciju
        </button>
        <div id="displayDataTable">

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            displayData();
        });

        //dodavanje nove rezervacije
        function addRenting() {
            var date = $('#completedate').val();
            var isbn = $('#completeisbn').val();
            var idBook = $('#completeidbook').val();
            var idMember = $('#completeidmember').val();

            $.ajax({
                url: "insertRenting.php",
                type: 'post',
                data: {
                    date: date,
                    isbn: isbn,
                    idBook: idBook,
                    idMember: idMember
                },
                success: function (data, status) {
                    console.log(status);
                    $('#completeModal').modal("hide");
                    displayData();
                }
            });
        }
        function displayData() {
            var bool = true;
            $.ajax({
                url: "displayRenting.php",
                type: 'post',
                data: {
                    bool: bool
                },
                success: function (data, status) {
                    console.log(status);
                    $('#displayDataTable').html(data);
                }
            });
        }
    </script>
</body>

</html>