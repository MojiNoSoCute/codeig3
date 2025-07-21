<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyData extends CI_Model
{

    public function showName()
    {
        return "Nai";
    }

    public function getAllProducts()
    {
        $query = $this->db->get('products')->result();
        foreach ($query as $row) {
            echo $row->code . " " . $row->name . " " . $row->price . "</br>";
        }
    }
}