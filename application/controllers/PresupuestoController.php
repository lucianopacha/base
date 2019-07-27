<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresupuestoController extends CI_Controller {
	public function cargarVista($accion) {
		$parametros['formulario'] = '';

		if ($accion=='plano') {
			$parametros['formulario'] = $this->load->view('formulario_plano','',TRUE);
		} else {
			$parametros['formulario'] = $this->load->view('formulario_medidas','',TRUE);
		}
		$this->load->view('presupuestoSolicitud',$parametros);
		//$this->load->view('formulario_plano');
	}

	public function grabarPrespuesto() {
		/* TO DO: Escribir lógica. */
		echo "Llegó";
	}
}
?>