const settings = document.querySelector('.settings');
const contact = document.querySelector('.contact');

const settingsSideMenu = document.querySelector('.settings-side-menu')

function showSettingsMenu(){
  settingsSideMenu.classList.toggle('show-settings');
  contactSideMenu.classList.remove('show-contact');
}

if (settings) {
  settings.addEventListener('click', showSettingsMenu);
}

const contactSideMenu = document.querySelector('.contact-side-menu')

function showContactMenu(){
  contactSideMenu.classList.toggle('show-contact');
  settingsSideMenu.classList.remove('show-settings');
}

if (contact) {
  contact.addEventListener('click', showContactMenu);
}
