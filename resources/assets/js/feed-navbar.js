const ahaNav = document.querySelector('.aha-nav');
const campusNav = document.querySelector('.campus-nav');
const questionsNav = document.querySelector('.questions-nav');

const ahaPage = document.querySelector('.aha');
const campusPage = document.querySelector('.campus');
const questionsPage = document.querySelector('.q-and-a');

ahaNav.addEventListener('click', () => {
  ahaPage.style.left = "0";
  campusPage.style.right = "-100vw";
})
