

//Muestra administracion por medio de Ajax
$(document).ready(function() {
    
    $("#login").submit(function(){

        var datosIngreso = {usernameIng: $("#usernameIng").val(),
                            passIng: $("#passIng").val()}
        $.post("../server/recibeAdmin.php", datosIngreso, procesamientoIngreso);

        return false;
    });

    function procesamientoIngreso(tipoUsuario){
        if(tipoUsuario == "Admin"){
            $("#administraciones").html("<p>Administrador</p>");
        } else {
            $("#administraciones").html("<p>Usuario</p>");
        }
    }
}
);

