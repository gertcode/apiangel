<?php
session_start();
require_once 'model/sesion.php';

class SesionController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Sesion();
    }

    public function Index(){
        echo "OK";
    }

    public function Post(){
        $alm = new Sesion();

        if(isset($_REQUEST['nick'])){
            $alm = $this->model->Obtener($_POST['nick'],$_POST['password']);
            $valor = $_POST['nick'];

            //print_r($alm);
            //echo "<script>alert('".$alm['id']."');</script>";
            if ($alm) {
            //    require_once 'view/header.php';
            //require_once 'view/alumno/alumno-editar.php';
            //require_once 'view/footer.php';
            $_SESSION['user'] = $_POST['nick'];

             header('Location: index.php?c=Dashboard');
            }
            else
            {
                require_once 'view/header.php';
                require_once 'view/sesion/sesion.php';
                require_once 'view/footer.php';
            }

        }

    }

}
