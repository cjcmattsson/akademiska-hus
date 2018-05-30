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

const sendButton = document.querySelector('.send-report');

function handleSubmit(){
       document.getElementById('report-form').submit();
    }

function delaySubmit(){
          window.setTimeout(handleSubmit, 3000); // change this to whatever delay you need
    };

if (sendButton) {
  sendButton.addEventListener('click', () => {
    document.querySelector('.report-thanks-message').classList.add('show-thanks');
    delaySubmit();  // 5 seconds
    return false;
  });
}
