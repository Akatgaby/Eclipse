<?php
class Categorias extends Validator
{
	// Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $descripcion = null;

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
		if($this->validateAlphanumeric($value, 1, 50)) {
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
		if ($value) {
			if ($this->validateAlphanumeric($value, 1, 200)) {
				$this->descripcion = $value;
				return true;
			} else {
				return false;
			}
		} else {
			$this->descripcion = null;
			return true;
		}
	}

	public function getDescripcion()
	{
		return $this->descripcion;
	}

	// Metodos para el manejo del SCRUD
	public function readCategorias()
	{
		$sql = 'SELECT type_id, type_name, type_descript FROM table_type ORDER BY type_name';
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function searchCategorias($value)
	{
		$sql = 'SELECT * FROM table_type WHERE type_name LIKE ? OR type_descript LIKE ? ORDER BY type_name';
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}

	public function createCategoria()
	{
		$sql = 'INSERT INTO table_type(type_name, type_descript) VALUES(?, ?)';
		$params = array($this->nombre, $this->descripcion);
		return Database::executeRow($sql, $params);
	}

	public function getCategoria()
	{
		$sql = 'SELECT type_id, type_name, type_descript FROM table_type WHERE type_id = ?';
		$params = array($this->id);
		return Database::getRow($sql, $params);
	}

	public function updateCategoria()
	{
		$sql = 'UPDATE table_type SET type_name = ?, type_descript = ? WHERE type_id = ?';
		$params = array($this->nombre, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function deleteCategoria()
	{
		$sql = 'DELETE FROM table_type WHERE type_id = ?';
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>
