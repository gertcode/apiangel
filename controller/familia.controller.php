<?php

require_once 'model/familia.php';
require_once 'model/productos.php';
require_once 'model/especificaciones.php';
require_once 'model/pedidos.php';
require_once 'model/canasta.php';


class FamiliaController{

    private $modelFamilia;
    private $modelProductos;
    private $modelEspecificaciones;
    private $modelPedidos;
    private $modelCanasta;

    public function __CONSTRUCT(){
        $this->modelFamilia = new Familia();
        $this->modelProductos = new Productos();
        $this->modelEspecificaciones = new Especificaciones();
        $this->modelPedidos = new Pedidos();
        $this->modelCanasta = new Canasta();
    }

    public function index(){
        echo "OK";
    }



    public function getListFamilia(){

   
        $listaFamilias = $this->modelFamilia->getListFamilia();

         
        if (count($listaFamilias)>0) {
            //$a = $usuario[0];
            echo '{"status":"200","size":"'.count($listaFamilias).'","arreglo":'.json_encode($listaFamilias).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","acceso":"denegado","id":"cero","nombre":"cero"}';
        }

    }


    public function getListProductos(){

   
        $listaProductos = $this->modelProductos->getListProductos($_REQUEST["id"]);

         
        if (count($listaProductos)>0) {
            //$a = $usuario[0];
            echo '{"status":"200","size":"'.count($listaProductos).'","arreglo":'.json_encode($listaProductos).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","acceso":"denegado","id":"cero","nombre":"cero"}';
        }

    }


    public function getEspecificacionesProductos()
    {
        //echo "uno";
        $listaEspecificaciones = $this->modelEspecificaciones->getListEspecificaciones($_REQUEST["id"]);

         
        if (count($listaEspecificaciones)>0) {
            //$a = $usuario[0];
            echo '{"status":"200","size":"'.count($listaEspecificaciones).'","arreglo":'.json_encode($listaEspecificaciones).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","acceso":"denegado","id":"cero","nombre":"cero"}';
        }
    }


    public function getDetallesProducto()
    {
        $listaEspecificaciones = $this->modelEspecificaciones->getListEspecificacionesIndividual($_REQUEST["id"]);

         
        if (count($listaEspecificaciones)>0) {
            //$a = $usuario[0];
            echo '{"status":"200","size":"'.count($listaEspecificaciones).'","arreglo":'.json_encode($listaEspecificaciones).'}';
        }
        else
        {
            echo '{"status":"200","size":"0","acceso":"denegado","id":"cero","nombre":"cero"}';
        }
    }


    public function addNewShop()
    {
        $modelPed = new Pedidos();
        $modelPed->id_usuario = $_REQUEST["id"];
        $modelPed->status = "No Enviado";        
        $modelPed->RegistrarPedido($modelPed);

        

        $ultimoRegistro = $modelPed->getUltimoPedido($_REQUEST["id"]);

        $data = $ultimoRegistro[0];

        echo '{"status":"200","size":"1","info":"creado","idpedido":"'.$data["id_pedido"].'","fecha":"'.$data["fecha"].'","idusuario":"'.$data["id_usuario"].'","statuspedido":"'.$data["status"].'"}';

    }

    public function addItemCanasta()
    {
        $modelCan = new Canasta();
        $modelCan->id_pedido = $_REQUEST["id_pedido"];
        $modelCan->id_usuario = $_REQUEST["id_usuario"];   
        $modelCan->id_producto = $_REQUEST["id_producto"];
        $modelCan->cantidad = $_REQUEST["cantidad"];       
        $modelCan->addItemCanasta($modelCan);
        echo '{"status":"ok"}';
    }

    public function getCanasta()
    {
        $listaCanasta = $this->modelCanasta->getCanasta($_REQUEST["id"]);

        if (count($listaCanasta)>0) {
            //$a = $usuario[0];
            echo '{"status":"200","size":"'.count($listaCanasta).'","arreglo":'.json_encode($listaCanasta).'}';
        }
    }

    public function cancelarPedido()
    {
        $this->modelPedidos->CancelarPedido($_REQUEST["id"]);
        echo '{"status":"ok"}';
    }

    public function enviarPedido()
    {
        $this->modelPedidos->EnviarPedido($_REQUEST["id"]);
        echo '{"status":"ok"}';
    }

    public function mostrarPedidosCliente()
    {
        $this->modelPedidos->getPedidosCliente($_REQUEST["id"]);
    }



    
}