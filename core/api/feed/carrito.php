<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/carrito.php');

//Se comprueba si existe una acción a realizar, de lo contrario se muestra un mensaje de error
if (isset($_GET['action'])) {
    session_start();
    $carrito = new Carrito;
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    //Se verifica si existe una sesión iniciada como administrador para realizar las operaciones correspondientes
	if (isset($_SESSION['idUsuario'])) {
        switch ($_GET['action']) {
            case 'logout':
                if (session_destroy()) {
                    header('location: ../../../views/feed/');
                } else {
                    header('location: ../../../views/feed/main.php');
                }
                break;
            case 'createCar':
                $_POST = $carrito->validateForm($_POST);
                if ($carrito->setId_disco($_POST['id_disco'])) {
                    if ($carrito->setCantidad($_POST['cantidad'])) {
                        if ($carrito->setId_usuario($_SESSION['idUsuario'])) {
                            if ($carrito->addCarrito()) {
                                $result['status'] = 1;
                            } else {
                                $result['exception'] = 'Operación fallida';
                            }
                        } else {
                            $result['exception'] = 'Usuario incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Cantidad invalida';
                    }
                } else {
                    $result['exception'] = 'Planta desconocida';
                }
                break;
            case 'readCompra':
				if ($result['dataset'] = $carrito->readCompra()) {
					$result['status'] = 1;
				} else {
					$result['exception'] = 'No hay compra registrada';
				}
                break;
            case 'deleteCompra':
				if ($carrito->setId_compra($_POST['id_Compra'])) {
					if ($carrito->getCompra()) {
						if ($carrito->deleteCompra()) {
							$result['status'] = 1;
						} else {
							$result['exception'] = 'Operación fallida';
						}
					} else {
						$result['exception'] = 'Detalles inexistentes';
					}
				} else {
					$result['exception'] = 'Compra incorrecta';
				}
                break;
                case 'shoppp':
				if ($carrito->setId_compra($_POST['id_Compra'])) {
					if ($carrito->getCompra()) {
						if ($carrito->updateEstado()) {
							$result['status'] = 1;
						} else {
							$result['exception'] = 'Operación fallida';
						}
					} else {
						$result['exception'] = 'Detalles inexistentes';
					}
				} else {
					$result['exception'] = 'Compra incorrecta';
				}
            	break;
            default:
                exit('Acción no disponible');
    	}
    } else {
        exit('Acceso no disponible');
    }
	print(json_encode($result));
} else {
	exit('Recurso denegado');
}
