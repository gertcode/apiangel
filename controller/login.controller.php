<?php

require_once 'model/usuarios.php';


class LoginController{

    private $modelUser;

    public function __CONSTRUCT(){
        $this->modelUser = new Usuarios();

    }

    public function Index(){
        echo "Login";
    }



    public function getlogin(){

        $usuario = $this->modelUser->Login($_REQUEST["telefono"],$_REQUEST["password"]);

         
        if (count($usuario)>0) {
            $a = $usuario[0];
            echo '{"status":"200","size":"'.count($usuario).'","acceso":"ok","arreglo":'.json_encode($usuario).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","acceso":"denegado","arreglo":'.json_encode($usuario).'}';
        }

    }



    
}
