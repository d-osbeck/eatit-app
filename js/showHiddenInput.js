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
    });
}

showHiddenInput('password-input','login-hide');