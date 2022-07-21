let button2 = document.getElementById('verificar-form');

function validamail(email) {
    let RegExPattern = /(^[0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
    return RegExPattern.test(email);
}

button2.addEventListener('click', function (e) {

    e.preventDefault();

    let firstInput = document.getElementById('mail-validar');

    let container = document.getElementById('input-container');

    if (!validamail(firstInput.value)) {


        $('#input-container p').remove();

        let createError = document.createElement('p');
        createError.classList.add('error');
        createError.innerText = 'Porfavor Ingresa un mail valido';
        container.appendChild(createError);
        container.classList.add('input-error');

        firstInput.addEventListener('focus', function () {
            container.classList.remove('input-error');
            createError.classList.remove('error');
        })

        return false

    } else {

        let correo = firstInput.value;

        let result = correo.toLowerCase();

        const validarExistencia = ArrayLower.includes(result)

        if (validarExistencia == false) {

            $('#input-container p').remove();

            let createError = document.createElement('p');
            createError.classList.add('error', 'errorExist');
            createError.innerText = 'Lo sentimos no estas en la lista de invitados';
            container.appendChild(createError);
            container.classList.add('input-error');

            firstInput.addEventListener('focus', function () {
                container.classList.remove('input-error');
                createError.classList.remove('error');
            })

            return false

        } else {

            let father = document.getElementById('input-validate');

            father.submit()

        }
    }
})