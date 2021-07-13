<?php
include "koneksi_login.php";

session_start();
if( !isset($_SESSION["login"])){
  header("Location: menulogin.php");
}
include "session.php";
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="stylewecare.css" />
    <title>Welcome To We Care!</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(221, 60, 60)">
      <div class="container">
        <a class="navbar-brand" href="page_admin.php">Dashboard Administrator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="page_admin.php">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> WeCare </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="#">View</a></li>
                  <li><a class="dropdown-item" href="#">Update</a></li>
                </ul>
              </div>
            
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> User Management </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="register.php">Create User</a></li>
                  <li><a class="dropdown-item" href="editupdatedata.php">Edit User</a></li>
                  <li><a class="dropdown-item" href="databaseuser.php">User History</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="btn btn-dark" aria-current="page" href="logout.php">LOGOUT</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/Logo We Care (3).png" alt="Logo We Care" width="200" class="rounded-circle" />
      <h1 class="display-4">Welcome To We Care</h1>
      <p class="lead">We Care More Than You Know.</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-4">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam quos consequuntur dolorem quas labore enim excepturi qui quisquam amet distinctio.</p>
          </div>
          <div class="col-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis odit rem similique quas, eos quidem reprehenderit consequuntur et veniam temporibus obcaecati natus labore, accusamus est?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
