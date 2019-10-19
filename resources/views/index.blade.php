<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href={{ asset('css/bootstrap.min.css')}}>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<style>
  body{
    position: relative;
  }
  section{
    min-height: 450px;
  }
  .paral {
  min-height: 600px;
  background-attachment: fixed;
  background-size: cover;
  background-position: 50% 50%;
}
  .paralsec {
  background-image: {{url('logo1.png')}};
}
</style>

    <title>Login Page</title>
  </head>
  <body class="mt-5" data-spy="scroll" data-target=".navbar" data-offset="50" id="myPage">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="#myPage">APLIKASI PENDAFTARAN PKL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#myPage"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact"></a>
      </li>
    </ul>

</div>
  </div>
</nav>

    <div class="container" style="padding-top: 30px">
        <img src="logo1.png" class="mx-auto d-block" style="width:35%"> 
    </div>

    <div class="container" style="padding-top: 15px; padding-bottom: 15px">
      <div class="row mb-1 pt-1">
      <div class="col text-center">
        <h5>Masuk Sebagai</h5>
      </div></div>
    </div>

  <div class="container" style="padding-top: 10px; padding-bottom: 15px">
    <div class="row mb-1 pt-1">
      <div class="col text-center">
          <a href="{{ url('/login_admin') }}" class="btn btn-info" role="button"> Admin  </a>
          <a href="login_member.php" class="btn btn-info" role="button"> Siswa  </a>
      </div>
    </div>    
  </div>
</body>
</html>