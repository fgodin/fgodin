const toggleMenu = document.querySelector('button.toggle-menu');
const mobileMenu = document.querySelector('nav.mobile-menu');

toggleMenu.addEventListener('click', () => {
mobileMenu.classList.toggle('hidden');
});