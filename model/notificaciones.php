<?php
class Notificaciones
{
	private $pdo;
    
    public $id_notificacion;
    public $titulo;
    public $notificacion;
    public $id_usuario;
    public $estatus;
    public $fecha;

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

	public function ObtenerNotificacionesById($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("select * from notificaciones where id_usuario = ? ORDER by fecha DESC");
			$stm->execute(array($id));

			return $stm->fetchAll();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ActualizarEstatusNotificacion($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("UPDATE notificaciones SET estatus=0 WHERE id_notificacion=?");

			$stm->execute(array($id));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	





}