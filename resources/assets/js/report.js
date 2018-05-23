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

if (backButton) {
  backButton.addEventListener('click', () => {
    reportFirst.classList.remove('hide-first');
    reportSecond.classList.remove('show-second');
  })
}


const inputs = document.querySelectorAll('.input-and-check input');
const checkMarks = document.querySelector('.check-input');
if (inputs) {
  inputs.forEach(input => {
    input.addEventListener('keyup', () => {
      if (input.value) {
        input.nextSibling.nextSibling.style.display = 'block';
      }
      if (!input.value) {
        input.nextSibling.nextSibling.style.display = 'none';
      }
    })
  })
}
