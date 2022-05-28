window.onload = () => {
    const hamburger = document.getElementById('js--header__hamburger');
    const mobileMenu = document.getElementById('js--header__mobileLinks');
    const closeMobileMenu = document.getElementById('js--header__mobileLinks--close');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('header__mobileLinks--active');
    });

    closeMobileMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('header__mobileLinks--active');
    });
}

