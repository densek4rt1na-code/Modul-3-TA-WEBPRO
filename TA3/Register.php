<?php

$koneksi = mysqli_connect("localhost","root","","db_user");

if($_SERVER["REQUEST_METHOD"] == "POST"){

$action = $_POST['action'];

if($action == "register"){

$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];

if(empty($username) || empty($password) || empty($confirm)){
    echo "Semua field harus diisi!";
    exit;
}

if($password != $confirm){
    echo "Password tidak sama!";
    exit;
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users(username,password)
          VALUES('$username','$passwordHash')";

if(mysqli_query($koneksi,$query)){
    echo "Registrasi berhasil";
}else{
    echo "Registrasi gagal";
}

}


if($action == "login"){

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) || empty($password)){
    echo "Username dan password harus diisi!";
    exit;
}

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($koneksi,$query);

$data = mysqli_fetch_assoc($result);

if($data){

if(password_verify($password,$data['password'])){
    echo "Login berhasil";
}else{
    echo "Password salah";
}

}else{
    echo "User tidak ditemukan";
}

}

}

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login & Register</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>

  <div class="auth-container">
    <div class="auth-box">
      <a href="homepage.html" class="back-home">Kembali</a>
      <h2 id="formTitle">Login</h2>
      

      <!-- LOGIN -->
      <form id="loginForm">
        <input type="text" id="loginUser" placeholder="Username" required />
        <input type="password" id="loginPass" placeholder="Password" required />
        <button type="submit">Login</button>
        <p class="switch">Belum punya akun? <span id="toRegister">Daftar</span></p>
      </form>

      <!-- REGISTER -->
      <form id="registerForm" class="hidden">
        <input type="text" id="regUser" placeholder="Username" required />
        <input type="password" id="regPass" placeholder="Password" required />
        <input type="password" id="regConfirm" placeholder="Konfirmasi Password" required />
        <button type="submit">Register</button>
        <p class="switch">Sudah punya akun? <span id="toLogin">Login</span></p>
      </form>

    </div>
  </div>
</body>
</html>