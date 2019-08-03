<?php  
	/**
	 * 
	 */
	class IndexModel extends CI_Model
	{
		
		function __construct(argument)
		{
			parent::__construct();
		}

		function init(){
			/* TO DO: Incluir la lógica que haga falta*/
			/*Ejemplo

			$this->db->select('id','precio');
			$this->db->from('compras_productos');
			$consulta = $this->db->get();
			$resultado = $consulta->result();
			return $resultado;
			*/
		}
	}

?>