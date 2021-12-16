export default class Opskrifter {
    constructor() {
        this.data = {
            password: "Eatit"
        }


        this.rootElem = document.querySelector('.main');
        this.filter = this.rootElem.querySelector('.main__search');
        this.items = this.rootElem.querySelector('.items__list');

        this.nameSearch = this.filter.querySelector('.nameSearch');

        this.nameSearch.addEventListener('keyup', () => this.renderRecipes());
        window.addEventListener('load', () => this.renderMatch());

    }

    async renderRecipes() {
        const data = await this.getDataRecipes();
        this.render(data);
    }

    async renderMatch(){
        const data = await this.getDataMatch();
        this.render(data);
    }

    render(data){
        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-12');

            col.innerHTML = `
                <a class="d-flex flex-row mt-3 mb-3 text-decoration-none text-body" href="opskrift.php?opskId=${item.opskId}">
                    <div class="col-5">
                        <img src="img/${item.opskBillede}" style="width: 100%" class="opskrift__billede">
                    </div>
                    <div class="col-7 ps-3 d-flex flex-column justify-content-between">
                        <div class="">
                            <h5>${item.opskNavn}</h5>
                            <div class="d-flex flex-wrap">
                                <div class="list__items py-1 px-3 m-1 align-items-center">Banan</div>
                                <div class="list__items py-1 px-3 m-1 align-items-center">Mel</div>
                                <div class="list__items py-1 px-3 m-1 align-items-center">Æg</div>
                            </div>
                        </div>
                        <div class="opskrift__info d-flex">
                            <p class="me-3 text-off-gray">${item.opskTidText}</p>
                            <p class="d-flex text-off-gray"><img src="img/stjerne_gul.svg" style="height: 20px" alt="stjerne" class="me-1">${item.opskRate}/5</p>
                        </div>
                    </div>
                </a>
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getDataMatch(){
        const ingredients = window.localStorage.getItem('ingredients');
        const ingredientJson = (ingredients) ? JSON.parse(ingredients) : [];

        let multipleIngredients = "";
        for(let item of ingredientJson) {
            multipleIngredients += item.id + ","
        }

        multipleIngredients = multipleIngredients.substring(0, multipleIngredients.length - 1);

        this.data.ingredientMatch = multipleIngredients

        const response = await fetch('api-opskrift-match.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }

    async getDataRecipes(){
        this.data.nameSearch = this.nameSearch.value;

        const response = await fetch('api-opskrifter.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}