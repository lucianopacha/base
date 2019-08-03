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

		public function presupuesto($nombre, $email, $material, $alto, $ancho, $mensaje, $plano){
			
			$query = "CALL sp_insert_presupuesto('".$nombre."', '".$email;

			if (is_null($material)) {
				$query.="', ".'NULL'.", ";
			}
			else {
				$query.="', '".$material."', ";
			}

			if (is_null($alto)) {
				$query.='NULL'.", ";
			}
			else{
				$query.=$alto.", ";
			}

			if (is_null($ancho)) {
				$query.='NULL'.", ";
			}
			else{
				$query.=$ancho.", ";
			}

			$query.="'".$mensaje;

			if (is_null($plano)) {

				$query.="', ".'NULL'.");";
			}
			else {
				$query.="', '".$plano."');";
			}

			echo $query;
			//CALL sp_insert_presupuesto('Luciano Pacheco', 'luciano.a.pacheco@gmail.com', NULL, NULL, NULL, 'Mueble para tv', 'Presupuesto 8.PNG');
			//CALL sp_insert_presupuesto('Luciano Pacheco', 'luciano.a.pacheco@gmail.com', 'faplac', 567, 765, '23243', NULL);


			try{
				$consulta=$this->db->query($query);	
				if (!$consulta) {
					throw new Exception("Hubo un problema y no se registró el presupuesto, por favor intenta más tarde.", 1);				
				} else {
					$error = "Recibimos tu solicitud de presupuesto, te vamos a estar contactando a la brevedad.";
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