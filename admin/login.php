<?php
	session_start();
	require "../include/koneksi.php";

	if(isset($_POST['submit'])){
		$db = new DB();
		$username = $_POST['inputUsername'];
		$password = md5($_POST['inputPassword']);

		$cek = $db->LoginAdmin($username, $password);

		if($cek->rowCount() > 0){
			$row = $cek->fetch();
			$_SESSION['admin'] = $row['nama_admin'];
			echo "<script language='javascript'>alert('Login Berhasil'); document.location='index.php'</script>";
		}else{
			echo "<script language='javascript'>alert('Username atau Password Salah'); document.location='login_admin.php'</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator -- SPK Penerimaan Pegawai</title>
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
            margin-bottom: 100px; /* Added margin to the bottom */
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
            margin-bottom: 20px; /* Added margin between form elements */
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <div class="login-header text-center">
                        <h2>Login Administrator</h2>
                    </div>
                    <form class="form-vertical" method="POST">
                        <div class="module-body">
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="form-control" type="text" id="inputUsername" name="inputUsername" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="form-control" type="password" id="inputPassword" name="inputPassword" placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                        <div class="module-foot">
                            <div class="control-group">
                                <div class="controls clearfix">
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
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
