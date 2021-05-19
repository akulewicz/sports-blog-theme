const openSearchButton = document.querySelector('.search-button--js');
const searchBox = document.querySelector('.search-box--js');
const closeSearchButton = document.querySelector('.search-box__close--js');

openSearchButton.addEventListener('click', () =>{
    searchBox.classList.add('search-box--visible');
});

closeSearchButton.addEventListener('click', () =>{
    searchBox.classList.remove('search-box--visible');
});