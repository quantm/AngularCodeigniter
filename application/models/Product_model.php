<?php

class Product_model extends CI_Model{
    function getProduct(){
        $q = $this->db->select('product_id,name,main_list_comment,main_list_image')->from('dtb_products')->limit(10)->get();
        return ['status' => 'success', 'message' => 'Product data found', 'data' => $q->result()];
    }
}