const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");
const closeMenu = document.getElementById("close-menu");

hamburger.addEventListener("click", function () {
  navMenu.classList.add("active");
});

closeMenu.addEventListener("click", function () {
  navMenu.classList.remove("active");
});






const menuMain = document.getElementById("menu-main");
const themeToggle = document.getElementById("theme-toggle");

if (menuMain && themeToggle) {
  themeToggle.addEventListener("click", function () {
    menuMain.classList.toggle("dark-mode");
  });
}
