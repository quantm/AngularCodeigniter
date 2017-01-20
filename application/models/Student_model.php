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
class Student_model extends CI_Model {

    public function get_student_list() {
        $q = $this->db->select('*')->get('students');
        if ($q->num_rows() < 1) {
            return ['status' => 'error', 'message' => 'Student not found in Database', 'data' => NULL];
        } else {
            return ['status' => 'success', 'message' => 'Student data found', 'data' => $q->result()];
        }
    }

}
