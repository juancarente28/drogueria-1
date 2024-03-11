<?php // se crean variables para la conexion PDO(PHP Data Objects, Objetos de Datos de PHP, una extension para acceder a BD con un controlador especifico)
class Conexion{
    private $servidor = "localhost";
    private $db = "farmaciasistema"; // nombre de la BD a la cual se va a conectar
    private $puerto = "3306";// aca depende como tengas configurado el puerto del mysql
    private $charset = "utf8"; //Tipo de codificacion
    private $usuario = "root";//por defecto es root
    private $contrasena ="a12345B";// si tienes configurado tu bd con contrasena debes colocarla tal cual de lo contrario no podra acceder a la bd
    public $pdo = null; //publico xq es la que va a retornar al momento de ser instanciada(Es el destino de las solicitudes de conexión (inicios de sesión) de aplicaciones)
    private $atributos =[PDO::ATTR_CASE=>PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    function __construct(){ // se crea el metodo constructor y dentro de este se retorna el PDO
            $this->pdo= new PDO("mysql:dbname={$this->db}; host={$this->servidor};port={$this->puerto};charset={$this->charset};",$this->usuario,$this->contrasena,$this->atributos);
    

    }

}
?>