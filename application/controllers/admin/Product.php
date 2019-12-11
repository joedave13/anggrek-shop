<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Product extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_Dashboard');
            $this->load->model('M_Product');
        }
    
        public function index()
        {
            $data['title'] = 'Data Produk';
            $data['admin'] = $this->M_Dashboard->getUserData();
            $data['product'] = $this->M_Product->getAllProduct();
            $data['sidebar'] = $this->load->view('templates/admin_sidebar', null, true);
            $data['topbar'] = $this->load->view('templates/admin_topbar', $data, true);

            $this->load->view('templates/admin_header', $data);
            $this->load->view('product/index', $data);
            $this->load->view('templates/admin_footer');
        }
    }
    
    /* End of file Product.php */
    
?>
