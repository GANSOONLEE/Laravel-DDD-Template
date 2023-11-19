
const menuButton = document.getElementById('user-menu-button');
const menuButtonDropdown = document.querySelector('[aria-labelledby="user-menu-button"]');
const mobileMenu = document.getElementById('mobile-menu');

menuButton!.addEventListener('click', () => {
    menuButtonDropdown!.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
  if (event.target !== menuButton && event.target !== mobileMenu) {
    mobileMenu!.classList.add('hidden');
  }
});
