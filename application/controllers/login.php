<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_site');
    }

    public function index()
    {
        $data	= 	array(
            'title'			=> "IMM Setengah Abad",
            'description'	=> "IMM Setengah Abad",
        );

        $this->load->helper('text');
        $this->load->library('session');
        $this->load->helper('url');
        date_default_timezone_set('Asia/Jakarta');


        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 6')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();


        $data	= 	array(
            'berita_baru'	=> $berita_baru,
            'berita_kampus'	=> $berita_kampus,


        );

        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
            //mengambil helpher form. digunakan di v_login.php untuk membuat element form.
            $this->load->helper('form');
            //tampilan html login
            //tampilan html login
            $this->load->view('web/v_login', $data);

        }else
        {
            //jika seasson ada direct ke home
            redirect('home','refresh');
        }
    }

    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('login','refresh');
    }
}