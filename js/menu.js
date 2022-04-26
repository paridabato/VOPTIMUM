const menuBtn = document.querySelector('.burger');
let menuOpen = false;
console.log(menuBtn)
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
});

const navMenu = document.querySelector(".header-menu__items")

menuBtn.addEventListener("click", () => {
    navMenu.classList.toggle('menu-active')
})


document.querySelectorAll('.header-menu__items__item').forEach(item =>
    item.addEventListener("click", () => {
        burger.classList.remove('.active')
        navMenu.classList.remove('.active')
    }))