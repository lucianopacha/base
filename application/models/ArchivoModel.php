<?php  
	class ArchivoModel extends CI_Model
	{	
		protected $consulta;
		protected $resultado;		

		function __construct()
		{
			parent::__construct();
		}

		public function getMaxPresupuesto(){

			$query = "CALL sp_get_max_presupuesto()";
							
			try{
				$consulta=$this->db->query($query);	
				
				if (!$consulta) {
					throw new Exception("Hubo un problema y no se registró el contacto, por favor intenta más tarde.", 1);			
				} else {
					foreach ($consulta->result() as $row)
					{
			        	$resultado = $row->maxid;
					}
				}
			} catch(Exception $e){
				$error = $e->getMessage();
			}

			return $resultado;
		}
	}
?>