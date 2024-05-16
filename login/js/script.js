/* -------------------------------------------------------------------------------- */
/* ! Apertura e chiusura adminbar
/* -------------------------------------------------------------------------------- */
const adminMain = document.querySelector(".adminmain");
const openMenu = document.querySelector(".openmenu");
const logo = document.querySelector(".logo");
const arrow = document.querySelector(".adminmenu-arrow");
const menuNames = document.querySelectorAll(".menu-name");

openMenu.addEventListener("click", () => {
  adminMain.classList.toggle("adminmain--open");
  menuNames.forEach((menuName) => menuName.classList.toggle("menu-name--open"));
  logo.classList.toggle("logo--open");
  arrow.classList.toggle("rotate-arrow");
});


/* -------------------------------------------------------------------------------- */
/* ! Current Page
/* -------------------------------------------------------------------------------- */
const currentPage = window.location.pathname.split("/").pop();
const menuItems = document.querySelectorAll(".adminmenu li");

menuItems.forEach((item) => {
  const link = item.querySelector("a");
  if (link) {
    const href = link.getAttribute("href");
    if (href && href.split("/").pop() === currentPage) {
      item.classList.add("current-admin-menu");
    } else {
      item.classList.remove("current-admin-menu");
    }
  }
});

