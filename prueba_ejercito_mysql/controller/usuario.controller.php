<?php
require_once 'model/usuario.php';
require_once 'model/genero.php';

class usuarioController{
    
    private $model;
    
    public function __construct(){
        $this->model  = new usuario();
		$this->modelo = new genero();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
       
    }
    
    public function Crud(){
        $usuario = new usuario();
		$genero  = new genero();
        
        if(isset($_REQUEST['IDUSUARIO'])){
            $usuario = $this->model->Obtener($_REQUEST['IDUSUARIO']);
			//$genero  = $this->modelo->Listar();
        }
        
		$genero  = $this->modelo->Listar();
        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        
    }
    
    public function Guardar(){
        $usuario = new usuario();
        
        $usuario->IDUSUARIO = $_REQUEST['IDUSUARIO'];
        $usuario->NOMBREUSUARIO = $_REQUEST['NOMBREUSUARIO'];
        $usuario->APELLIDOUSUARIO = $_REQUEST['APELLIDOUSUARIO'];
		$usuario->RUTUSUARIO = $_REQUEST['RUTUSUARIO'];
        $usuario->GENEROUSUARIO = $_REQUEST['GENEROUSUARIO'];  
		$usuario->MAILUSUARIO = $_REQUEST['MAILUSUARIO'];  
		$usuario->DIRECCIONUSUARIO = $_REQUEST['DIRECCIONUSUARIO'];  
        $usuario->ESTADOUSUARIO = 'Activo';   
        $usuario->MOSTRARUSUARIO = 'Si';		
      

        $usuario->IDUSUARIO > 0 
            ? $this->model->Actualizar($usuario)
            : $this->model->Registrar($usuario);
        
        header('Location: index.php');
    }
    
	public function Ocultar(){
		$usuario = new usuario();
				
	    $usuario->IDUSUARIO = $_REQUEST['IDUSUARIO'];	
		$usuario->MOSTRARUSUARIO = 'No';  
				
        $this->model->Ocultar($usuario);
        header('Location: index.php');
    }
	
    public function Eliminar(){
		$usuario = new usuario();
				
	    $usuario->IDUSUARIO = $_REQUEST['IDUSUARIO'];	
		$usuario->ESTADOUSUARIO = 'Inactivo';  
				
        $this->model->Eliminar($usuario);
        header('Location: index.php');
    }
}