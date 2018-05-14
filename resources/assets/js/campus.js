const button = document.querySelectorAll('.campus');
const selection = document.querySelector('.campus-selection');

function clickCounter(e) {
  if(typeof(Storage) !== "undefined") {
          localStorage.campus = e.target.textContent;
      }
  }

button.forEach((b) => {
  b.addEventListener('click', clickCounter);
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
