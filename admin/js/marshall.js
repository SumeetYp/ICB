const sideBar = document.querySelector(".sideBar");
const menu = document.querySelector(".menu");
const cross = document.querySelector(".cross");

sideBar.classList.add("hideSideBar");

menu.addEventListener("click", (e) => {
  sideBar.classList.remove("hideSideBar");
  sideBar.classList.add("displaySideBar");
  setTimeout(() => {
    cross.style.display = "flex";
  }, 500);
});

cross.addEventListener("click", (e) => {
  sideBar.classList.add("hideSideBar");
  sideBar.classList.remove("displaySideBar");
  cross.style.display = "none";
});
