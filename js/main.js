/* Go back knap */

const goBack = document.querySelector('#back-link');

goBack.setAttribute('href', document.referrer);

goBack.onclick = function() {
    history.back();
    return false;
};

/* Skift category knap farve */

let categoryBtn = document.querySelectorAll('.category-icon');

    for(const button of categoryBtn){
        button.addEventListener('click', () => {
            button.classList.toggle('category-icon-toggle');
    });
}