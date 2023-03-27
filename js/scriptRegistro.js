
//Funcion que procesa el registro confirmada la validacion
function procesaRegistro(){
    validacion = getCookie('validacion').value;
    var p1 = document.getElementById('password').value;
    var p2 = document.getElementById('password2').value;

    if(validacion){
        validaContrasena(p1, p2);
    } else {
        alert("Invalid passwords");
    }
}

//Funcion que valida que ambas contraseñas sean iguales
function validaContrasena(p1, p2){
    if(p1 != p2){
        setCookie('validacion', false, 1);
        return false;
    } else {
        setCookie('validacion', true, 1);
        return true;
    }
}

function noespacios(username,value) {
    var er = new RegExp(/\s/);
    var web = document.getElementById('username').value;
    if(er.test(web)){
        alert('No se permiten espacios');
        return false;
    }else {
        setCookie(username,value,1);
        return true;
    }
        
}
