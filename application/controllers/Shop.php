<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Shop extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_Shop');
        }
    
        public function index()
        {
            $data['flower'] = $this->M_Shop->getAllProduct();
            $this->load->view('shop/index', $data);
        }

        public function education()
        {
            $this->load->view('shop/education');
        }

        public function add_to_cart($id)
        {
            $product = $this->M_Shop->getProductById($id);
            $data = [
                'id' => $product['id'],
                'name' => $product['nama'],
                'qty' => 1,
                'price' => $product['price']
            ];
            $this->cart->insert($data);
            $this->show_cart();
        }

        public function show_cart()
        {
            $this->load->view('shop/cart');
        }

        public function clear_cart()
        {
            $this->cart->destroy();
            redirect('shop/index');
        }
    
    }
    
    /* End of file Shop.php */
    
?>
