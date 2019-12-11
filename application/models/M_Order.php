<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Order extends CI_Model {
        public function prosesOrder()
        {
            $order = [
                'id_customer' => 1,
                'date' => date('Y-m-d H:i:s'),
                'due_date' => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 3,date('Y'))),
                'status' => 'Unconfirmed'
            ];
            $this->db->insert('order', $order);
            $order_id = $this->db->insert_id();

            foreach ($this->cart->contents() as $item) {
                $data = [
                    'id_order' => $order_id,
                    'id_produk' => $item['id'],
                    'nama_produk' => $item['name'],
                    'qty' => $item['qty'],
                    'price' => $item['price'],
                ];
                $this->db->insert('order_detail', $data);
            }
            return true;
        }
    }
    
    /* End of file M_Order.php */
    
?>
