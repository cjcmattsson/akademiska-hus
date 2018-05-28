const cities = document.querySelectorAll('.city');
const selection = document.querySelector('.campus-selection');

if (cities) {
  cities.forEach((city) => {
    city.addEventListener('click', () => {
      city.querySelector('.campuses-in-city').classList.toggle('campus-display');
      city.querySelector("a .add").classList.toggle('hide-icon');
      city.querySelector("a .remove").classList.toggle('show-icon');
      })
    })
}

const radioLabel = document.querySelectorAll('.radioLabel');
const campusSelect = document.querySelector('.select-campus-box')

if (campusSelect) {
  radioLabel.forEach(campusName => {
    campusName.addEventListener('click', () => {
      campusSelect.classList.add('show-selection-box');
      let clickedCampus = campusName.textContent;
      const nameClicked = document.querySelector('.name-of-clicked');
      nameClicked.innerHTML = clickedCampus
    })
  })
}

const wrongCampus = document.querySelector('.wrong-campus');

if (wrongCampus) {
  wrongCampus.addEventListener('click', () => {
    campusSelect.classList.remove('show-selection-box');
  })
}

// Campus Search
const search = document.querySelector(".input-field-search-campus");

function filterCampuses() {
    let i;
    let a;
    const filter = search.value.toUpperCase();
    const ul = document.querySelector(".campus-list");
    const li = ul.querySelectorAll('.city');
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

if (search) {
  search.addEventListener('keyup', filterCampuses);
}
