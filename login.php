<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="asset/log-in.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/stylelog.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
    <form action="client/login_process.php" method="post">
        <h1>Login</h1>
        <div class="register-link">
          <p>
            Kembali ke
            <a href="index.php">Beranda</a>
          </p>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Username" required name="Username" />
          <i class="bx bxs-user"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required name="Password" />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" />Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="btn" name="login">Login</button>

        <div class="register-link">
          <p>
            Don't Have an Account
            <a href="register.php">Register</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>