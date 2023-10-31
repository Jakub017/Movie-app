const navigation = document.querySelector('nav.nav');
const mobileMenuOptions = [...document.querySelectorAll('.mobile-nav__link')];
const mobileMenu = document.querySelector('.mobile-nav');
const hamburgerBtn = document.querySelector('.nav__hamburger-wrapper');
const darkBgc = document.querySelector('.dark-background');
const closeBtn = document.querySelector('.mobile-nav__close');

let scrollValue = 0;

window.addEventListener('scroll', function () {
    scrollValue = window.scrollY;

    if (scrollValue > 150) {
        navigation.classList.add('nav--active');
    }

    if (scrollValue < 150) {
        navigation.classList.remove('nav--active');
    }
})

hamburgerBtn.addEventListener('click', function () {
    mobileMenu.classList.add('mobile-nav--active');
    darkBgc.classList.add('dark-background--active')
})

closeBtn.addEventListener('click', function () {
    mobileMenu.classList.remove('mobile-nav--active')
    darkBgc.classList.remove('dark-background--active')
})

mobileMenuOptions.forEach((option) => {
    option.addEventListener('click', function () {
        mobileMenu.classList.remove('mobile-nav--active')
        darkBgc.classList.remove('dark-background--active')
    })
})
