// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

//ketika diklik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//klik diluar nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

//Carousel automatically
var firstindex = 0;
function autoSlide() {
  var gbr;
  const img = document.querySelectorAll(".imgslide");
  for (gbr = 0; gbr < img.length; gbr++) {
    img[gbr].style.display = "none";
  }
  firstindex++;
  if (firstindex > img.length) {
    firstindex = 1;
  }
  img[firstindex - 1].style.display = "block";
  setTimeout(autoSlide, 5000);
}
autoSlide();

//Carousel Button
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("imgslide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Fungsi Modal
function bukaModal(kategori) {
  document.getElementById("myModal").style.display = "flex";

  var nama = document.getElementById("recipient-name").value;
  var nomorhp = document.getElementById("handphone").value;
  var alamat = document.getElementById("alamat-text").value;

  document.getElementById("kategori-detail").innerText = "Detail " + kategori;

  document.getElementById("detail-nama").value = nama;
  document.getElementById("detail-nomorhp").value = nomorhp;
  document.getElementById("detail-alamat").value = alamat;
}

function tutupModal() {
  document.getElementById("myModal").style.display = "none";
}

function lakukanPembayaran() {
  alert("Pemesanan berhasil!");
  tutupModal2();
}
