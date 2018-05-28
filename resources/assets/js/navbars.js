// NEWS FEED NAVBAR
const feedNavItems = document.querySelectorAll('.feed-nav-item');
const ahaNavItem = document.querySelector('.feed-nav-item.aha-nav');
const campusNavItem = document.querySelector('.feed-nav-item.campus-nav');
const questionsNavItem = document.querySelector('.feed-nav-item.questions-nav');

feedNavItems.forEach(navItem => {
  navItem.addEventListener('click', () => {
    if (!navItem.classList.contains('active-feed-nav-item') && navItem.classList.contains('campus-nav')) {
      ahaNavItem.classList.remove('active-feed-nav-item');
      questionsNavItem.classList.remove('active-feed-nav-item');
      navItem.classList.add('active-feed-nav-item');
    } else if (!navItem.classList.contains('active-feed-nav-item') && navItem.classList.contains('aha-nav')) {
      campusNavItem.classList.remove('active-feed-nav-item');
      questionsNavItem.classList.remove('active-feed-nav-item');
      navItem.classList.add('active-feed-nav-item');
    } else if (!navItem.classList.contains('active-feed-nav-item') && navItem.classList.contains('questions-nav')) {
      campusNavItem.classList.remove('active-feed-nav-item');
      ahaNavItem.classList.remove('active-feed-nav-item');
      navItem.classList.add('active-feed-nav-item');
    }
  })
})

// BOT NAVBAR
// Not Admin
const navbarBot = document.querySelector('.navbar-bot');
const newsNav = document.querySelector('.news.nav-item');
const reportNav = document.querySelector('.report.nav-item');
const campusNav = document.querySelector('.campus-info.nav-item');

// Admin
const disturbancesNav = document.querySelector('.disturbances.nav-item');
const editCampusNav = document.querySelector('.edit-campus-info.nav-item.admin-bot-nav-item');
const editFaqNav = document.querySelector('.edit-faq.nav-item');

window.onload = () => {
  // NOT admin section
  if(window.location.href.indexOf("feed") != -1){
    newsNav.classList.add('active-nav-item');
  } else if (window.location.href.indexOf("felanmallan") != -1) {
    reportNav.classList.add('active-nav-item');
    navbarBot.classList.add('active-after')
  } else if (window.location.href.indexOf("campusinfo") != -1) {
    campusNav.classList.add('active-nav-item');
  }
// Admin Section
    else if (window.location.href.indexOf("driftstorningar") != -1) {
    disturbancesNav.classList.add('active-nav-item-admin');
  } else if (window.location.href.indexOf("editcampus") != -1) {
    editCampusNav.classList.add('active-nav-item-admin');
  } else if (window.location.href.indexOf("editfaq") != -1) {
    editFaqNav.classList.add('active-nav-item-admin');
  }
}
