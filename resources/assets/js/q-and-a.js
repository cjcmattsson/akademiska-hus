const boxes = document.getElementsByClassName('expander-box');

for (let i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener('click', expand, false);
}

function expand() {
  const answer = this.querySelector('.answer-box');

  if (answer.style.display === 'block') {
    answer.style.display = 'none';
  }
  else {
          answer.style.display = 'block';
       }
};


const faqQuestion = document.querySelectorAll('.expander-box');

function toggleIcon () {
  this.querySelector('.open-faq').classList.toggle('hide-faq');
  this.querySelector('.close-faq').classList.toggle('show-faq');
}

faqQuestion.forEach(faq => {
  faq.addEventListener('click', toggleIcon);
})
