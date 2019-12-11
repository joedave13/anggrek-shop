<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Product extends CI_Model {
        public function getAllProduct()
        {
            return $this->db->get('flower')->result_array();
        }
    }
    
    /* End of file M_Product.php */
    
?>
