<?php
class Especificaciones
{
	private $pdo;

	public $id_especificacion;
    public $especificacion;
    public $unidad;
    public $precio;
    public $existencia;
    public $id_producto;


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


	public function getListEspecificaciones($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM especificaciones where id_producto=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getListEspecificacionesIndividual($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM especificaciones where id_especificacion=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
