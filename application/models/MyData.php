<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyData extends CI_Model
{

    public function showName()
    {
        return "Nai";
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM products";

        $query = $this->db->query($sql)->result_array();
        foreach ($query as $row) {
            echo $row['code'] . " " . $row['name'] . " " . $row['price'] . "</br>";
        }
    }
}