<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Register extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper(array('url','html'));
        $this->load->model('m_site');
        $this->load->database();
    }

    public function index()
    {

        $data	= 	array(
            'title'			=> "Registrasi | IMM Setengah Abad",
            'description'	=> "Registrasi | IMM Setengah Abad",
        );

        $data['provinsi']=$this->m_site->get_all_provinsi();

        $this->load->view('web/head', $data);
		$this->load->view('web/v_register');
    }

    function add_ajax_kab($id_prov){
        $query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
        $data = "<option value=''>- Pilih Pimpinan Cabang -</option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='".$value->id."'>".$value->nama."</option>";
        }
        echo $data;
    }

	public function submit(){
		//passing post data dari view
		$this->load->helper(array('form', 'url'));
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
        $wan_wati = $this->input->post('wan_wati');
        $cabang = $this->input->post('cabang');
        $dpd = $this->input->post('dpd');
        $komisariat = $this->input->post('komisariat');
		
		//memasukan ke array
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
            'wan_wati' => $wan_wati,
            'komisariat' => $komisariat,
            'cabang' => $cabang,
            'dpd' => $dpd,
			'active' => 0
		);
		//tambahkan akun ke database
		$this->load->model('m_register');
		$id = $this->m_register->add_account($data);
		
		//enkripsi id
		$encrypted_id = md5($id);
		
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://cloud507.unlimitedwebhosting.co.uk";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "4000";
		$config['smtp_user']= "register@immsetengahabad.tk"; // isi dengan email kamu
		$config['smtp_pass']= "immsetengahabad"; // isi dengan password kamu
		$config['crlf']="\r\n"; 
		$config['newline']="\r\n"; 
		$config['wordwrap'] = TRUE;
		//memanggil library email dan set konfigurasi untuk pengiriman email


        $this->load->view('web/head', $data);
        $this->load->view('web/footer');
		$this->email->initialize($config);
		//konfigurasi pengiriman
		$this->email->from($config['smtp_user']);
		$this->email->to($email);
		$this->email->subject("Verifikasi Akun IMM Setengah Abad");
		$this->email->message(
			"<h2>IMM Setengah Abad</h2>
        <hr>
<p>Terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik dibawah ini.<p>
<a href='".site_url("register/verification/$encrypted_id")."'>Aktifkan</a>
<hr>
<a href='http://facebook.com/immsetengahabad'>Facebook</a> | <a href='http://twitter.com/immsetengahabad'>Twitter</a>"
		);

		if($this->email->send())
		{
			echo "<div class='register'><br><br><br><br><p>Alhamdulillah, berhasil melakukan registrasi, silahkan cek email Immawan/Immawati.</p></div>";
		}else
		{
			echo "<div class='register'><br><br><br><br><p>Berhasil melakukan registrasi, namun gagal mengirim verifikasi email. Silahkan cek alamat emailnya.</p></div>";
		}

		echo "<br><br><br><br><br><br><br><br><br>";
	}
	
	public function verification($key)
	{
        $data	= 	array(
            'title'			=> "Registrasi Berhasil | IMM Setengah Abad",
            'description'	=> "Registrasi Berhasil | IMM Setengah Abad",
        );
        $this->load->helper('url');
		$this->load->model('m_register');
        $this->load->view('web/head', $data);

        $this->load->view('web/footer');
		$this->m_register->changeActiveState($key);
		echo "<div class='register'> <br><br><br><h4>Selamat Immawan/Immawati. Akun sudah aktif.</h4> </div>";
		echo "<div class='register'><br><br>Kembali ke <a href='".site_url("login")."'>Beranda</a> untuk Log In.<br><br><br><br><br><br></div>";
	}

    function daftarorregister ()
    {
        $this->load->helper('url');

            $this->load->view('web/head');
            $this->load->view('web/daftarorregister');
    }

}

