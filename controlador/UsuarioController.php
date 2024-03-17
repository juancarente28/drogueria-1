<?php
include_once '../modelo/Usuario.php';
$usuario = new Usuario();
if($_POST['funcion']=='buscar_usuario'){
    $json=array();
$usuario->obtener_datos($_POST['dato']);//metodo invocar usuario, la cual obtendra todos los datos correspondiente a ese ID del usuario
    foreach ($usuario->objetos as $objeto){
        $json[]=array(
           'nombre'=>$objeto->nombre_us,
           'apellidos'=>$objeto->apellidos_us,
           'edad'=>$objeto->edad,
           'dni'=>$objeto->dni_us,
           'tipo'=>$objeto->nombre_tipo,
           'telefono'=>$objeto->telefono_us,
           'residencia'=>$objeto->residencia_us,
           'correo'=>$objeto->correo_us,
           'sexo'=>$objeto->sexo_us,
           'adicional'=>$objeto->adicional_us

        );
    }
    $jsonstring =json_encode($json[0]);//nos devuelve un json codificao, nos devuelve un strin para poderlo usar en nusetro Js
    echo $jsonstring;// se le envia el indice cero xq siempre va haber una sola concidencia, ya que el ID es unico
}
?>