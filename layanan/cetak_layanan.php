<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_input_layanan");
$html = '<center><h3>Data Layanan</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Layanan</th>
                <th>Deskripsi</th>
                <th>Lama Waktu</th>
                <th>Harga</th>
                <th>Tanggal Dibuat</th>
                <th>Tanggal Diubah</th>
            </tr>';
$no = 1;
while ($layanan = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $layanan['layanan'] . "</td>
                <td>" . $layanan['deskripsi'] . "</td>
                <td>" . $layanan['lama_waktu'] . "</td>
                <td>Rp. " . number_format($layanan['harga']) . "</td>
                <td>" . $layanan['tgl_dibuat'] . "</td>
                <td>" . $layanan['tgl_diubah'] . "</td>
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
$dompdf->stream('laporan-layanan.pdf');
?>
