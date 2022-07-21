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