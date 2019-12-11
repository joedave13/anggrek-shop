<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Penjualan extends CI_Model {
        public function getAllData()
        {
            return $this->db->get('order')->result_array();
        }
    }
    
    /* End of file M_Penjualan.php */
    
?>
