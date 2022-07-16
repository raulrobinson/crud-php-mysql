<?php

// Controllers.
class Controllers {
    
    // Get all customers.
    static public function Get_All_Customers() {
        $response = Models::Get_Customers(null);
        return $response;
    }

    // Get customer by id.
    static public function Get_Customer_by_id($id) {
        $response = Models::Get_Customers($id);
        return $response;
    }

    // Add customer.
    static public function Add_Customer($name, $city) {
        $datos = array("nombre" => $name, "ciudad" => $city);
        $response = Models::Add_Customers($datos);
        return $response;
    }

    // Update customer by id.
    static public function Update_Customer_by_id($id, $name, $city) {
        $datos = array("id" => $id, "nombre" => $name, "ciudad" => $city);
        $response = Models::Update_Customer($datos);
        return $response;
    }

    // Delete customer by id.
    static public function Delete_Customer_by_id($id) {
        $response = Models::Delete_Customer_by_id($id);
        return $response;
    }

}
