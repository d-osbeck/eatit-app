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

/* Login skjul kodeord */
const showHiddenInput = (inputPassword, inputIcon) => {
    const input = document.getElementById(inputPassword),
        iconEye = document.getElementById(inputIcon)

    iconEye.addEventListener('click', () => {
        if(input.type === 'password'){
            input.type = 'text'

            iconEye.classList.add('fa-eye-slash')
        }else{
            input.type = 'password'

            iconEye.classList.remove('fa-eye-slash')
        }
    })
}

showHiddenInput('password-input','login-hide');