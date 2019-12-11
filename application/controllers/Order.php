<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_Order');
        }
        
    
        public function index()
        {
            $proses = $this->M_Order->prosesOrder();
            if ($proses) {
                $this->cart->destroy();
                redirect('home');
            }
        }
    
    }
    
    /* End of file Order.php */
    
?>
