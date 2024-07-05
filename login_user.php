<?php
    session_start();
    include "include/koneksi.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = new User();

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $qry = $user->LoginUser($username, $password);

        if ($qry->rowCount() > 0) {
            $row = $qry->fetch();
            $_SESSION['user'] = $row['id_user'];
            echo "<script language='javascript'>alert('Login Berhasil');document.location='index.php'</script>";
        } else {
            echo "<script language='javascript'>alert('Login Gagal');document.location='login_user.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Pelamar -- Penerimaan Pegawai</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Custom CSS -->
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-container {
        margin-top: 100px;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }
    .login-header {
        margin-bottom: 30px;
    }
    .login-header h2 {
        font-weight: 700;
        color: #343a40;
    }
    .form-control {
        border-radius: 5px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-secondary {
        background-color: #6c757d;
        border: none;
        border-radius: 5px;
    }
    .btn-secondary:hover {
        background-color: #5a6268;
    }
    .additional-links {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <div class="login-header text-center">
                        <h2>Masuk</h2>
                        <p>Silahkan masukkan username dan password yang telah terdaftar</p>
                    </div>
                    <form role="form" method="post" action="login_user.php">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control input-lg" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary btn-block" value="Login">
							<div class="additional-links">
                                <a href="register.php">Belum punya akun? Daftar</a>
                                <a href="index.php">Kembali ke Beranda</a>
                            </div>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
