function myFunction() {
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  let date = new Date();
  jam = date.getHours();
  tanggal = date.getDate();
  hari = days[date.getDay()];
  bulan = months[date.getMonth()];
  tahun = date.getFullYear();

  let m = date.getMinutes();
  let s = date.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById("date").innerHTML = `${hari}, 
      ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
  requestAnimationFrame(myFunction);
}
function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}
window.onload = function () {
  const password = prompt("Masukkan password untuk masuk:", "");
  if (password === "2218025") {
    let nama = prompt("Masukkan Nama Anda:", " ");
    let jam = new Date().getHours();
    if (nama != null) {
      if (jam >= 4 && jam <= 10) {
        document.getElementById("text").innerHTML = `Selamat Pagi ${nama}`;
      } else if (jam >= 11 && jam <= 14) {
        document.getElementById("text").innerHTML = `Selamat Siang ${nama}`;
      } else if (jam >= 15 && jam <= 18) {
        document.getElementById("text").innerHTML = `Selamat Sore ${nama}`;
      } else {
        document.getElementById("text").innerHTML = `Selamat Malam ${nama}`;
      }
    }
    myFunction();
  } else {
    // Redirect or display an error message
    document.body.innerHTML =
      "<h1>Unauthorized Access You do not have permission to access this page.</h1>";
  }
};
