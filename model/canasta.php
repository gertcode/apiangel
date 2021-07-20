<?php
class Canasta
{
	private $pdo;

	public $id_canasta;
    public $id_pedido;
    public $id_usuario;
    public $id_producto;
    public $cantidad;


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


	public function getCanasta($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * from canasta inner join especificaciones on canasta.id_producto = especificaciones.id_especificacion where id_pedido=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function addItemCanasta(Canasta $data)
	{
		try 
		{
		$sql = "INSERT INTO canasta(id_pedido,id_usuario,id_producto,cantidad) 
		        VALUES (?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_pedido,
                    $data->id_usuario,
                    $data->id_producto,
                    $data->cantidad
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}
