<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Dashboard extends CI_Model {
        public function getUserData()
        {
            return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        }
    }
    
    /* End of file M_Dashboard.php */
    
?>
