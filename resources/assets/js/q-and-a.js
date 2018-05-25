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
