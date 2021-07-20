<?php
class Enrolados
{
	private $pdo;

	public $id_enrolamiento;
    public $id_imo;
    public $id_user;
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


	public function obtenerEnrolamientosUser($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM imo left join usuarios on imo.id_user = usuarios.id_usuario where imo.imo = ?");

			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerGeneracionUser($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("select * from inscripciones LEFT JOIN cursos_talleres on inscripciones.id_curso = cursos_talleres.id_curso where inscripciones.id_user = ?");

			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerEntrenamoentosCorrespondientes($gen)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("select * from cursos_talleres where cursos_talleres.generacion > ? and cursos_talleres.tipo_curso = 1 LIMIT 0,3");

			$stm->execute(array($gen));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function InsertarEnrolado($nombre,$ap,$am,$fav,$celular,$casa,$oficina,$pass)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO usuarios(nombre_usuario,apellido_paterno,apellido_materno,nombre_favorito,celular_usuario,telefono_casa,telefono_trabajo,password) VALUES(?,?,?,?,?,?,?,?)");

			$stm->execute(array($nombre,$ap,$am,$fav,$celular,$casa,$oficina,$pass));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function obtenerUserByCelular($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE celular_usuario = ?");

			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function AsociarImo($imo,$user)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO imo(imo,id_user) VALUES(?,?)");

			$stm->execute(array($imo,$user));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function InscribirEntrenamiento($id_user,$id_curso)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO inscripciones(id_user,id_curso) VALUES(?,?)");

			$stm->execute(array($id_user,$id_curso));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}





}
