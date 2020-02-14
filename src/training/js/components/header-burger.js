export default class HeaderBurger {
    constructor() {
        this.burger = document.querySelector('.js-header-burger');
        this.burgerIcon = document.querySelector('.js-header-burger-icon');
        this.menu = document.querySelector('.js-header-menu');

        this.init();
    }

    init() {
        this.burger.addEventListener('click', () => {
            this.burgerIcon.classList.toggle('open');
            this.menu.classList.toggle('open');
        });
    }
}