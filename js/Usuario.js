$(document).ready(function(){
    var funcion='';
    var id_usuario = $('#id_usuario').val();// estamos capturando el valor del id_usuario
   // console.log(id_usuario);
   buscar_usuario(id_usuario);
    function buscar_usuario(dato){
        funcion='buscar_usuario';
        $.post('../controlador/UsuarioController.php',{dato,funcion},(response)=>{
//  se crean los template y se concatenan  
           let nombre ='';
           let apellidos ='';
           let edad ='';
           let dni='';
           let tipo ='';
           let telefono ='';
           let residencia='';
           let  correo='';
           let sexo='';
           let adicional='';
           const usuario = JSON.parse(response); // hace lo contrario del encode, extrae todos los atributos 
            nombre+=`${usuario.nombre}`;
            apellidos+=`${usuario.apellidos}`;
            edad +=`${usuario.edad}`;
            dni+=`${usuario.dni}`;
            tipo+=`${usuario.tipo}`;
            telefono+=`${usuario.telefono}`;
            residencia+=`${usuario.residencia}`;
            correo+=`${usuario.correo}`;
            sexo+=`${usuario.sexo}`;
            adicional+=`${usuario.adicional}`;
            // ahora usamos los selectores para poder pasar a cada uno de los id del html
            $('#nombre_us').html(nombre);
            $('#apellidos_us').html(apellidos);
            $('#edad').html(edad);
            $('#dni_us').html(dni);
            $('#us_tipo').html(tipo);
            $('#telefono_us').html(telefono);
            $('#residencia_us').html(residencia);
            $('#correo_us').html(correo);
            $('#sexo_us').html(sexo);
            $('#adicional_us').html(adicional);


        })//se crea un ajax('url',{},) tipo post requiere la url los datos y la funcion que se va a ejecutar
    }

})//nos permite ejecutar funciones una vez cargada la pagina actual