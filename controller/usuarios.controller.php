<?php

require_once 'model/usuarios.php';
require_once 'model/objetivos.php';
require_once 'model/enrolamientos.php';
require_once 'model/notificaciones.php';
require_once 'model/becas.php';


class UsuariosController{


    private $modelUsuario;
    private $modelEnrolamientos;
    private $modelNotificaciones;
    private $modelBecas;

    public function __CONSTRUCT(){

        $this->modelUsuario = new Usuarios();
        $this->modelEnrolamientos = new Enrolados();
        $this->modelNotificaciones = new Notificaciones();
        $this->modelBecas = new Becas();
    }

    public function Index(){

    }

    public function obtenerDatosUsuario(){

        $userData = $this->modelUsuario->obtenerUserById($_REQUEST["id_usuario"]);

         
        if (count($userData)>0) {

            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"ok","userData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","userData":'.json_encode($userData).'}';
        }

    }

    public function GuardarDatosPersonales(){

        $usuario = $this->modelUsuario->SaveDatosPersonales($_REQUEST["nombre_favorito"],$_REQUEST["edad"],$_REQUEST["fecha_nacimiento"],$_REQUEST["nivel_estudio"],$_REQUEST["ocupacion"],$_REQUEST["antiguedad"],$_REQUEST["con_quien_vive"],$_REQUEST["personas_dependen"],$_REQUEST["id_usuario"]);
        if ($usuario=="ok") {
            $userData = $this->modelUsuario->obtenerUserById($_REQUEST["id_usuario"]);
            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"OK","UserData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"Error","UserData":'.json_encode($userData).'}';
        }

    }

    public function GuardarDatosContacto(){

        $usuario = $this->modelUsuario->SaveDatosContacto($_REQUEST["telefono_casa"],$_REQUEST["telefono_trabajo"],$_REQUEST["correo"],$_REQUEST["id_usuario"]);
        if ($usuario=="ok") {
            $userData = $this->modelUsuario->obtenerUserById($_REQUEST["id_usuario"]);
            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"OK","UserData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"Error","UserData":'.json_encode($userData).'}';
        }

    }

    public function GuardarDatosDireccion(){

        $usuario = $this->modelUsuario->SaveDatosDireccion($_REQUEST["calle"],$_REQUEST["numero"],$_REQUEST["colonia"],$_REQUEST["delegacion"],$_REQUEST["entidad"],$_REQUEST["cp"],$_REQUEST["id_usuario"]);
        if ($usuario=="ok") {
            $userData = $this->modelUsuario->obtenerUserById($_REQUEST["id_usuario"]);
            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"OK","UserData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"Error","UserData":'.json_encode($userData).'}';
        }

    }

    public function ObtenerEnrolamientosUser(){

        $userData = $this->modelEnrolamientos->obtenerEnrolamientosUser($_REQUEST["id_usuario"]);

         
        if (count($userData)>0) {

            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"ok","userData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","userData":'.json_encode($userData).'}';
        }

    }

    public function obtenerEntrenamientos()
    {
        //$id_user = $_REQUEST["id_usuario"];
        $userDataGeneracion = $this->modelEnrolamientos->obtenerGeneracionUser($_REQUEST["id_usuario"]);

        if(count($userDataGeneracion)>0)
        {
            $generacion = $userDataGeneracion[0];
            //echo $generacion["generacion"];
            $entrenamientosData = $this->modelEnrolamientos->obtenerEntrenamoentosCorrespondientes($generacion["generacion"]);

            if (count($entrenamientosData)>0) {

                echo '{"status":"200","size":"'.count($entrenamientosData).'","statusQuery":"ok","userData":'.json_encode($entrenamientosData).'}';
            }
            else
            {
                echo '{"status":"200","size":"0","statusQuery":"No Data","userData":'.json_encode($entrenamientosData).'}';
            }
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"Sin Asignar User","userData":'.json_encode($userDataGeneracion).'}';
        }

        
        

    }


    public function InsertarEnrolado(){

        $nombre = $_REQUEST["nombre"];
        $ap = $_REQUEST["ap"];
        $am = $_REQUEST["am"];
        $fav = $_REQUEST["fav"];
        $celular = $_REQUEST["celular"];
        $casa = $_REQUEST["casa"];
        $trabajo = $_REQUEST["trabajo"];
        $password = rand(0,9)."".rand(0,9)."".rand(0,9)."".rand(0,9);
        $id_imo = $_REQUEST["id_imo"];
        $entrenamiento = $_REQUEST["entrenamiento"];


        $usuario = $this->modelEnrolamientos->obtenerUserByCelular($celular);

        if(count($usuario)==0)
        {

            $usuarioEstatus = $this->modelEnrolamientos->InsertarEnrolado($nombre,$ap,$am,$fav,$celular,$casa,$trabajo,$password);

            if($usuarioEstatus=="ok")
            {
                $usuario = $this->modelEnrolamientos->obtenerUserByCelular($celular);

                $userData = $usuario[0];
                $usuarioEstatusEnr = $this->modelEnrolamientos->AsociarImo($id_imo,$userData["id_usuario"]);

                if($usuarioEstatusEnr=="ok")
                {
                    $inscripcion = $this->modelEnrolamientos->InscribirEntrenamiento($userData["id_usuario"],$entrenamiento);

                    if($inscripcion=="ok")
                    {
                        echo '{"status":"200","existeUsuario":"No","estatusInsercion":"ok","estatusAsociarImo":"ok","estatusIncripcion":"ok"}';
                    }
                    else
                    {
                        echo '{"status":"200","existeUsuario":"No","estatusInsercion":"ok","estatusAsociarImo":"ok","estatusIncripcion":"No"}';
                    }

                }
                else
                {
                    echo '{"status":"200","existeUsuario":"No","estatusInsercion":"ok","estatusAsociarImo":"No","estatusIncripcion":"No"}';
                }
            }
            else
            {
                echo '{"status":"200","existeUsuario":"No","estatusInsercion":"ok","estatusAsociarImo":"No","estatusIncripcion":"No"}';
            }
        }
        else
        {
            echo '{"status":"200","existeUsuario":"Si","estatusInsercion":"No","estatusAsociarImo":"No","estatusIncripcion":"No"}';
        }
        

    }

    public function obtenerNotificaciones(){

        $notificacionesData = $this->modelNotificaciones->ObtenerNotificacionesById($_REQUEST["id_usuario"]);         
        if (count($notificacionesData)>0) {

            echo '{"status":"200","size":"'.count($notificacionesData).'","statusQuery":"ok","notificacionesData":'.json_encode($notificacionesData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","notificacionesData":'.json_encode($notificacionesData).'}';
        }
    }

    public function actualizarEstatusNotificacion(){

        //echo "Actualización";

        $notificacionesData = $this->modelNotificaciones->ActualizarEstatusNotificacion($_REQUEST["id_notificacion"]);         
        if ($notificacionesData=="ok") {

            echo '{"status":"200","statusQuery":"'.$notificacionesData.'"}';
        }
        else
        {
            echo '{"status":"200","statusQuery":"denegado"}';
        }
    }

    public function contactarPosibleParticipante(){
        
    }

    public function consultarBecas()
    {
        $becasData = $this->modelBecas->obtenerBecas(1,10);         
        if (count($becasData)>0) {

            echo '{"status":"200","size":"'.count($becasData).'","statusQuery":"ok","becasData":'.json_encode($becasData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","becasData":'.json_encode($becasData).'}';
        }
    }


    public function agregarBeca()
    {
            
    }

    public function actualizarBeca()
    {

    }

    public function buscarNombre()
    {
        $userData = $this->modelUsuario->buscarByNombre($_REQUEST["nombre"]);

         
        if (count($userData)>0) {

            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"ok","userData":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","userData":'.json_encode($userData).'}';
        }
    }

    public function obtenerEntrenamientosBecas()
    {
        $userData = $this->modelUsuario->obtenerEntrenamientosBecas();

         
        if (count($userData)>0) {

            echo '{"status":"200","size":"'.count($userData).'","statusQuery":"ok","userDataEntrenamientos":'.json_encode($userData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","userDataEntrenamientos":'.json_encode($userData).'}';
        }
    }

    public function enviarCorreo()
    {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "gertcode@gmail.com";
        $to = "gertcode@gmail.com";
        $subject = "Checking PHP mail";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "Se envió correo con éxito";
    }

    



}


