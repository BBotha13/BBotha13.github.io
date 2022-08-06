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

//shop category list

const categoryBtn = document.querySelector("#category-container");
const isCatActive = document.querySelector(".category-list");

categoryBtn.addEventListener("mouseover", () => {
  if (window.innerWidth <= 850) {
    if (isCatActive.classList.contains("active")) {
      isCatActive.classList.remove("active");
    } else {
      isCatActive.classList.add("active");
    }
  }
});
categoryBtn.addEventListener("mouseout", () => {
  if (window.innerWidth <= 850) {
    if (isCatActive.classList.contains("active")) {
      isCatActive.classList.remove("active");
    } else {
      isCatActive.classList.add("active");
    }
  }
});
