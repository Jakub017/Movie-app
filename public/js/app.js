const profileBtn = document.querySelector('.nav__arrow-link');
const profileMenu = document.querySelector('.nav__profile-list');
const profileArrow = document.querySelector('.nav__profile-arrow');

profileBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('nav__profile-list--active');
    profileArrow.classList.toggle('nav__profile-arrow--rotated');
});
