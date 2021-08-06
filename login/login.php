
<?php 

// $username="janwar";
// $pass="farhan";


  

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <!-- heading --> 
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../gambar/smp2.jpg" style="height: 340px" class="d-block w-100" alt="...">
          </div>
          
        </div>
      </div>
          <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fas fa-university" href="#">SMP Negeri 2 Ambon</i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
</nav>

<!-- jumbotron -->
<div class="jumbotron">
  <h1 class="display-4">Wellcome in SMP Negeri 2 Ambon!</h1>
</div>

<!-- row 1 -->

<div class="row mt-3 mb-2">
  <div class="col-sm-8">
    <img src="../gambar/smp23.jpg" class="img-fluid" alt="..."  style="height: 400px;">
  </div>

  <div class="col-sm-4" style="background-color:white; border-radius: 5%; background-size:  cover; border: 3px solid lightblue;">

    <!-- form login -->
    <form action="ceklogin.php" method="post" style="margin-top: 20px">
      <h3 style="text-align: center;">Login</h3>
      <br>
      <table>
        <tr>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username <i class="fas fa-user"></i></label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan username..." name="username" required="">
          </div>
        </tr>
        <tr>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password <i class="fas fa-key"></i></label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukkan password..." name="password" required="">
          </div>
        </tr>
        <tr>
          <button type="submit" name="login" class="btn btn-primary">sign in</button>
        </tr>
      </table>
    </form>
  </div>

</div>


<!-- row 2 -->

 </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>