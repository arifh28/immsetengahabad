<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Register extends CI_Controller {

    public function index()
    {

        $this->load->helper('form');

        $data	= 	array(
            'title'			=> "Registrasi | IMM Setengah Abad",
            'description'	=> "Registrasi | IMM Setengah Abad",
        );
		$this->load->view('web/v_register', $data);
        $this->load->view('web/footer');
    }
	
	public function submit(){
		//passing post data dari view
		$this->load->helper(array('form', 'url'));
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		
		//memasukan ke array
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email,
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
		$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "400";
		$config['smtp_user']= "arif.hidayat28@gmail.com"; // isi dengan email kamu
		$config['smtp_pass']= "Syahida123"; // isi dengan password kamu
		$config['crlf']="\r\n"; 
		$config['newline']="\r\n"; 
		$config['wordwrap'] = TRUE;
		//memanggil library email dan set konfigurasi untuk pengiriman email


        $this->load->view('web/v_register2', $data);
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
			echo "<br><br><br><br><p>Alhamdulillah, berhasil melakukan registrasi, silahkan cek email Immawan/Immawati.</p>";
		}else
		{
			echo "<br><br><br><br><p>Berhasil melakukan registrasi, namun gagal mengirim verifikasi email. Silahkan cek alamat emailnya.</p>";
		}
		
		echo "<br><br><br>Kembali ke <a href='".site_url("login")."'>Beranda</a> untuk Log In.<br><br><br><br><br><br>";
	}
	
	public function verification($key)
	{
        $data	= 	array(
            'title'			=> "Registrasi Berhasil | IMM Setengah Abad",
            'description'	=> "Registrasi Berhasil | IMM Setengah Abad",
        );
        $this->load->helper('url');
		$this->load->model('m_register');
        $this->load->view('web/v_register2', $data);
        $this->load->view('web/footer');
		$this->m_register->changeActiveState($key);
		echo "<br><br><br><p>Selamat Immawan/Immawati. Akun sudah aktif.</p>";
		echo "<br><br>Kembali ke <a href='".site_url("login")."'>Beranda</a> untuk Log In.<br><br><br><br><br><br>";
	}
}

