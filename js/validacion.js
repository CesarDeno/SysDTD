function validarFormulario() {
    // Obtener los valores de los campos de entrada
    var email = document.getElementById("emailuser").value;
    var password = document.getElementById("pass").value;

    // Validar el correo electrónico
    var emailRegex = /^[\w-]+(\.[\w-]+)*@alerce\.edu\.mx$/;
    if (!emailRegex.test(email)) {
        alert("Ingrese un correo institucional");
        return false;
    }

    // Si la validación es exitosa, puedes enviar el formulario al servidor
    return true;
}