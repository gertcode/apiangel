<?php
class Becas
{
	private $pdo;

    public $id;
    public $folio;
    public $fecha_entrega;
    public $fecha_fin;
    public $vigencia;
    public $tipo_entrenamiento;
    public $porcentaje;
    public $costo_entrenamiento;
    public $motivo_beca;
    public $participante_id;
    public $entrenamiento_referencia;
    public $estatus;
    public $beneficiario;
    public $entrenamiento_usara;


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
    
    public function obtenerBecas($inicio,$fin)
	{
        //$query = "SELECT * FROM Becas LEFT JOIN Usuarios ON Becas.participante_id = Usuarios.id_usuario left join Tipo_Entrenamiento on Becas.tipo_entrenamiento = Tipo_Entrenamiento.subtipo LIMIT ?,?";
		try
		{
			/*$stm = $this->pdo
			          ->prepare($query);

			$stm->execute(array((int) $inicio, (int) $fin));
            return $stm->fetchAll();*/

            $noticias = $this->pdo->query("SELECT *,(select Usuarios.nombre_usuario from Usuarios where Usuarios.id_usuario = Becas.id_user_agrego) as userOffice FROM Becas LEFT JOIN Usuarios ON Becas.participante_id = Usuarios.id_usuario left join Tipo_Entrenamiento on Becas.tipo_entrenamiento = Tipo_Entrenamiento.subtipo");
            //$noticias->bindValue(':inicio', 0, PDO::PARAM_INT);
            //$noticias->bindValue(':fin', 2, PDO::PARAM_INT);
            $noticias->bindValue(1, 5, PDO::PARAM_INT);
            $noticias->execute();
            return $noticias->fetchall(); 
            

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    public function AgregarBeca($id,$folio,$fecha_entrega,$fecha_fin,$vigencia,$tipo_entrenamiento,$porcentaje,$costo,$motivo,$participante_id,$entrenamiento_referencia,$estatus,$beneficiario,$entrenamiento_usara,$id_sesion)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO Usuarios(nombre_usuario,apellido_paterno,apellido_materno,nombre_favorito,celular_usuario,telefono_casa,telefono_trabajo,password) VALUES(?,?,?,?,?,?,?,?)");

			$stm->execute(array($nombre,$ap,$am,$fav,$celular,$casa,$oficina,$pass));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


}
