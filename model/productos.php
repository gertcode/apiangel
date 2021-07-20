<?php
class Productos
{
	private $pdo;

	public $id_producto;
    public $nombre;
    public $id_familia;



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


	public function getListProductos($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos where id_familia=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
