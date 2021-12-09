const favorit = document.querySelector("#favorit");

function swapImage(){
    if (favorit.src.endsWith('img/hjerte.svg') == true)
    {
        favorit.src = "img/hjertered.svg";
    }
    else if (favorit.src.endsWith('img/hjertered.svg') == true)
    {
        favorit.src = "img/hjerte.svg";
    }
}

favorit.addEventListener('click', () => {
   swapImage()
})