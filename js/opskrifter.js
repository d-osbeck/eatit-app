export default class Opskrifter {
    constructor() {
        this.data = {
            password: "Eatit"
        }


        this.rootElem = document.querySelector('.main');
        this.filter = this.rootElem.querySelector('.main__search');
        this.items = this.rootElem.querySelector('.items__list');

        this.nameSearch = this.filter.querySelector('.nameSearch');

        this.nameSearch.addEventListener('input', () => this.render());
        window.addEventListener('load', () => this.render());
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-12');

            col.innerHTML = `
                <div class="d-flex flex-row mt-3 mb-3">
                    <a class="col-5 text-decoration-none text-black" href="opskrift.php?opskId=${item.opskId}">
                        <img src="img/${item.opskBillede}" style="width: 100%" class="rounded-3">
                    </a>
                    <div class="col-7 ps-3 d-flex flex-column justify-content-between">
                        <div class="">
                            <h5 class="">${item.opskNavn}</h5>
                            <div class="">"Her skal ingredienser være"</div>
                        </div>
                        <div class="d-flex">
                            <p class="me-2">${item.opskTidText}</p>
                            <p class="d-flex"><img src="img/stjerne_gul.svg" style="height: 20px" alt="stjerne">${item.opskRate}/5</p>
                        </div>
                    </div>
                </div>
            `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;

        const response = await fetch('api-opskrifter.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }
}