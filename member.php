<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clanovi biblioteke</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg bg-dark bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/img_avatar2.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Admin
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Rezervacije</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#">Clanovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Knjige</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Kreiranje novog clana biblioteke</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="completename">Ime i prezime</label>
                            <input type="text" class="form-control" id="completename"
                                placeholder="Unesite ime i prezime">
                        </div>
                        <div class="form-group">
                            <label for="completeemail">Email </label>
                            <input type="text" class="form-control" id="completeemail" placeholder="Unesite email">
                        </div>
                        <div class="form-group">
                            <label for="completemobile">Telefon </label>
                            <input type="text" class="form-control" id="completemobile" placeholder="Unesite telefon">
                        </div>
                        <div class="form-group">
                            <label for="completeplace">Prebivaliste </label>
                            <input type="text" class="form-control" id="completeplace"
                                placeholder="Unesite grad u kojem zivite">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Sacuvaj</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Zatvori</button>

                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center">Clanovi biblioteke</h1>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completeModal">
            Dodaj novog clana
        </button>
    </div>




    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>