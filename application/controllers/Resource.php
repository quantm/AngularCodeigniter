<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resource
 *
 * @author Khurshid Alam Jony
 */
class Resource extends CI_Controller {

    //put your code here

    public function view($view) {
            $this->load->view("templates/$view.php");
    }

}
