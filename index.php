<?php
require_once __DIR__ . '/config/Database.php';
require_once __DIR__ . '/controllers/BarangController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new BarangController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        }
        break;
    case 'update':
        if ($id) {
            $controller->update($id);
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        }
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>