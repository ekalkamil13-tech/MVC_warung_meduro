<?php
require_once __DIR__ . '/../models/BarangModel.php';

class BarangController {
    private $model;

    public function __construct($db) {
        $this->model = new BarangModel($db);
    }

    public function index() {
        $stmt = $this->model->readAll();
        $barang = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require __DIR__ . '/../views/list.php';
    }

    public function create() {
        require __DIR__ . '/../views/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST['nama_barang'], $_POST['harga'], $_POST['stok']);
            header("Location: index.php");
            exit;
        }
    }

    public function edit($id) {
        $data = $this->model->readOne($id);
        require __DIR__ . '/../views/edit.php';
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST['nama_barang'], $_POST['harga'], $_POST['stok']);
            header("Location: index.php");
            exit;
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
        exit;
    }
}
?>