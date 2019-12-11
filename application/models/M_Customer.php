<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Customer extends CI_Model {
        public function getAllCustomerData()
        {
            return $this->db->get('customer')->result_array();
        }
    }
    
    /* End of file M_Customer.php */
    
?>
