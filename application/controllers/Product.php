<?php

class Product extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model', 'model');
    }

    function productList(){
        $resProduct = $this->model->getProduct();
        echo json_encode($resProduct);
    }
}