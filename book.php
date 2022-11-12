<?php
$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Knjige</title>
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
                        <a class="nav-link active" aria-current="page" href="renting.php">Rezervacije</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="member.php">Clanovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#">Knjige</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center">Dostupne knjige</h1>
        <div class="input-group mb-3 my-4">
            <input type="text" class="form-control" id="titlebook" placeholder="Unesite naziv knjige">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="displayBooks()">Pretrazi</button>
            </div>
        </div>
        <div id="displayDataTableBooks">

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        function displayBooks() {

            var title = $('#titlebook').val();
            console.log(title);
            $.ajax({
                url: "displayBooks.php",
                type: 'post',
                data: {
                    title: title
                },
                success: function (data, status) {
                    console.log(status);
                    $('#displayDataTableBooks').html(data);
                }
            });
        }
    </script>
</body>

</html>