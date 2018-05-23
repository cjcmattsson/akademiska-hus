const buildings = document.querySelectorAll('.building');
const reportFirst = document.querySelector('.report-first-page');
const reportSecond = document.querySelector('.report-second-page');

buildings.forEach(building => {
  building.addEventListener('click', () => {
    reportFirst.classList.add('hide-first');
    reportSecond.classList.add('show-second');
  })
})

const backButton = document.querySelector('.go-back');

backButton.addEventListener('click', () => {
  reportFirst.classList.remove('hide-first');
  reportSecond.classList.remove('show-second');
})
