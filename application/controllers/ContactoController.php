<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoController extends CI_Controller {
	public function contacto()
	{
		$this->load->model('ContactoModel');
		$parametros ['nombre'] = $this->input->post('nombre');
		$parametros ['telefono'] = $this->input->post('telefono');
		$parametros ['email'] = $this->input->post('email');
		$parametros ['mensaje'] = $this->input->post('mensaje');			

		$parametros ['resultado'] = $this->ContactoModel->contacto($parametros ['nombre'], $parametros ['telefono'], $parametros ['email'], $parametros ['mensaje']);
	    
	    /*Mensaje a quien hizo el contacto*/
	    $emailCliente = $this->load->view('emailView',$parametros,TRUE);
    	$this->load->library('email');
		$this->email->from('info@mueblesroci.com', 'Muebles Roci Web');
		$this->email->to($parametros['email']);
		$this->email->cc('lucianopacha@hotmail.com');
		$this->email->bcc('');
		$this->email->subject('Contacto desde Muebles Roci Web');
		$this->email->message($emailCliente);
		$this->email->set_mailtype("html");
		$this->email->send();*/

		/*Mensaje a Muebles Roci*/
    	$this->email->from($parametros['email'], $parametros['nombre']);
		$this->email->to('info@mueblesroci.com');
		$this->email->cc('lucianopacha@hotmail.com');
		$this->email->bcc('');
		$this->email->subject('Contacto hacia Muebles Roci Web');
		$this->email->message('Recibimos el siguiente mensaje de: '.$parametros['nombre'].'<br><br>'.$parametros['mensaje'].".<br>Fin del mensaje recibido.");
		$this->email->send();*/		

		if ($parametros ['resultado']) {
			$this->load->view('contactoView');
	    } else {
	    	$this->load->view('errorView');
	    }
	}
}