<?php

class PrintController extends CI_Controller {

    public function __construct() {
		parent::__construct();
    }

   public function cetakNota($nota)
   {
        $d = $this->db->get_where('t_trans', ['invoice' => $nota ])->row();
        if( !$d ) die("not found");
        $d->detail  = $this->db->get_where('t_trans_detail', ['invoice' => $nota ])->result();
        $profile    = $this->db->select("nota_name, nota_address, nota_phone, nota_printer")->from("m_profile")->get()->row();
        $customer   = $this->db->select('nia, name')->get_where('t_customers', ['code' => $d->customer_id ])->row();

        $this->load->view('nota-generic', ['d' => $d, 'profile' => $profile, 'customer' => $customer]);
        
        $route['print/nota/([A-Za-z0-9]+)'] = 'printController/cetakNota/$1';
   }
}