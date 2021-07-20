<?php
class Pedidos
{
	private $pdo;

	public $id_pedido;
    public $fecha;
    public $id_usuario;
    public $status;



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


	public function getPedido($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM pedidos where id_pedido=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getUltimoPedido($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * from pedidos where id_usuario=? ORDER BY id_pedido DESC LIMIT 0,1");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function RegistrarPedido(Pedidos $data)
	{
		try 
		{
		$sql = "INSERT INTO pedidos(fecha,id_usuario,status) 
		        VALUES (Now(),?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_usuario,
                    $data->status
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function CancelarPedido($id)
	{
		try 
		{
			$sql = "UPDATE pedidos SET status = 'Cancelado' WHERE id_pedido = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array($id)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function EnviarPedido($id)
	{
		try 
		{
			$sql = "UPDATE pedidos SET status = 'Enviado' WHERE id_pedido = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array($id)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function getPedidosCliente($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM pedidos where id_usuario=?");


			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



}
