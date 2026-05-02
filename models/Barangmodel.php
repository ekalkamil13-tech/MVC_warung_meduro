<?php
class BarangModel {
    private $conn;
    private $table_name = "barang";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama_barang, $harga, $stok) {
        $query = "INSERT INTO " . $this->table_name . " SET nama_barang=:nama_barang, harga=:harga, stok=:stok";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        return $stmt->execute();
    }

    public function update($id, $nama_barang, $harga, $stok) {
        $query = "UPDATE " . $this->table_name . " SET nama_barang=:nama_barang, harga=:harga, stok=:stok WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>