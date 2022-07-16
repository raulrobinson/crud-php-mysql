<?php

include_once "conexion.php";

// Models.
class Models {

    // Get all customers and customer by id.
    static public function Get_Customers($id) {
        if ($id == null) {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM customers");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::Conectar()->prepare("SELECT * FROM customers WHERE id = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }        
    } 

    // Add customer.
    static public function Add_Customers($datos) {
        $stmt = Conexion::Conectar()->prepare("INSERT INTO customers (`name`, `city`) VALUES (:name, :city)");
        $stmt->bindParam(":name", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":city", $datos["ciudad"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "Customer added!.";
        } else {
            return "Error!.";
        }
    }

    // Update customer by id.
    static public function Update_Customer($datos) {
        $stmt = Conexion::Conectar()->prepare("UPDATE customers SET `name` = :name, `city` = :city WHERE `id` = :id");
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt->bindParam(":name", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":city", $datos["ciudad"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "Customer updated!.";
        } else {
            return "Error!.";
        }
    }

    // Delete customer by id.
    static public function Delete_Customer_by_id($id) {
        $stmt = Conexion::Conectar()->prepare("DELETE FROM customers WHERE `id` = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->execute()) {
            return "Customer deleted!.";
        } else {
            return "Error!.";
        }
    }
}
