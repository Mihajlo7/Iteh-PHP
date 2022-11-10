<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
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
    <form id="login-form">
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