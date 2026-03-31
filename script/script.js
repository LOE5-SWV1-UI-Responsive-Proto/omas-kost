const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");
const closeMenu = document.getElementById("close-menu");

hamburger.addEventListener("click", function () {
  navMenu.classList.add("active");
});

closeMenu.addEventListener("click", function () {
  navMenu.classList.remove("active");
});