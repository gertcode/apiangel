<?php
class Servicios
{
	private $pdo;
    
    public $ID_SERVICIO;
    public $FECHA_INICIO;
    public $FECHA_FIN;
    public $ESTATUS;
    public $ID_PAQUETE;
    public $ID_USUARIO;
    public $MB_CONSUMIDOS;
    public $PAGO_ADELANTADO;


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

	public function ListarServiciosUsuario($id)
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT servicio.FECHA_INICIO,DATE_FORMAT(servicio.FECHA_FIN,'%d/%m/%Y') as FECHA_FIN,productos.ID_PRODUCTO,productos.NOMBRE_PRODUCTO,productos.PRECIO_PRODUCTO,productos.dias,productos.mb,productos.ANCHO_BANDA,IF(DATE_FORMAT(NOW(),'%Y-%m-%d 00:00:00')<=servicio.FECHA_FIN,'1','0') as VIGENCIA FROM servicio left join productos on servicio.ID_PAQUETE = productos.ID_PRODUCTO where ID_USUARIO=? and servicio.ESTATUS=1");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function ListarPaquetesDisponibles()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("select * from productos");
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function cambiarPaqueteCliente($id,$producto)
	{
		try
		{
			$stm = $this->pdo->prepare("INSERT INTO preselecion(ID_USUARIO,ID_PRODUCTO) values(?,?)");

			$stm->execute(array($id,$producto));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



}