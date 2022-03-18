<?php

class Alumno{

    //Atributos de clase
    private $id;
    private $nombre;
    private $apellidos;
    private $estado;
    //Constructor.
    function __construct($id, $nombre,$apellidos, $estado)
	{
		$this->setId($id);
		$this->setNombre($nombre);
		$this->setApellidos($apellidos);
		$this->setEstado($estado);		
	}
    //Getters y Setters.
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
 
	public function getNombre(){
		return $this->nombre;
	}
 
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
 
	public function getApellidos(){
		return $this->apellidos;
	}
 
	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
 
	public function getEstado(){
 
		return $this->estado;
	}
 
	public function setEstado($estado){
		
		if (strcmp($estado, 'on')==0) {
			$this->estado=1;
		} elseif(strcmp($estado, '1')==0) {
			$this->estado='checked';
		}elseif (strcmp($estado, '0')==0) {
			$this->estado='of';
		}else {
			$this->estado=0;
		}
 
	} //Cierra setEstado.

    public static function save($alumno){
        $conn=Connection::getConnect();

        $insert=$conn->prepare("INSERT INTO public.alumnos VALUES (default,:nombre,:apellidos,:estado)");
        $insert->bindValue(':nombre',$alumno->getNombre());
        $insert->bindValue(':apellidos',$alumno->getApellidos());
        $insert->bindValue(':estado',$alumno->getEstado());

        $insert->execute();
    } 

}//Cierra la clase
