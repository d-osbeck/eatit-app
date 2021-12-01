/* Go back link */

const goBack = document.getElementById('back-link');

goBack.setAttribute('href', document.referrer);

goBack.onclick = function() {
    history.back();
    return false;
};

/* */