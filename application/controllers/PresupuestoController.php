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
	}

	public function grabarPresupuesto() {

		$this->load->model('ContactoModel');
		$parametros ['nombre'] = $this->input->post('nombre'); 
		$parametros ['email'] = $this->input->post('email');
		$parametros ['material'] = $this->input->post('optradio');
		$parametros ['alto'] = $this->input->post('alto');
		$parametros ['ancho'] = $this->input->post('ancho');
		$parametros ['mensaje'] = $this->input->post('descripcion');			

		$parametros ['resultado'] = $this->ContactoModel->presupuesto($parametros ['nombre'], $parametros ['email'], $parametros ['material'], $parametros ['alto'], $parametros ['ancho'], $parametros ['mensaje'],null);
	    
	    /*Mensaje a quien hizo el contacto*/
	    $emailCliente = $this->load->view('emailView',$parametros,TRUE);
    	$this->load->library('email');
		$this->email->from('ventas@mueblesroci.com.ar', 'Ventas Muebles Roci');
		$this->email->to($parametros['email']);
		$this->email->cc('');
		$this->email->bcc('');
		$this->email->subject('Contacto desde Muebles Roci Web');
		$this->email->message($emailCliente);
		$this->email->set_mailtype("html");
		$this->email->send();

		/*Mensaje a Muebles Roci*/
    	$this->email->from($parametros['email'], $parametros['nombre']);
		$this->email->to('ventas@mueblesroci.com.ar');
		$this->email->cc('lucianopacha@hotmail.com');
		$this->email->bcc('');
		$this->email->subject('Solicitud de presupuesto - Muebles Roci Web');
		$this->email->message('Recibimos la siguiente solicitud de presupuesto: <br> Nombre: '.$parametros['nombre'].'<br> Email: '.$parametros['email'].'<br> Material: '.$parametros['material'].'<br> Alto:'.$parametros['alto'].'<br> Ancho: '.$parametros['ancho'].'<br> Mensaje: '.$parametros['mensaje'].'<br>Fin del mensaje recibido.');
		$this->email->set_mailtype("html");
		$this->email->send();		

		if ($parametros ['resultado']) {
			$this->load->view('contactoView');
	    } else {
	    	$this->load->view('errorView');
	    }
	}

	function guardarArchivo() {
		$this->load->helper(array('form', 'url'));
		$this->load->model('ArchivoModel');
		$this->load->model('ContactoModel');

		$parametros['nombre'] = $this->input->post('nombre');
		$parametros['email'] = $this->input->post('email');
		$parametros['mensaje'] = $this->input->post('mensaje');
		$parametros['file'] = $_FILES['customFile']['name'];

		$config = $this->config($parametros['file']);
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
	    $fichero_subido = $_SERVER['DOCUMENT_ROOT'] . '/mueblesroci/presupuestos/'.$config['file_name'];
		
		if (move_uploaded_file($_FILES['customFile']['tmp_name'], $fichero_subido)) {

		    /* Inserto la solicitud en la BBDD */
		    $parametros ['resultado'] = $this->ContactoModel->presupuesto($parametros ['nombre'], $parametros ['email'], null, null, null, $parametros ['mensaje'],$config['file_name']);

			/*Mensaje a quien hizo el contacto*/
		    $emailCliente = $this->load->view('emailView',$parametros,TRUE);
	    	$this->load->library('email');
			$this->email->from('ventas@mueblesroci.com.ar', 'Ventas Muebles Roci');
			$this->email->to($parametros['email']);
			$this->email->cc('');
			$this->email->bcc('');
			$this->email->subject('Contacto desde Muebles Roci Web');
			$this->email->message($emailCliente);
			$this->email->set_mailtype("html");
			$this->email->send();		

			/*Mensaje a Muebles Roci*/
	    	$this->email->from($parametros['email'], $parametros['nombre']);
			$this->email->to('ventas@mueblesroci.com.ar');
			$this->email->cc('lucianopacha@hotmail.com');
			$this->email->bcc('');
			$this->email->subject('Solicitud de presupuesto - Muebles Roci Web');
			$this->email->message('Recibimos la siguiente solicitud de presupuesto: <br> Nombre: '.$parametros['nombre'].'<br> Email: '.$parametros['email'].'<br> Mensaje: '.$parametros['mensaje'].'<br>Fin del mensaje recibido.');
			$this->email->set_mailtype("html");
			$this->email->attach($_SERVER['DOCUMENT_ROOT'] . '/mueblesroci/presupuestos/'.$_FILES['customFile']['name']);
			$this->email->send();
			
			/* Cargo la página por carga correcta */
			$this->load->view('contactoView');
		} else {
			$this->load->view('errorView');
		}
    }

    public function config($file){
        $config['upload_path'] = "presupuestos/";
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|bmp|ppt|pptx';
        $config['file_name'] = 'Presupuesto '.($this->ArchivoModel->getMaxPresupuesto()+1).substr($file, -4);
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        return $config;
    }
}
?>