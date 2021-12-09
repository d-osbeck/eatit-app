export default class Ingredienser {
    constructor() {
        this.data = {
            password: "Eatit"
        }

        this.rootElem = document.querySelector('.main__content');
        this.searchContainer = document.querySelector('.main__search');
        this.matchList = document.querySelector('#match-list');
        this.items = this.rootElem.querySelector('.items__list');
        this.ingrediensSearch = this.searchContainer.querySelector('.search-ingredienser-input');
        this.listItemElement = JSON.parse(window.localStorage.getItem('ingredients'));
        if(this.listItemElement === null){
            this.listItemElement = [];
        }

        if(this.listItemElement.length > 0) {
            this.loadFromLocalStorage();
        }

        this.ingrediensSearch.addEventListener('input', () => this.searchIngredienser());
    }

    async searchIngredienser(){
        const data = await this.getData();

            const matchWrapper = document.createElement('div');

            if (this.ingrediensSearch.value.length > 0) {
                for(const item of data.slice(0,3)) {
                    const match = document.createElement('div');
                    match.classList.add('input-field', 'mb-1', 'd-flex', 'justify-content-between', 'ingredients__suggestion');
                    match.dataset.id = item.ingrId;

                    match.innerHTML = `
                        <p class="fw-normal" data-id="${item.ingrId}">${item.ingrNavn}</p>
                        <i class="fas fa-plus"></i>
                    `;

                    match.addEventListener('click', () => this.save(match));

                    matchWrapper.appendChild(match);
                }
        this.matchList.innerHTML = '';
        this.matchList.appendChild(matchWrapper);
    } else {
        this.matchList.innerHTML = '';
    }
}

    async render(){
        const ingredients = window.localStorage.getItem('ingredients');
        const ingredientJson = (ingredients) ? JSON.parse(ingredients) : [];

        const wrapper = document.createElement('div');
        wrapper.classList.add('items__wrapper', 'd-flex', 'flex-wrap');

        for(const item of ingredientJson){
            wrapper.innerHTML = `
            <div class="list__item py-1 px-3 m-1 d-flex align-items-center" data-id="${item.id}">
                <p data-id="${item.id}">${item.name}</p>
                <i class="fas fa-times ms-1" data-id="${item.id}"></i>
            </div>
            `;
            wrapper.dataset.id = item.id;
        }

        this.items.appendChild(wrapper);

        window.localStorage.setItem('ingredients', JSON.stringify(ingredientJson));

        wrapper.addEventListener('click', (e) => this.deleteItem(e));

        this.updateItems(this.listItem);
    }

    save(ingredientMatch){
        const ingredients = window.localStorage.getItem('ingredients');
        const ingredientsJson = (ingredients) ? JSON.parse(ingredients) : [];

        const ingredientMatchId = ingredientMatch.dataset.id;
        const ingredientMatchName = ingredientMatch.textContent.trim();

        ingredientsJson.push({
            id: ingredientMatchId,
            name: ingredientMatchName,
        });

        window.localStorage.setItem('ingredients', JSON.stringify(ingredientsJson));

        this.render();
    }

    async getData(){
        this.data.ingrediensSearch = this.ingrediensSearch.value;

        const response = await fetch('api-ingredienser.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }

    deleteItem(e) {
        e.stopPropagation();
        const listItem = e.currentTarget;

        const ingredientMatchId = e.target.getAttribute('data-id');
        console.log(ingredientMatchId)

        const ingredients = window.localStorage.getItem('ingredients');
        const ingredientsJson = (ingredients) ? JSON.parse(ingredients) : [];

        for (const ingredient of ingredientsJson) {
            if(parseInt(ingredient.id) === parseInt(ingredientMatchId)) {
                const index = ingredientsJson.indexOf(ingredient);
                ingredientsJson.splice(index, 1);
            }
        }

        window.localStorage.setItem('ingredients', JSON.stringify(ingredientsJson));

        listItem.remove();
        this.updateItems(this.listItem);
        }

    updateItems() {

        this.listItem = [];
        this.items.querySelectorAll('.list__item').forEach((list__item) => {
            this.listItem.push(list__item.outerHTML);
            console.log(list__item);
        });

        window.localStorage.setItem('ingredients', JSON.stringify(this.listItem));
    }

    loadFromLocalStorage(){
        let listItems = '';
        this.listItemElement.forEach(item => listItems += item);
        this.items.innerHTML = listItems;
        this.items.querySelectorAll('.list__item').forEach(list__item => {
            list__item.addEventListener('click', (e) => this.deleteItem(e));
        })
    }

}