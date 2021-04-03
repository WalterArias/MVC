<?php
Class Usuario extends Controlador
{
    public function __construct()
    {
        $this->usuariomodelo = $this->modelo('UsuarioModelo');
    }

    public function index()
    {       
        $this->vista('Usuario/UsuarioVista');
    }

    public function listarUsuarios(){
        $datos = $this->usuariomodelo->obtenerUsuarios();
         echo json_encode($datos);       

    }
/* 
    public function crearCliente()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
        ];
            $datos = $this->clientemodelo->crearCliente($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
                    
        ];
            $datos = $this->clientemodelo->actualizarCliente($datos);
            echo json_encode($datos);
        }
    }
    public function eliminarCliente()
    {
        $datos =[
            'id_cliente' => $_POST['id']
        ];

        $datos = $this->clientemodelo->eliminarCliente($datos);
        echo json_encode($datos);
    } */


}
