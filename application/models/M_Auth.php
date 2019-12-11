<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Auth extends CI_Model {
        public function insertData($data)
        {
            $this->db->insert('admin', $data);
        }

        public function checkUser($email)
        {
            return $this->db->get_where('admin', ['email' => $email])->row_array();
        }
    }
    
    /* End of file M_Auth.php */
    
?>
