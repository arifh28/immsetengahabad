<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Info_imm extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        if($this->session->userdata('login'))
        {
            $data	= 	array(
                'title'			=> "Info IMM | IMM Setengah Abad",
                'description'	=> "Info IMM | IMM Setengah Abad",
            );
            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
			$data['email'] = $session['email'];
			$data['active'] = $session['active'];

            $this->load->view('web/head',$data);
            $this->load->view('web/info_imm');
            $this->load->view('web/footer');
        }else{
            redirect('login','refresh');   
        }
    }
}