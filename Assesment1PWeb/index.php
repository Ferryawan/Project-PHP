<!-- index.php -->

<!DOCTYPE html>
<html>

<head>
  <title>Form Login Kasir - Toko Sumber Berkah</title>
</head>
<!-- Soal No 1 -->
<!-- Link Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
  <!-- Header -->
  <h1 align="center" class="text-dark">Toko Sumber Berkah</h1>
  <nav class="navbar navbar-expand-lg bg-body-primary ">
    <div class="container text-center justify-content-center">
      <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Soal No 2 -->
  <h2 align="center" class="text-dark">Form Login Kasir</h2>
  <form method="POST" action="transaksi.php" align="center">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit" value="Login" name="login" class="btn btn-success">Login</button>
  </form>
  <!-- footer -->
  <footer align="center" class="p-2 bg-primary m-2 text-light">
    <p>&copy; 2023 Toko Sumber Berkah</p>
  </footer>
  <!-- Link Boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>