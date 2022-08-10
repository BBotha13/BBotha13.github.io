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
//aaaaaaaaaaaaaaaaaaaaaaaa
const mainImg = document.getElementById("mainImage");
const smallImg = document.getElementsByClassName("small-img");

smallImg[0].onclick = function () {
  mainImg.src = smallImg[0].src;
};
smallImg[1].onclick = function () {
  mainImg.src = smallImg[1].src;
};
smallImg[2].onclick = function () {
  mainImg.src = smallImg[2].src;
};
smallImg[3].onclick = function () {
  mainImg.src = smallImg[3].src;
};
//aaaaaaaaaaaaaaaaaaaaaaaa
// shop category list

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
