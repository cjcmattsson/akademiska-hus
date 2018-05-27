const readMore = document.querySelector('.read-more');
const overlay = document.querySelector('.main-text-overlay');
const mainText = document.querySelector('.main-text-campus');

if (readMore) {
  readMore.addEventListener('click', () => {
    overlay.classList.toggle('hide-overlay');
    mainText.classList.toggle('show-text');
    readMore.classList.toggle('read-more-position');
    if (readMore.innerHTML === '+') {
      readMore.innerHTML = '-';
    } else if (readMore.innerHTML === '-') {
      readMore.innerHTML = '+';
    }
  });
}

// Show and hide map-section
const mapIcon = document.querySelector('.button.map');
const mapSection = document.querySelector('.map-section');
const closeMap = document.querySelector('.map-section .map img');
if (mapIcon) {
  mapIcon.addEventListener('click', () => {
    mapSection.classList.add('show-map-section');
  })
  closeMap.addEventListener('click', () => {
    mapSection.classList.remove('show-map-section');
  })
}

// Show and hide ERROR MESSAGE-section
const errorIcon = document.querySelector('.button.happening-notification')
const errorSection = document.querySelector('.urgent-error');
const closeError = document.querySelector('.close-error');

if (errorIcon) {
  errorIcon.addEventListener('click', () => {
    errorSection.classList.add('show-error-section');
  });
  closeError.addEventListener('click', () => {
    errorSection.classList.remove('show-error-section');
  });
}
