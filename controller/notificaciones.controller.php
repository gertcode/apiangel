<?php
//require_once 'model/notificaciones.php';

class UsuariosController{


    private $modelNotificaciones;

    public function __CONSTRUCT(){

        //$this->modelNotificaciones = new Notificaciones();
    }

    public function Index(){
        echo "oki 1";
    }


    public function obtenerNotificaciones(){

        echo "oki";
        /*$notificacionesData = $this->modelNotificaciones->ObtenerNotificacionesById($_REQUEST["id_usuario"]);

         
        if (count($notificacionesData)>0) {

            echo '{"status":"200","size":"'.count($notificacionesData).'","statusQuery":"ok","notificacionesData":'.json_encode($notificacionesData).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","statusQuery":"denegado","notificacionesData":'.json_encode($notificacionesData).'}';
        }*/
    }





}


