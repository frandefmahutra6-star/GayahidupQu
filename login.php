<?php include 'partials/header.php';?>
<?php include 'partials/menu.php';?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5 text-center">
    <h2>Selamat Datang di GayahidupQu</h2>

    <?php if (isset($_SESSION['username'])) { ?>
        <div class="alert alert-success">
            Login berhasil! Halo, <b><?= $_SESSION['username']; ?></b>
        </div>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    <?php } else { ?>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
    <?php } ?>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Masukan username dan password anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="login.php" method="POST">
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label"><i>Username</i></label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label"><i>Password</i></label>
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="login" class="btn btn-success">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">buat akun baru</button>

        </div>
      </form>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<?php include 'partials/footer.php';?>