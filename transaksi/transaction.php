<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
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
          <a href="../layanan/entry-layanan.php">
            <i class="fas fa-note-sticky"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li>
          <a href="../layanan/service.php">
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
          <h2>Transaksi</h2>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="search" />
          </div>
        </div>
      </div>
      <div class="tabular--wrapper">
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>ID Transaksi</th>
                <th>Nama</th>
                <th>Layanan</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <tbody>
                    <td>2021-01-01</td>
                    <td>1</td>
                    <td>Dzuna</td>
                    <td>Audit</td>
                    <td>Rp. 10.000</td>
                    <td>
                        <p class="success">Success</p>
                    </td>
                    <td>
                        <button class="btn-edit" onclick="editCategory()">Edit</button>
                        <button class="btn-delete" onclick="deleteCategory()">Hapus</button>
                    </td>
              </tbody>
              <tbody>
                <td>2021-01-01</td>
                <td>2</td>
                <td>Dzuna</td>
                <td>Pajak</td>
                <td>Rp. 2.000.000</td>
                <td>
                    <p class="success">Success</p>
                </td>
                <td>
                    <button class="btn-edit" onclick="editCategory()">Edit</button>
                    <button class="btn-delete" onclick="deleteCategory()">Hapus</button>
                </td>
              </tbody>
            </thead>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>
