<?php
class Cliente extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    public function index()
    {
        $this->vista('Cliente/ClienteVista');
    }

    public function listarClientes()
    {
        $datos = $this->clientemodelo->obtenerClientes();
        echo json_encode($datos);

    }

    public function crearCliente()
    {
        $id = $_POST['id'];

        if (empty($id)) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda'],
                'imagen' => $_POST['imagenactual'],
            ];
            if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $datos['imagen'] = $_POST["imagenactual"];
            } else {
                $ext = explode(".", $_FILES["imagen"]["name"]);
                if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") {

                    $datos['imagen'] = round(microtime(true)) . '.' . end($ext);
                    echo '<pre>';
                    print_r($datos['imagen']);
                    echo '</pre>';
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], 'C:\xampp\htdocs\mvc\public\img\img_' . $datos['imagen']);
                }
            }
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
                'deuda' => $_POST['deuda'],
                'imagen' => $_POST['imagenactual'],

            ];

            if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $datos['imagen'] = $_POST["imagenactual"];
            } else {
                $ext = explode(".", $_FILES["imagen"]["name"]);
                if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png") {
                     $datos['imagen'] = round(microtime(true)) . '.' . end($ext);
                    // echo '<pre>';
                    // print_r($datos['imagen']);
                    // echo '</pre>';
                    
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], 'C:\xampp\htdocs\mvc\public\img\img_' . $datos['imagen']);
                }
            }
            $datos = $this->clientemodelo->actualizarCliente($datos);
           echo json_encode($datos);
        }
    }
    public function eliminarCliente()
    {
        $datos = [
            'id_cliente' => $_POST['id'],
        ];

        $datos = $this->clientemodelo->eliminarCliente($datos);
        echo json_encode($datos);
    }

}
