<?php  
	/**
	 * 
	 */
	class ProductosModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getProductoPorFamilia($familia){

			$query = "CALL sp_get_producto_por_familia (".$familia.");";

			try{
				$consulta=$this->db->query($query);	
				if (!$consulta) {
					throw new Exception("Hubo un problema y no se recuperó la información, por favor intenta más tarde.", 1);		
				} else {
					$error = "Recibimos tu mensaje, te vamos a estar contactando a la brevedad.";
					$resultado = $consulta->result();	
					$this->db->free_db_resource();
				}
			} catch(Exception $e){
				$error = $e->getMessage();
			}

			return $resultado;	
		}

		public function getNombreFamilia($familia){
			$query = "CALL sp_get_descripcion_familia (".$familia.");";

			try{
				$consulta=$this->db->query($query);	
				if (!$consulta) {
					throw new Exception("Hubo un problema y no se recuperó la información, por favor intenta más tarde.", 1);		
				} else {
					$error = "Recibimos tu mensaje, te vamos a estar contactando a la brevedad.";
					$resultado = $consulta->result();	
					$this->db->free_db_resource();		
				}
			} catch(Exception $e){
				$error = $e->getMessage();
			}

			return $resultado[0]->descripcion;			
		}
	}

?>