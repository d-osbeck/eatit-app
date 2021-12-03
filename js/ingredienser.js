export default class Ingredienser {
    constructor() {
        this.data = {
            password: "Eatit"
        }


        this.rootElem = document.querySelector('.main__content');
        this.addBtn = document.querySelector('.input-btn');
        this.searchContainer = document.querySelector('.main__search');
        this.items = this.rootElem.querySelector('.items__list');
        this.ingrediensSearch = this.searchContainer.querySelector('.search-ingredienser-input');

        this.addBtn.addEventListener('click', () => this.render());

    }

    async render(){
        const data = await this.getData();

        const wrapper = document.createElement('div');
        wrapper.classList.add('items__wrapper', 'd-flex', 'flex-wrap');

        for(const item of data){
            wrapper.innerHTML = `
            <div class="list__item py-1 px-3 m-1 d-flex align-items-center">
                <p>${item.ingrNavn}</p>
                <i class="far fa-times-circle ms-1"></i>
            </div>
            `;
        }

        this.items.appendChild(wrapper);

        wrapper.addEventListener('click', (e) => this.deleteItem(e));
    }

    async getData(){
        this.data.ingrediensSearch = this.ingrediensSearch.value;

        const response = await fetch('api-ingredienser.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }

    async deleteItem(e) {
        e.stopPropagation();
        const listItem = e.currentTarget;
        listItem.remove();
    }
}