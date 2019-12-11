<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Penjualan extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_Penjualan');
            $this->load->model('M_Dashboard');
        }
    
        public function index()
        {
            $data['title'] = 'Data Penjualan';
            $data['admin'] = $this->M_Dashboard->getUserData();
            $data['penjualan'] = $this->M_Penjualan->getAllData();
            $data['sidebar'] = $this->load->view('templates/admin_sidebar', null, true);
            $data['topbar'] = $this->load->view('templates/admin_topbar', $data, true);
            
            $this->load->view('templates/admin_header', $data);
            $this->load->view('penjualan/index', $data);
            $this->load->view('templates/admin_footer');
        }
    
    }
    
    /* End of file Penjualan.php */
    
?>
