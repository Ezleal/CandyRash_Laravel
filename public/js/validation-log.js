
window.onload = function() {

    var formulario = document.querySelector('#login');
    formulario.onsubmit = function(event) {

        for(var elemento of formulario.elements) {

            if ( elemento.name == 'email' || elemento.name == 'password') {

                if (elemento.value == '') {

                    var strong = elemento.parentElement.querySelector('span.invalid-feedback strong');
                    elemento.classList.toggle('is-invalid');
                    strong.innerHTML = 'Ey! El campo no puede estar vacio';
                    event.preventDefault();
                } else{
                    elemento.classList.toggle('is-invalid');
                }
            }
        }
    }








}
