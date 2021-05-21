<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title> FinaBoost</title>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="logo" width="75" height="75" class="d-inline-block align-text-top">
      FinaBoost
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topics
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="finance.html"> Financial Planning </a></li>
            <li><a class="dropdown-item" href="emergency.html"> Emergency Planning </a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link active" href="calculator.php"> Amount calculator </a>
        </li>
          <a class="nav-link" href="index.php">Contact Us</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-4">
<h3 style="text-align: center; font-size: 120%; font-weight: bold;"> Quantifying Compounding Interest</h3>
<p> Calculate the amount of money you'd receive after a given time frame and a fixed interest rate with our calculator and witness the power of compounding interest in a quantifiable way.</p>
<form action= "result.php" method="POST">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"> Principal Amount </label>
  <input type="text" class="form-control"  name="num1" placeholder=" Enter your principal amount"> 
</div>
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"> Time Frame </label>
  <input type="text" class="form-control"  name="num2" placeholder=" Enter the time frame"> 
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label"> Interest Rate </label>
  <input type="text" class="form-control" name="num3" placeholder=" Enter the interest rate">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
  </html>
  

