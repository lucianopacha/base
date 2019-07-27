<?php  
	class ContactoModel extends CI_Model
	{	
		protected $consulta;
		protected $resultado;		

		function __construct()
		{
			parent::__construct();
		}

		public function contacto($nombre, $telefono, $email, $mensaje){

			$query = "CALL sp_insert_contacto('".$nombre."', '".$telefono."', '".$email."', '".$mensaje."', NOW())";
						
			try{
				$consulta=$this->db->query($query);	
				if (!$consulta) {
					throw new Exception("Hubo un problema y no se registró el contacto, por favor intenta más tarde.", 1);				
				} else {
					$error = "Recibimos tu mensaje, te vamos a estar contactando a la brevedad.";
					$resultado = TRUE;
				}
			} catch(Exception $e){
				$error = $e->getMessage();
			}
			//return $resultado;
			return $resultado;
		}
	}

?>