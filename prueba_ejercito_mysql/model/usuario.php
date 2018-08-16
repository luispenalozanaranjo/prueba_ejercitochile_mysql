<?php
class usuario
{

	private $pdo;
    
    public $IDUSUARIO;
    public $NOMBREUSUARIO;
    public $APELLIDOUSUARIO;  
    public $RUTUSUARIO;
    public $GENEROUSUARIO;
	public $MAILUSUARIO;
	public $DIRECCIONUSUARIO;
	public $ESTADOUSUARIO;
	public $MOSTRARUSUARIO;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM USUARIO WHERE MOSTRARUSUARIO NOT IN ('No') ORDER BY IDUSUARIO DESC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($IDUSUARIO)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM USUARIO WHERE IDUSUARIO = ?");
			          

			$stm->execute(array($IDUSUARIO));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ocultar($data)
	{
     try 
		{
			$sql = "UPDATE USUARIO SET 
                    MOSTRARUSUARIO        = ?	
				    WHERE IDUSUARIO = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->MOSTRARUSUARIO,					
                        $data->IDUSUARIO
					)
				);
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Eliminar($data)
	{
     try 
		{
			$sql = "UPDATE USUARIO SET 
                    ESTADOUSUARIO        = ?
						
				    WHERE IDUSUARIO = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->ESTADOUSUARIO,					
                        $data->IDUSUARIO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE USUARIO SET 
						NOMBREUSUARIO    = ?,
						APELLIDOUSUARIO  = ?, 
						RUTUSUARIO       = ?,
                        GENEROUSUARIO    = ?,
						MAILUSUARIO      = ?,
						DIRECCIONUSUARIO = ?,
                        ESTADOUSUARIO    = ?,
						MOSTRARUSUARIO   = ?
						
				    WHERE IDUSUARIO = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->NOMBREUSUARIO,                        
                        $data->APELLIDOUSUARIO,
                         $data->RUTUSUARIO,
                        $data->GENEROUSUARIO,
						$data->MAILUSUARIO,
						$data->DIRECCIONUSUARIO,
                        $data->ESTADOUSUARIO,	
						$data->MOSTRARUSUARIO,						
                        $data->IDUSUARIO
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(usuario $data)
	{
		var_dump($data);
		try 
		{
		$sql = "INSERT INTO USUARIO (NOMBREUSUARIO,APELLIDOUSUARIO,RUTUSUARIO,GENEROUSUARIO,MAILUSUARIO,DIRECCIONUSUARIO,ESTADOUSUARIO,MOSTRARUSUARIO) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->NOMBREUSUARIO,
                    $data->APELLIDOUSUARIO, 
                    $data->RUTUSUARIO, 
                    $data->GENEROUSUARIO,
                    $data->MAILUSUARIO,
					$data->DIRECCIONUSUARIO,
                    $data->ESTADOUSUARIO,	
				    $data->MOSTRARUSUARIO				 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}