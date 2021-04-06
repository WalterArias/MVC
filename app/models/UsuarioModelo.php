<?php

class UsuarioModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios(){
        $this->db->query('SELECT * from Usuario');
        $resultados = $this->db->registros();
        return $resultados;
    }  
 
 
    
 
  public function crearUsuario($datos)
    {
        $this->db->query('INSERT INTO usuario (usuario_nombre,usuario_apellido, usuario_email,usuario_tel,usuario_login, usuario_pass) VALUES (:nombre,  :apellido, :email, :telefono, :login,  :password);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);   
        $this->db->bind(':email', $datos['email']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':login', $datos['login']);
        $this->db->bind(':password', $datos['password']);   
     
        // Ejecutamos la consulta
        if ($this->db->execute()) {            
            $para = 'walarias@misena.edu.co';
            $objeto = 'pruebas de email walter';
            $mensaje = 'esto es una prueba , espero estes bien';
            $headers  = 'From: walter.arias.aguirre@gmail.com'."\r\n".'Reply-To:walter.arias.aguirre@gmail.com'."\r\n".'X-Mailer: PHP/'.phpversion();
             // mail($para,$objeto,$mensaje,$headers);
           mail($datos['email'],'Creacion de cuenta','Bienvenido al sistema TIENDA PEDRO',"'From: walter.arias.aguirre@gmail.com'.'Reply-To:walter.arias.aguirre@gmail.com'.'X-Mailer: PHP/'.phpversion()");

            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }

 
} 

    