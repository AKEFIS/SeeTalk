let nav_links = document.querySelector(".menu").childNodes;
let menu = document.querySelector(".menu");
let menu_button = document.querySelector(".menu-button");
let mobile = document.querySelector(".mobile");
let menuToggleTreshold = 860;

for (let i = 1; i < 10; i += 2) {
  if (window.location.href == nav_links[i].href) {
    console.log(nav_links);
    nav_links[i].classList.toggle("active");
  }
}

menu_button.addEventListener("click", function () {
  menu.classList.toggle("active");
});

if (window.innerWidth >= menuToggleTreshold) {
  mobile.setAttribute("style", "display: none;");
} else {
  mobile.setAttribute("style", "display: flex;");
}

document.defaultView.addEventListener("resize", function () {
  console.log("ok");
  if (window.innerWidth >= menuToggleTreshold) {
    mobile.setAttribute("style", "display: none;");
  } else {
    mobile.setAttribute("style", "display: flex;");
  }
});
