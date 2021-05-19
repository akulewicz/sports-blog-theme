const navigationSwitcher = document.querySelector('.top-navigation__switcher--js');

navigationSwitcher.addEventListener('click', (e) => {
    const navigationList = document.querySelector('.top-navigation__list--js');
    navigationList.classList.toggle('top-navigation__list--visible');
    if (navigationList.classList.contains('top-navigation__list--visible')) {
        navigationSwitcher.innerHTML = '<i class="fas fa-times"></i>';
    } else {
        navigationSwitcher.innerHTML = '<i class="fas fa-bars"></i>';
    }
})