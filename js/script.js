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

// Carousel
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
