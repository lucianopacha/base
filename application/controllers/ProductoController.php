<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductoController extends CI_Controller {
	public function getFamilias()
	{
		$this->load->view('familiaView');
	}

	public function mostrarProductos($familia){
		$this->load->model('productosModel');

		/* Titulo de la pantalla de acuerdo a la familia seleccionada */
		$parametros['familia']=$this->productosModel->getNombreFamilia($familia);

		/* Traigo los productos de la familia seleccionada */
		$resultado=$this->productosModel->getProductoPorFamilia($familia);
		
		/* Armo el html a devolver */
		$parametros['fotos'] = $this->armarFotos($resultado);

		$this->load->view('productosView',$parametros);
	}

	public function armarFotos($registros){
		$fotos = "";
		
		for ($i=0; $i < sizeof($registros); $i++) { 
			$fotos.= "<img src='".base_url()."images/".$registros[$i]->foto."'>";
		}
		return $fotos;
	}
}
