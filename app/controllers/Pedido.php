<?php
class Pedido extends Controlador
{
    public function __construct()
    {
        $this->pedidomodelo = $this->modelo('PedidoModelo');
    }
    public function index()
    {
        //$datos = $this->clientemodelo->obtenerClientes();  
        $this->vista('Pedido/PedidoVista');
    }

    public function crearPedido()
    {             
            $datos = [
                'idcliente' => $_POST['idcliente'],                 
                'fecha' => $_POST['fecha'],
                'idarticulo' =>$_POST['idArticulo'],
                'cantidad' =>$_POST['cantidad'],
                'subtotal' =>$_POST['subtotal']                                
        ];    
        
    /*     echo '<pre>';
        print_r($datos);
        echo '</pre>';
 */
            $datos = $this->pedidomodelo->crearPedido($datos);
            echo json_encode($datos);        
        }
    }
    
    

