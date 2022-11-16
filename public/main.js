var close = document.querySelector('.close');
var modal = document.querySelector('.modal-section');
var signUp = document.getElementById('signUp');
var signIn = document.getElementById('signIn');
var signUp2 = document.getElementById('signUp2');
var signIn2 = document.getElementById('signIn2');
var signUp3 = document.querySelector('.signUp3');
var signIn3 = document.querySelector('.signIn3');


close.onclick = function () {
    modal.classList.add('form_hiden');
}

signIn2.onclick = function () {
    modal.classList.remove('form_hiden');
    signIn.classList.remove('form_hiden');
    signUp.classList.add('form_hiden');
}

signUp2.onclick = function () {
    modal.classList.remove('form_hiden');
    signUp.classList.remove('form_hiden');
    signIn.classList.add('form_hiden');
}

signIn3.onclick = function () {
    modal.classList.remove('form_hiden');
    signIn.classList.remove('form_hiden');
    signUp.classList.add('form_hiden');
}

signUp3.onclick = function () {
    modal.classList.remove('form_hiden');
    signUp.classList.remove('form_hiden');
    signIn.classList.add('form_hiden');
}




