const settings = document.querySelector('.settings');
const contact = document.querySelector('.contact');
const closeSettings = document.querySelector('.close-settings-menu');
const closeContact = document.querySelector('.close-contact-menu');
const contactHeader = document.querySelector('.side-menu-header.contact');
const settingsHeader = document.querySelector('.side-menu-header.settings');

const settingsSideMenu = document.querySelector('.settings-side-menu');

function showSettingsMenu(){
  settingsSideMenu.classList.toggle('show-settings');
  contactSideMenu.classList.remove('show-contact');
}

if (settings) {
  settings.addEventListener('click', showSettingsMenu);
  closeSettings.addEventListener('click', () => {
  settingsSideMenu.classList.remove('show-settings');
})
  settingsHeader.addEventListener('click', () => {
  settingsSideMenu.classList.remove('show-settings');
})
}

const contactSideMenu = document.querySelector('.contact-side-menu');

function showContactMenu(){
  contactSideMenu.classList.toggle('show-contact');
  settingsSideMenu.classList.remove('show-settings');
}

if (contact) {
  contact.addEventListener('click', showContactMenu);
  closeContact.addEventListener('click', () => {
  contactSideMenu.classList.remove('show-contact');
})
  contactHeader.addEventListener('click', () => {
  contactSideMenu.classList.remove('show-contact');
})
}
