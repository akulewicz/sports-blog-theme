const navigationSwitcher = document.querySelector('.top-navigation__switcher--js');

navigationSwitcher.addEventListener('click', (e) => {
    const navigation = document.querySelector('.top-navigation--js');
    navigation.classList.toggle('top-navigation--visible');
    if (navigation.classList.contains('top-navigation--visible')) {
        navigationSwitcher.innerHTML = '<i class="fas fa-times"></i>';
    } else {
        navigationSwitcher.innerHTML = '<i class="fas fa-bars"></i>';
    }
})