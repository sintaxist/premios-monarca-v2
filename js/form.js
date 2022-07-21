let button = document.getElementById('button-form');

let form = document.getElementById('sib-form');

let message = document.getElementById('success-message');

$('.radio-option').click(function () {
    if (this.classList.contains('option-1')) {
        $('.asistir').css('display', 'block');
        $('.no-asistir').css('display', 'none');
    } else {
        $('.asistir').css('display', 'none')
        $('.no-asistir').css('display', 'block')
    }
})

button.addEventListener('click', function (e) {

    // e.preventDefault();

    function checkModal() {
        if (message.classList.contains('sib-form-message-panel--active')) {
            $('#modal-form').fadeIn();
            $('.overlay-white').fadeIn();

            $('.overlay').on('click', function () {
                $('#modal-form').fadeOut();
            });
            $('.close').on('click', function () {
                $('#modal-form').fadeOut();
            });
        } else {
            console.log('no-hola')
            setTimeout(checkModal, 1000);
        }
    }

    setTimeout(checkModal, 1000);
})

window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
window.LOCALE = 'en';
window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Los datos que ingresaste no son validos porfavor vuelvelo a intentar";

window.REQUIRED_ERROR_MESSAGE = "Este campo es obligatorio. ";

window.GENERIC_INVALID_MESSAGE = "Los datos que ingresaste no son validos porfavor vuelvelo a intentar";

window.translation = {
    common: {
        selectedList: '{quantity} list selected',
        selectedLists: '{quantity} lists selected'
    }
};

var AUTOHIDE = Boolean(1);

let button2 = document.getElementById('aparecer-form');

function validamail ( email ) {
    let RegExPattern = /(^[0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
   return RegExPattern.test( email );
}

// button2.addEventListener('click', function(e){

//     let firstInput = document.getElementById('mail-validar');

//     let container = document.getElementById('input-container');

//     if (!validamail(firstInput.value)) {

//         $('#input-container p').remove();

//         let createError = document.createElement('p');
//         createError.classList.add('error');
//         createError.innerText = 'Porfavor Ingresa un mail valido';
//         container.appendChild(createError);
//         container.classList.add('input-error');

//         firstInput.addEventListener('focus', function(){
//             container.classList.remove('input-error');
//             createError.classList.remove('error');
//         })

//     } else {

//         let correo = firstInput.value;

//         let result = correo.toLowerCase();

//         const validarExistencia = ArrayLower.includes(result)

//         if(validarExistencia == false){

//             $('#input-container p').remove();

//             let createError = document.createElement('p');
//             createError.classList.add('error', 'errorExist');
//             createError.innerText = 'Lo sentimos no estas en la lista de invitados';
//             container.appendChild(createError);
//             container.classList.add('input-error');

//         }else{

//             e.preventDefault();

//             let divForm = document.getElementById('sib-form-container');

//             let inputMail = document.getElementById('EMAIL');

//             let father = document.getElementById('input-validate');
//             father.style.display = 'none'

//             divForm.classList.add('mostrar');

//             inputMail.value = firstInput.value;
//         }
//     }
// })