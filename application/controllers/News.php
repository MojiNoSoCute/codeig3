<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function index()
    {
        echo "hello thai";
    }

    function __construct()
    {
        parent::__construct();
        echo "hello se </br>";
    }

    function hello($name = null) {
        echo "hello ", $name;
    }

    public function hello2($name = null, $major = null)
    {
        echo "Hello " . $name . " Major : " . $major;
    }

    
}
