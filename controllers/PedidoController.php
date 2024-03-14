<?php


class PedidoController
{
    public function hacer()
    {
        require_once"views/pedido/hacer.php";
    }

    public function add(){
        if(isset($_SESSION['identity'])){
            //Guardar datos en db
        }else{
            //Redirigir al index
            header('Location:'.base_url);
        }
    }
}