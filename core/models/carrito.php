<?php
class Carrito extends Validator
{
  //Declaración de propiedades
  private $id = null;
  private $fecha = null;
  private $estado = null;
  private $id_usuario = null;
  private $id_disco = null;
  private $id_compra = null;
  private $cantidad = null;
  private $estadoCompra = null;

  //Métodos para sobrecarga de propiedades
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

  public function setfecha($value)
  {
    if (true) {
      $this->fecha = $value;
      return true;
    } else {
      return false;
    }
  }

  public function getfecha()
  {
    return $this->fecha;
  }
  
  public function setEstado($value)
  {
    if (true) {
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

  public function setId_usuario($value)
  {
    if ($this->validateId($value)) {
      $this->id_usuario = $value;
      return true;
    } else {
      return false;
    }
  }

  public function getId_usuario()
  {
    return $this->id_usuario;
  }

  public function setId_disco($value)
  {
    if ($this->validateId($value)) {
      $this->id_disco = $value;
      return true;
    } else {
      return false;
    }
  }

  public function setId_compra($value)
  {
    if ($this->validateId($value)) {
      $this->id_compra = $value;
      return true;
    } else {
      return false;
    }
  }

  public function getId_compra()
  {
    return $this->id_compra;
  }

  public function setCantidad($value)
  {
    if ($this->validateId($value)) {
      $this->cantidad = $value;
      return true;
    } else {
      return false;
    }
  }

  public function setEstadoCompra($value)
	{
		if ($value == '1' || $value == '0') {
			$this->estadoCompra = $value;
			return true;
		} else {
			return false;
		}
  }
  
  //Metodos para el manejo del CRUD
  public function addCarrito()
  {
    $sql = 'SELECT car_id FROM table_car WHERE status=? AND user_id=?'; 
    $params = array($this->id_usuario);
    if ($carrito = Database::getRow($sql, $params)) {
        $this->id = $carrito['car_id'];
        $sql = 'INSERT INTO table_details(car_id, plant_id, count) VALUES(?, ?, ?)';
        $params = array($this->id, $this->id_disco, $this->cantidad);
        return Database::executeRow($sql, $params);
    } else {
        $sql = 'INSERT INTO table_car(date, user_id) VALUES(?, ?)';
        $params = array(date('Y-m-d'), $this->id_usuario);
        if (Database::executeRow($sql, $params)) {
            $this->id = Database::getLastRowId();
            $sql = 'INSERT INTO table_details(car_id, plant_id, count) VALUES(?, ?, ?)';
            $params = array($this->id, $this->id_disco, $this->cantidad);
            return Database::executeRow($sql, $params);
        } else {
            return false;
        }
    }
  }

  public function readCompra()
	{
		$sql = 'SELECT table_car.car_id, name_client, last_name, details_id, plant_name, flowerpot, type_name, plant_price, count, (plant_price * count) total 
        FROM table_details INNER JOIN table_plants USING(plant_id)
        INNER JOIN table_car USING(car_id) INNER JOIN table_clients USING(user_id) WHERE status = 0 AND user_id = ?';
		$params = array($_SESSION['idUsuario']);
		return Database::getRows($sql, $params);
  }

  public function getCompra()
	{
		$sql = 'SELECT details_id, status, count, car_id, plant_id FROM table_details INNER JOIN table_car USING(car_id) WHERE car_id = ?';
		$params = array($this->id_compra);
		return Database::getRow($sql, $params);
  }
  

  public function updateEstado()
	{
		$sql = 'UPDATE table_car SET status = 1  WHERE car_id = ?';
		$params = array($this->id_compra);
		return Database::executeRow($sql, $params);
    }
  
  public function deleteCompra()
	{
		$sql = 'DELETE FROM table_details WHERE details_id = ?';
		$params = array($this->id_compra);
		return Database::executeRow($sql, $params);
    }

    public function getShop()
    {
      $sql = 'SELECT details_id, status, count, car_id, plant_id FROM table_details INNER JOIN table_car USING(car_id) WHERE car_id = ?';
      $params = array($this->id_compra);
      return Database::getRow($sql, $params);
    }

}
?>
