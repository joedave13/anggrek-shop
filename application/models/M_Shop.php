<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Shop extends CI_Model {
        public function getAllProduct()
        {
            return $this->db->get('flower')->result_array();
        }

        public function getProductById($id)
        {
            return $this->db->get_where('flower', ['id' => $id])->row_array();
        }
    }
    
    /* End of file M_Shop.php */
    
?>
