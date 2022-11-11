<?php
require 'connect.php';
require 'model/Admin.php';

session_start();
if (isset($_POST['username']) && isset($_POST['email'])) {
  $adminname = $_POST['username'];
  $adminemail = $_POST['email'];

  $admin = new Admin(1, $adminname, $adminemail);
  $result = Admin::loginAdmin($admin, $conn);

  if ($result->num_rows == 1) {
    echo '<script>console.log("Uspesna prijava!");</script>';
    $_SESSION['admin_id'] = $admin->id;
    header('Location:member.php');
    exit();
  } else {
    echo '<script>console.log("Neuspesna prijava prijava!");</script>';
  }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Prijava na sistem</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>

  <!-- partial:index.partial.html -->
  <div id="login-form-wrap">
    <h2>Prijava</h2>
    <div class="imgcontainer">
      <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <form id="login-form" method="post" action="#">
      <p>
        <input type="text" id="username" name="username" placeholder="Korisnicko ime" required><i
          class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="email" id="email" name="email" placeholder="Email adresa" required><i
          class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="submit" id="login" value="prijavi">
      </p>
    </form>
    <div id="create-account-wrap">
    </div>
    <!--create-account-wrap-->
  </div>
  <!--login-form-wrap-->
  <!-- partial -->

</body>

</html>