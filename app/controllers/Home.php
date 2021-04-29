<?php

	class Home extends Controlador {
		
		public function __construct() {
			$this->articulomodelo = $this->modelo('ArticuloModelo');
		}

		public function index() {

			$datos = [
				'titulo' => 'Bienvenidos al Framework MVC en PHP',
			];
			$this->vista('home/index', $datos);
		}

	
	}
