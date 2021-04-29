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
 
    public function crearUsuario(){       
            $datos = [
                'nombre' =>$_POST['nombre'],
                'apellido' =>$_POST['apellido'],
                'email' =>$_POST['email'],
                'telefono' =>$_POST['telefono'],
                'login' =>$_POST['login'],
                'password' =>password_hash($_POST['password'], PASSWORD_DEFAULT)    //bcrypt           
        ];
            $datos = $this->usuariomodelo->crearUsuario($datos);
            echo json_encode($datos);        
       
        }
    
   

}