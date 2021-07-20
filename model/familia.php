<?php
class Familia
{
	private $pdo;

	public $id_familia;
    public $nombre;



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


	public function getListFamilia()
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM familia");


			$stm->execute();
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
