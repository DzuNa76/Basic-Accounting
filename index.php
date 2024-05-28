<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="asset/accounting.png" />
    <title>Basic Accounting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo">Basic<span>Accounting</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#service">Layanan</a>
        <a href="login.php">Login</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- main -->
    <section class="hero" id="home">
      <main class="content">
        <h1><span>Konsultan Akuntansi</span> di Indonesia</h1>
        <p>Mulai dari pengusaha UMKM hingga Perusahaan Besar</p>
        <a href="#service" class="cta">Layanan</a>
      </main>
    </section>

    <!-- about -->
    <section id="about" class="about">
      <h2>Pentingnya Jasa <span>Akuntan</span> di Indonesia</h2>
      <div class="row">
        <div class="about-img">
          <img
            class="imgslide"
            src="asset/alexander-grey-8lnbXtxFGZw-unsplash.jpg"
          />
          <img
            class="imgslide"
            src="asset/Want-to-Be-Taken-More-Seriously-06-1024x682.webp"
          />
          <img
            class="imgslide"
            src="asset/konstantin-evdokimov-UUYkTnQkn9c-unsplash.jpg"
          />
        </div>
        <div class="content">
          <h3>Mengapa Itu Penting</h3>
          <p>
            Dalam memastikan bisnis di Indonesia memiliki kepatutan finansial
            yang baik, pemerintah Indonesia membuat kebijakan agar para pelaku
            bisnis di Indonesia mematuhi kewajiban terkait pelaporan finansial
            dan pajak. Dengan peraturan yang cenderung rumit, mendapatkan
            bantuan dari firma pajak dan akuntansi yang memiliki pengetahuan
            mendalam tentang tolak ukur pelaporan finansial di Indonesia akan
            membuat prosesnya jadi lebih mudah.
          </p>
        </div>
      </div>
      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </section>
    <!-- Bagian Layanan -->
      <?php
        // Sertakan file koneksi.php yang berisi kode untuk melakukan koneksi ke database
        include 'koneksi.php';

        // Buat query untuk mengambil data Layanan dari tabel layanan
        $query = "SELECT * FROM tb_input_layanan";
        $result = $koneksi->query($query);

        // Cek apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            // Tampilkan data Layanan dalam bagian Layanan di halaman index.php
            echo '<section id="service" class="service">';
            echo '<h2>Layanan Kami</h2>';
            echo '<div class="card-container">';
            // Loop melalui hasil query untuk menampilkan setiap data Layanan
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<img src="asset/' . $row['foto'] . '" />';
                echo '<div class="card-content">';
                echo '<h3>' . $row['layanan'] . '</h3>';
                echo '<p>' . $row['deskripsi'] . '</p>';
                echo '<a href="#" class="btn" onclick="bukaModal(' . $row['id'] . ')">Mulai Kerjasama</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            echo '</section>';
        } else {
            // Jika tidak ada data Layanan
            echo "Tidak ada data Layanan.";
        }

        // Tutup koneksi database
        $koneksi->close();
        ?>
    <!-- Bagian Layanan -->

    <!-- Popup Form -->
    <div id="myModal" class="modal-container" onclick="tutupModal()">
        <div class="modal-dialog" onclick="event.stopPropagation()">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" style="color: purple">Formulit Pengajuan</h1>
                </div>
                <div class="modal-body">
                    <form action="transaksi/proses_pengajuan.php" method="post">
                        <h4>Pengajuan</h4>
                        <div class="form-group">
                            <label class="labelmodal" for="detail-nama">Nama :</label>
                            <input class="inputdata" type="text" name="nama" class="form-control" id="detail-nama" required>
                        </div>
                        <div class="form-group">
                            <label class="labelmodal" for="detail-nomorhp">No. Hp :</label>
                            <input class="inputdata" type="text" name="nomorhp" class="form-control" id="detail-nomorhp" required>
                        </div>
                        <div class="form-group">
                            <label class="labelmodal" for="detail-alamat">Alamat:</label>
                            <textarea class="inputalamat" name="alamat" class="form-control" id="detail-alamat" required></textarea>
                        </div>
                        <h4>Kategori</h4>
                        <div class="form-group">
                            <label class="labelmodal" for="detail-kategori">Kategori :</label>
                            <!-- Mengubah input menjadi readonly -->
                            <input class="inputdata" type="text" name="kategori" class="form-control" id="detail-kategori" readonly required>
                        </div>
                        <div class="form-group">
                            <label class="labelmodal" for="detail-harga">Harga :</label>
                            <!-- Mengubah input menjadi readonly -->
                            <input class="inputdata" type="text" name="harga" class="form-control" id="detail-harga" readonly required>
                        </div>
                        <button type="button" class="btn" onclick="tutupModal()">Keluar</button>
                        <button type="submit" class="btn">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#service">Layanan</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Dzulfidho</a>. | &copy; 2024.</p>
      </div>
    </footer>

    <script>
      feather.replace();
    </script>
    <!-- my js -->
    <script src="js/script.js"></script>
    <script>
      // Fungsi untuk membuka modal dan mengisi data kategori secara otomatis
      function bukaModal(categoryId) {
          // Menggunakan AJAX untuk memanggil skrip PHP get_kategori.php
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  // Mendapatkan respons JSON dari skrip PHP
                  var responseData = JSON.parse(xhr.responseText);
                  // Mengisi data kategori ke dalam formulir modal
                  document.getElementById('detail-kategori').value = responseData.kategori;
                  document.getElementById('detail-harga').value = responseData.harga;
                  // Menampilkan modal
                  document.getElementById("myModal").style.display = "flex";
              }
          };
          // Mengirimkan request GET ke skrip PHP dengan parameter categoryId
          xhr.open("GET", "get_kategori.php?id=" + categoryId, true);
          xhr.send();
      }

      // Fungsi untuk menutup modal
      function tutupModal() {
          document.getElementById("myModal").style.display = "none";
      }
    </script>
  </body>
</html>
