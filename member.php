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
    <!-- Meni -->
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
                    <button type="button" class="btn btn-danger" onclick="addMember()">Sacuvaj</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Zatvori</button>

                </div>
            </div>
        </div>
    </div>

    <!-- UPDATE MODEL -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Izmena podataka clana biblioteke</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="completename">Ime i prezime</label>
                            <input type="text" class="form-control" id="updatename" placeholder="Unesite ime i prezime">
                        </div>
                        <div class="form-group">
                            <label for="completeemail">Email </label>
                            <input type="text" class="form-control" id="updateemail" placeholder="Unesite email">
                        </div>
                        <div class="form-group">
                            <label for="completemobile">Telefon </label>
                            <input type="text" class="form-control" id="updatemobile" placeholder="Unesite telefon">
                        </div>
                        <div class="form-group">
                            <label for="updateplace">Prebivaliste </label>
                            <input type="text" class="form-control" id="updateplace"
                                placeholder="Unesite grad u kojem zivite">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="updateMember()">Azuriraj</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Zatvori</button>
                    <input type="hidden" id="hiddendata">

                </div>
            </div>
        </div>
    </div>
    <!-- Cookie model-->
    <div class="modal" tabindex="-1" id="cookieModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Obavestenje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <?php

                        if (isset($_COOKIE['lastVisit'])) {
                            $visit = $_COOKIE['lastVisit'];
                            echo "Your last visit was - " . $visit;
                        } else
                            echo "You've got some stale cookies!";
                        ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--             -->


    <div class="container my-5">
        <h1 class="text-center">Clanovi biblioteke</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
            Dodaj novog clana
        </button>
        <div id="displayDataTable">

        </div>
    </div>




    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () {
            displayData();
            var from = document.referrer;
            console.log(from);
            if (from == "http://localhost:8081/iteh-domaci-1/index.php") {
                $('#cookieModel').modal("show");
            }
        });
        //prikazi clanove
        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "displayMember.php",
                type: 'post',
                data: {
                    displaySend: displayData
                },
                success: function (data, status) {
                    $('#displayDataTable').html(data);
                }
            });
        }


        //dodaj novog clana
        function addMember() {
            var nameAdd = $('#completename').val();
            var emailAdd = $('#completeemail').val();
            var mobileAdd = $('#completemobile').val();
            var placeAdd = $('#completeplace').val();


            $.ajax({
                url: "insertMember.php",
                type: 'post',
                data: {
                    nameSend: nameAdd,
                    emailSend: emailAdd,
                    mobileSend: mobileAdd,
                    placeSend: placeAdd
                },
                success: function (data, status) {
                    //funkcija za prikaz podataka
                    console.log(status);
                    $(document).ready(function () {
                        displayData();
                    });
                    $('#completeModal').modal("hide");
                }
            });
        }

        //Brisanje clana biblioteke
        function deleteMember(deleteId) {
            $.ajax({
                url: "deleteMember.php",
                type: 'post',
                data: {
                    deleteSend: deleteId
                },
                success: function (data, status) {
                    console.log("Obrisan clan sa id:", deleteId);
                    displayData();
                }
            })
        }

        // izmeni podatke clana
        function getMember(updateId) {
            $('#hiddendata').val(updateId);
            $.post("updateMember.php", { updateId: updateId }, function (data, status) {
                var userId = JSON.parse(data);
                $('#updatename').val(userId.name);
                $('#updateemail').val(userId.email);
                $('#updatemobile').val(userId.mobile);
                $('#updateplace').val(userId.place);
            });
            $('#updateModal').modal("show");
        }

        function updateMember() {
            var updateName = $('#updatename').val();
            var updateEmail = $('#updateemail').val();
            var updateMobile = $('#updatemobile').val();
            var updatePlace = $('#updateplace').val();
            var hiddenData = $('#hiddendata').val();

            $.post("updateMember.php", {
                updateName: updateName,
                updateEmail: updateEmail,
                updateMobile: updateMobile,
                updatePlace: updatePlace,
                hiddenData: hiddenData
            }, function (data, status) {
                console.log(status);
                $('#updateModal').modal("hide");
                displayData();
            });
        }
    </script>
</body>

</html>