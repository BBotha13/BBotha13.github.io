//change navbar background color on scroll

const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 50) {
    nav.classList.add("active_nav");
  } else {
    nav.classList.remove("active_nav");
  }
});

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-Menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});
