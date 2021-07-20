<?php
class Objetivos
{
	private $pdo;

	public $id_objetivo;
    public $id_usuario;
    public $objetivo1;
    public $objetivo2;
    public $objetivo3;


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


	public function guardarObjetivos($id,$obj1,$obj2,$obj3)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO Objetivos_Usuarios() values(null,?,?,?)");

			$stm->execute(array($id,$obj1,$obj2,$obj3));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



}
