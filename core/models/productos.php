<?php
class Productos extends Validator
{
	// Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $descripcion = null;
	private $precio = null;
	private $imagen = null;
	private $categoria = null;
	private $estado = null;
	private $maceta = null;
	private $ruta = '../../../resources/img/files/';

	// Métodos para sobrecarga de propiedades
	public function setId($value)
	{
		if ($this->validateId($value)) {
			$this->id = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombre($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->nombre = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setDescripcion($value)
	{
		if ($this->validateAlphanumeric($value, 1, 200)) {
			$this->descripcion = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setPrecio($value)
	{
		if ($this->validateMoney($value)) {
			$this->precio = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	public function setImagen($file, $name)
	{
		if ($this->validateImageFile($file, $this->ruta, $name, 500, 500)) {
			$this->imagen = $this->getImageName();
			return true;
		} else {
			return false;
		}
	}

	public function getImagen()
	{
		return $this->imagen;
	}

	public function setCategoria($value)
	{
		if ($this->validateId($value)) {
			$this->categoria = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCategoria()
	{
		return $this->categoria;
	}

	public function setEstado($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->estado = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getEstado()
	{
		return $this->estado;
	}

		public function setMaceta($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->maceta = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getMaceta()
	{
		return $this->maceta;
	}

	public function getRuta()
	{
		return $this->ruta;
	}

	// Métodos para el manejo del SCRUD
	public function readProductosCategoria()
	{
		$sql = 'SELECT type_name, plant_id, plant_picture, plant_name, plant_descript, plant_price, stock, flowerpot FROM table_plants INNER JOIN table_type USING(type_name) WHERE type_name = ? ORDER BY plant_name';
		$params = array($this->categoria);
		return Database::getRows($sql, $params);
	}

	public function readProductos()
	{
		$sql = 'SELECT plant_id, plant_picture, plant_name, plant_descript, plant_price, type_name, stock, flowerpot FROM table_plants INNER JOIN table_type USING(type_name) ORDER BY plant_name';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function searchProductos($value)
	{
		$sql = 'SELECT plant_id, plant_picture, plant_name, plant_descript, plant_price, type_name, stock, flowerpot FROM table_plants INNER JOIN table_type USING(type_name) WHERE plant_name LIKE ? OR plant_descript LIKE ? ORDER BY plant_name';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}

	public function createProducto()
	{
		$sql = 'INSERT INTO table_plants(plant_name, plant_descript, plant_price, plant_picture, stock, flowerpot, type_name) VALUES(?, ?, ?, ?, ?, ?, ?)';
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->maceta, $this->categoria);
		return Database::executeRow($sql, $params);
	}

	public function getProducto()
	{
		$sql = 'SELECT plant_id, plant_name, plant_descript, plant_price, plant_picture, stock, flowerpot, type_name FROM table_plants WHERE plant_id = ?';
		$params = array($this->id);
		return Database::getRow($sql, $params);
	}

	public function updateProducto()
	{
		$sql = 'UPDATE table_plants SET plant_name = ?, plant_descript = ?, plant_price = ?, plant_picture = ?, stock = ?, flowerpot = ?, type_name = ? WHERE plant_id = ?';
		$params = array($this->nombre, $this->descripcion, $this->precio, $this->imagen, $this->estado, $this->maceta, $this->categoria, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function deleteProducto()
	{
		$sql = 'DELETE FROM table_plants WHERE plant_id = ?';
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	// Métodos para los gráficos y reportes del sistema.
	public function cantidadProductosCategoria()
	{
		$sql = 'SELECT type_name, COUNT(plant_id) cantidad FROM table_plants INNER JOIN table_type USING(type_name) GROUP BY type_name';
		$params = array(null);
		return Database::getRows($sql, $params);
	}
}
?>
