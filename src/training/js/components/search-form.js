export default class SearchForm {
    constructor() {
        this.button = document.querySelector('.js-search-button');
        this.form = document.querySelector('.js-search-form');

        this.init();
    }

    init() {
        this.button.addEventListener('click', () => {
            this.form.classList.toggle('open');
        });
    }
}