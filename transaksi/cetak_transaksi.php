<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengajuan");
$html = '<center><h3>Data Transaksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Diubah</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['Username'] . "</td>
                <td>" . $transaction['No_Hp'] . "</td>
                <td>" . $transaction['Alamat'] . "</td>
                <td>" . $transaction['Kategori'] . "</td>
                <td>Rp. " . number_format($transaction['harga']) . "</td>
                <td>" . $transaction['tgl_dibuat'] . "</td>
                <td>" . $transaction['tgl_diubah'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>