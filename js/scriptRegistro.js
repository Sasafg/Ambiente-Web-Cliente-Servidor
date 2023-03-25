
//Funcion que procesa el registro confirmada la validacion
function procesaRegistro(validacion){
    if(validacion){

    } else {
        alert("Las contraseñas no coinciden");
    }
    

}

//Funcion que valida que ambas contraseñas sean iguales
function validaContrasena(p1, p2){
    if(p1 != p2){
        return false;
    } else {
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