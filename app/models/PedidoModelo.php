<?php

class PedidoModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function crearPedido($datos)
    {
        //insercion tabla maestra
        $this->db->query('INSERT INTO pedido_cabecera (fecha,cliente_idcliente) VALUES (:fecha, :idcliente);');
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':idcliente', $datos['idcliente']);
        $this->db->bind(':fecha', $datos['fecha']);
        $this->db->execute();
        // insercion del detalle
        $numpedido = $this->db->ultimaInsercion(); //para encontrar el id de la tabla maestra
        $num_elementos = 0; //para recorrer el arreglo
        // insercion tabla de detalle
        while ($num_elementos < count($datos['idarticulo'])) {
            $this->db->query("INSERT INTO pedido_detalle(idarticulo,cantidad,pedido_num) VALUES (:idarticulo,:cantidad,$numpedido)");
            $this->db->bind(':idarticulo', $datos['idarticulo'][$num_elementos]);
            $this->db->bind(':cantidad', $datos['cantidad'][$num_elementos]);
            $this->db->execute();
            $num_elementos = $num_elementos + 1;
        }
    }
}
