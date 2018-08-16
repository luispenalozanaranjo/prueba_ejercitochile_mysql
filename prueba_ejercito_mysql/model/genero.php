<?php
class genero
{

	private $pdo;
    
    public $IDGENERO;
    public $NOMBREGENERO;

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

			$stm = $this->pdo->prepare("SELECT * FROM GENERO");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}