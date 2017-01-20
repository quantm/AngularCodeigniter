<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Dell
 */
class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('student_model', 'model');
    }

    public function student_list() {
        /*
         * Get student list
         */
        $res = $this->model->get_student_list();
        echo json_encode($res);
        
    }

}
