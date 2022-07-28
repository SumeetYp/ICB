const containerAnnouncements = document.querySelector(".announcements");
const announces = document.querySelector(".announces");

const fetchAnnouncements = async () => {
  const announcements = await fetch("./database/Announcements.json");
  const parsedAnnouncements = await announcements.json();
  return parsedAnnouncements;
};

const displayAnnouncements = async () => {
  const announcements = await fetchAnnouncements();
  if (announcements.totalResults !== 0) {
    containerAnnouncements.classList.remove("d-none");
    containerAnnouncements.classList.add("d-block");
    Array.from(announcements.announcementList).forEach((announcingThat) => {
      const a = document.createElement("li");
      a.append(announcingThat);
      announces.append(a);
    });
  }
};

displayAnnouncements();

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
