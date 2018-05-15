const city = document.querySelectorAll('.city');
const campus = document.querySelectorAll('.campus');
const selection = document.querySelector('.campus-selection');

city.forEach((b) => {
b.addEventListener('click', () => {
  campus.forEach((a) => {
    a.classList.toggle('campus-display');
    })
  })
})

function setCampus(e) {
  // if(typeof(Storage) !== "undefined") {
  //         localStorage.campus = e.target.textContent;
  //     }
  document.cookie = `campus=${e.target.textContent}; expires=Thu, 18 Dec 2020 12:00:00 UTC`;
  }

campus.forEach((b) => {
  b.addEventListener('click', setCampus);
})


// if (localStorage.campus) {
//   selection.style.display = 'none';
// }


// Campus Search
const search = document.querySelector(".input-field-search-campus");

function filterCampuses() {
    let i;
    let a;
    const filter = search.value.toUpperCase();
    const ul = document.querySelector(".campus-list");
    const li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

search.addEventListener('keyup', filterCampuses);
