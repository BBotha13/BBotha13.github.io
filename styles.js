//change navbar background color on scroll

const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  if (window.scrollY >= 50) {
    nav.classList.add("active_nav");
  } else {
    nav.classList.remove("active_nav");
  }
});
//toggle hamnburger menu
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-Menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

//view and hide categories
const categoryBtn = document.querySelector("#category-container");
const categoryToggle = document.querySelector(".category-list");

if (categoryBtn) {
  categoryBtn.addEventListener("click", () => {
    categoryToggle.classList.toggle("active");
  });
}

//product details images
const mainImg = document.getElementById("mainImage");
const smallImg = document.getElementsByClassName("small-img");
if (smallImg[0]) {
  smallImg[0].addEventListener("click", () => {
    mainImg.src = smallImg[0].src;
  });
}
if (smallImg[1]) {
  smallImg[1].addEventListener("click", () => {
    mainImg.src = smallImg[1].src;
  });
}
if (smallImg[2]) {
  smallImg[2].addEventListener("click", () => {
    mainImg.src = smallImg[2].src;
  });
}
if (smallImg[3]) {
  smallImg[3].addEventListener("click", () => {
    mainImg.src = smallImg[3].src;
  });
}
