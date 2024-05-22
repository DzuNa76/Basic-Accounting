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

    <section id="service" class="service">
      <h2>Layanan Kami</h2>
      <div class="card-container">
        <div class="card">
          <img src="asset/audit.jpg" />
          <div class="card-content">
            <h3>Audit</h3>
            <p>
              Pemeriksaan menyeluruh terhadap laporan keuangan untuk memastikan
              keakuratan dan kewajaran informasi keuangan
            </p>
            <a href="#" class="btn" onclick="bukaModal('Audit')"
              >Mulai Kerjasama</a
            >
          </div>
        </div>
        <div class="card">
          <img src="asset/pajak.jpg" />
          <div class="card-content">
            <h3>Perpajakan</h3>
            <p>
              Bantuan dalam perencanaan pajak, penyusunan deklarasi pajak, dan
              mematuhi peraturan perpajakan yang berlaku
            </p>
            <a href="#" class="btn" onclick="bukaModal('Perpajakan')"
              >Mulai Kerjasama</a
            >
          </div>
        </div>
        <div class="card">
          <img src="asset/keuangan.jpg" />
          <div class="card-content">
            <h3>Keuangan</h3>
            <p>
              Nasihat dalam membuat keputusan investasi, perencanaan keuangan,
              analisis biaya, manajemen risiko, dan strategi bisnis
            </p>
            <a href="#" class="btn" onclick="bukaModal('Keuangan')"
              >Mulai Kerjasama</a
            >
          </div>
        </div>
      </div>
    </section>

    <!--  Popup Form -->
    <div id="myModal" class="modal-container" onclick="tutupModal()">
      <div class="modal-dialog" onclick="event.stopPropagation()">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" style="color: purple">
              Formulit Pengajuan
            </h1>
          </div>
          <div class="modal-body">
            <form>
              <h4>Pengajuan</h4>
              <div class="form-group">
                <label
                  class="labelmodal"
                  for="detail-nama"
                  class="col-form-label"
                  >Nama :</label
                >
                <input
                  class="inputdata"
                  type="text"
                  class="form-control"
                  id="detail-nama"
                />
              </div>
              <div class="form-group">
                <label
                  class="labelmodal"
                  for="detail-nomorhp"
                  class="col-form-label"
                  >No. Hp :</label
                >
                <input
                  class="inputdata"
                  type="text"
                  class="form-control"
                  id="detail-nomorhp"
                />
              </div>
              <div class="form-group">
                <label
                  class="labelmodal"
                  for="detail-alamat"
                  class="col-form-label"
                  >Alamat:</label
                >
                <textarea
                  class="inputalamat"
                  class="form-control"
                  id="detail-alamat"
                ></textarea>
              </div>
              <h4>Kategori</h4>
              <div class="form-group">
                <label
                  class="labelmodal"
                  for="detail-kategori"
                  class="col-form-label"
                  >Kategori :</label
                >
                <input
                  class="inputdata"
                  type="text"
                  class="form-control"
                  id="detail-kategori"
                />
              </div>
              <div class="form-group">
                <label
                  class="labelmodal"
                  for="detail-harga"
                  class="col-form-label"
                  >Lama Waktu :</label
                >
                <input
                  class="inputdata"
                  type="text"
                  class="form-control"
                  id="detail-harga"
                />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" onclick="tutupModal()">
              Keluar
            </button>
            <button type="button" class="btn" onclick="lakukanPembayaran()">
              Kirim
            </button>
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
  </body>
</html>