<?php  
	/**
	 * 
	 */
	class Producto
	{
		protected $id;
		protected $descripcion;
		protected $falta;
		protected $familia;
		protected $familia_desc;
		protected $fbaja;
		protected $foto;
		
		function __construct($id, $descripcion, $falta, $familia, $familia_desc, $fbaja, $foto)
		{
			$this->id = $id;
			$this->descripcion = $descripcion;
			$this->falta = $falta;
			$this->familia = $familia;
			$this->familia_desc = $familia_desc;
			$this->fbaja = $fbaja;
			$this->foto = $foto;
		}

		public function getId()
		{
		    return $this->id;
		}
		
		public function setId($id)
		{
		    $this->id = $id;
		    return $this;
		}

		public function getFoto()
		{
		    return $this->foto;
		}
		
		public function setFoto($foto)
		{
		    $this->foto = $foto;
		    return $this;
		}

		public function getFbaja()
		{
		    return $this->fbaja;
		}
		
		public function setFbaja($fbaja)
		{
		    $this->fbaja = $fbaja;
		    return $this;
		}

		public function getFamilia_desc()
		{
		    return $this->familia_desc;
		}

		public function setFamilia_desc($familia_desc)
		{
		    $this->familia_desc = $familia_desc;
		    return $this;
		}
		public function getFamilia()
		{
		    return $this->familia;
		}
		
		public function setFamilia($familia)
		{
		    $this->familia = $familia;
		    return $this;
		}

		public function getDescripcion()
		{
		    return $this->descripcion;
		}
		
		public function setDescripcion($descripcion)
		{
		    $this->descripcion = $descripcion;
		    return $this;
		}

		public function getFalta()
		{
		    return $this->falta;
		}
		
		public function setFalta($falta)
		{
		    $this->falta = $falta;
		    return $this;
		}
	}
?>