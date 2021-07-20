<?php
class Usuarios
{
	private $pdo;

	public $id_usuario;
    public $nombre_usuario;
    public $apellido_paterno;
    public $apellido_materno;
    public $nombre_favorito;
	public $edad;
	public $fecha_nacimiento;
	public $nivel_estudio;
	public $ocupacion;
	public $antiguedad;
	public $calle;
	public $numero;
	public $colonia;
	public $delegacion;
	public $entidad;
	public $cp;
	public $con_quien_vive;
	public $personas_dependen;
	public $celular_usuario;
	public $telefono_casa;
	public $telefono_trabajo;
	public $correo;
	public $tipo;
	public $fecha_registro;
	public $password;
	public $estatus;

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


	public function Login($id,$password)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("select usuarios.id_usuario, usuarios.nombre_usuario, usuarios.apellido_paterno,
					  usuarios.apellido_materno, usuarios.nombre_favorito, usuarios.edad, usuarios.fecha_nacimiento,
					  usuarios.calle, usuarios.cp, usuarios.celular_usuario, usuarios.telefono_casa,
					  usuarios.telefono_trabajo, usuarios.correo, usuarios.tipo as tipoPrivilegio,
					  usuarios.estatus, inscripciones.id_inscripcion, inscripciones.id_curso as IdCursoInscripcion,
					  inscripciones.fecha as FechaInscripcion,inscripciones.id_user as IdUserInscripcion,
					  cursos_talleres.id_curso as IdCursoTaller, cursos_talleres.nombre_curso,
					  cursos_talleres.generacion, cursos_talleres.fecha_inicio, cursos_talleres.fecha_fin,
					  cursos_talleres.tipo_curso as TipoCursoTalleres, cursos_talleres.estatus as estatusCurso,
					  tipo_entrenamiento.id_tipo_entrenamiento, tipo_entrenamiento.tipo as TipoTipoEnrenamiento,
					  tipo_entrenamiento.subtipo, tipo_entrenamiento.nombre as NombreEntrenamiento,
					  tipo_entrenamiento.subnombre, (Select Count(notificaciones.id_usuario) from notificaciones where usuarios.id_usuario = notificaciones.id_usuario AND notificaciones.estatus !=0) as totalNotificaciones, (Select Count(imo.id_user) from imo where usuarios.id_usuario = imo.imo) as totalEnrolados
					  from usuarios LEFT JOIN inscripciones on usuarios.id_usuario = inscripciones.id_user LEFT join 
					  cursos_talleres on inscripciones.id_curso = cursos_talleres.id_curso LEFT join 
					  tipo_entrenamiento on cursos_talleres.tipo_curso = tipo_entrenamiento.id_tipo_entrenamiento
					  WHERE usuarios.celular_usuario = ? and usuarios.password = ?
					  ORDER by inscripciones.id_inscripcion DESC");

			$stm->execute(array($id,$password));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerUserById($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT *,(Select Count(notificaciones.id_usuario) from notificaciones where usuarios.id_usuario = notificaciones.id_usuario AND notificaciones.estatus !=0) as totalNotificaciones, (Select Count(imo.id_user) from imo where usuarios.id_usuario = imo.imo) as totalEnrolados FROM usuarios WHERE id_usuario = ?");

			$stm->execute(array($id));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function SaveDatosPersonales($nombre_fav,$ed,$fecha_nac,$nivel_est,$ocu,$antiguedad,$con_quien_vi,$personas_depen,$id_usu)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("UPDATE usuarios SET nombre_favorito=?,edad=?,fecha_nacimiento=?,nivel_estudio=?,ocupacion=?,antiguedad=?,con_quien_vive=?,personas_dependen=? WHERE id_usuario=?");

			$stm->execute(array($nombre_fav,$ed,$fecha_nac,$nivel_est,$ocu,$antiguedad,$con_quien_vi,$personas_depen,$id_usu));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function SaveDatosContacto($telCasa,$telTrabajo,$correo,$id_usu)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("UPDATE usuarios SET telefono_casa=?,telefono_trabajo=?,correo=? WHERE id_usuario=?");

			$stm->execute(array($telCasa,$telTrabajo,$correo,$id_usu));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function SaveDatosDireccion($calle,$numero,$colonia,$delegacion,$entidad,$cp,$id_usu)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("UPDATE usuarios SET calle=?,numero=?,colonia=?,delegacion=?,entidad=?,cp=? WHERE id_usuario=?");

			$stm->execute(array($calle,$numero,$colonia,$delegacion,$entidad,$cp,$id_usu));
			return "ok";
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function buscarByNombre($nombre)
	{
		try
		{
			$nombre2 = "%".$nombre."%";  
			$stm = $this->pdo
			          ->prepare("select * from usuarios where nombre_usuario like ?");

			$stm->execute(array($nombre2));
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerEntrenamientosBecas()
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("select * from cursos_talleres left join tipo_entrenamiento on cursos_talleres.tipo_curso = tipo_entrenamiento.subtipo");

			$stm->execute();
			return $stm->fetchAll();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	


}
