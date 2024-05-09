<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Entry Data</title>
    <link rel="stylesheet" href="../css/styledash.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li>
          <a href="../dashboard.php">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="entry-layanan.php">
            <i class="fas fa-note-sticky"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li>
          <a href="service.php">
            <i class="fas fa-briefcase"></i>
            <span>Service</span>
          </a>
        </li>
        <li>
          <a href="../transaksi/transaction.php">
            <i class="fas fa-chart-bar"></i>
            <span>Transaction</span>
          </a>
        </li>
        <li class="logout">
          <a href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log out</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <span>Data</span>
          <h2>Input Layanan</h2>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="search" />
          </div>
        </div>
      </div>
      <div class="tabel-wrapper">
        <h3 class="main-title">Input Data</h3>
        <div class="form-wrapper">
          <form action="#">
            <div class="form-group">
              <label for="layanan">Layanan</label>
              <input type="text" id="layanan" name="layanan" />
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="text" id="deskripsi" name="deskripsi" />
            </div>
            <div class="form-group">
              <label for="lama_waktu">Lama Waktu</label>
              <input type="text" id="lama_waktu" name="lama_waktu" />
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" id="harga" name="harga" />
            </div>
            <div class="button-container">
              <button class="move-button">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
