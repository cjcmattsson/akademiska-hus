const ahaNav = document.querySelector('.aha-nav');
const campusNav = document.querySelector('.campus-nav');
const questionsNav = document.querySelector('.questions-nav');

const ahaPage = document.querySelector('.aha');
const campusPage = document.querySelector('.campus');
const questionsPage = document.querySelector('.q-and-a');

if (ahaNav) {
  ahaNav.addEventListener('click', () => {
    ahaPage.classList.remove('aha-left')
    campusPage.classList.remove('campus-middle')
    campusPage.classList.remove('campus-left')
    campusPage.classList.add('campus-right')
    questionsPage.classList.remove('questions-middle');
  })
}

if (campusNav) {
  campusNav.addEventListener('click', () => {
    campusPage.classList.remove('campus-left')
    campusPage.classList.remove('campus-right')
    ahaPage.classList.add('aha-left')
    campusPage.classList.add('campus-middle');
    questionsPage.classList.remove('questions-middle');
  })
}

if (questionsNav) {
  questionsNav.addEventListener('click', () => {
    campusPage.classList.add('campus-right');
    campusPage.classList.add('campus-left');
    questionsPage.classList.add('questions-middle');
  })
}
