<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Home extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_site');
    }

    public function index($offset = 0)
    {

        $this->load->helper('text');
        $this->load->library('session');
        $this->load->helper('url');

        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $footer2 			= $this->m_site->getConfig('WHERE id_config = 9')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $perkaderan  		= $this->db->query('select * from perkaderan order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $download 			=  $this->db->query('select * from download order by id desc limit 4')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

        $data	= 	array(
            'title'			=> 'IMM Setengah Abad',
            'description'	=> 'IMM Setengah Abad',
            'keyword'		=> strip_tags($keyword[0]['content']),
            'footer'		=> strip_tags($footer[0]['content']),
            'logo'			=> strip_tags($logoheader[0]['content']),
            'perkaderan'	=> $perkaderan,
            'berita_kampus'	=> $berita_kampus,
            'pengumuman'	=> $pengumuman,
            'galeri'		=> $galeri,
            'download'		=> $download,
            'link_ex'		=> $link_ex,
            'menu_foot'		=> $menu_foot,
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
        );

        if($this->session->userdata('login'))
        {

            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
			$data['email'] = $session['email'];
			$data['active'] = $session['active'];

            $this->load->view('web/v_home', $data);

        }else{
            redirect('login');
        }
    }

    public function tanfidzangda ()
    {

        $this->load->helper('text');
        $this->load->library('session');
        $this->load->helper('url');

        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $footer2 			= $this->m_site->getConfig('WHERE id_config = 9')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $perkaderan  		= $this->db->query('select * from perkaderan order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $download 			=  $this->db->query('select * from download order by id desc limit 4')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

        $data	= 	array(
            'title'			=> 'Anggaran Dasar | Tanfidz Muktamar XVI',
            'description'	=> 'Anggaran Dasar | Tanfidz Muktamar XVI',
            'keyword'		=> strip_tags($keyword[0]['content']),
            'footer'		=> strip_tags($footer[0]['content']),
            'logo'			=> strip_tags($logoheader[0]['content']),
            'perkaderan'	=> $perkaderan,
            'berita_kampus'	=> $berita_kampus,
            'pengumuman'	=> $pengumuman,
            'galeri'		=> $galeri,
            'download'		=> $download,
            'link_ex'		=> $link_ex,
            'menu_foot'		=> $menu_foot,
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
        );

        if($this->session->userdata('login'))
        {

            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
            $data['email'] = $session['email'];
            $data['active'] = $session['active'];

            $this->load->view('web/tanfidz/angda', $data);

        }else{
            redirect('login');
        }
    }

    public function tanfidzangru ()
    {

        $this->load->helper('text');
        $this->load->library('session');
        $this->load->helper('url');

        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $footer2 			= $this->m_site->getConfig('WHERE id_config = 9')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $perkaderan  		= $this->db->query('select * from perkaderan order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $download 			=  $this->db->query('select * from download order by id desc limit 4')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

        $data	= 	array(
            'title'			=> 'Anggaran Rumah Tangga | Tanfidz Muktamar XVI',
            'description'	=> 'Anggaran Rumah Tangga | Tanfidz Muktamar XVI',
            'keyword'		=> strip_tags($keyword[0]['content']),
            'footer'		=> strip_tags($footer[0]['content']),
            'logo'			=> strip_tags($logoheader[0]['content']),
            'perkaderan'	=> $perkaderan,
            'berita_kampus'	=> $berita_kampus,
            'pengumuman'	=> $pengumuman,
            'galeri'		=> $galeri,
            'download'		=> $download,
            'link_ex'		=> $link_ex,
            'menu_foot'		=> $menu_foot,
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
        );

        if($this->session->userdata('login'))
        {

            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
            $data['email'] = $session['email'];
            $data['active'] = $session['active'];

            $this->load->view('web/tanfidz/angru', $data);

        }else{
            redirect('login');
        }
    }

    function perkaderan ($offset = 0){
        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();

        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'Semua Perkaderan';
        $this->load->model('m_site');
        $total 					= $this->m_site->Perkaderan_Count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'/pages/perkaderan/';
        $config['total_rows']		= $total;
        $config['per_page']			= $per_pg;
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</ul></div>';

        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['pagination']		= $this->pagination->create_links();

        $data['kueri']			= $this->m_site->getAllPerkaderan($per_pg,$offset);

        $data['description']	= 'Semua Perkaderan';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'Data Dosen';
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;

        if($this->session->userdata('login'))
        {

            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
            $data['email'] = $session['email'];
            $data['active'] = $session['active'];

            $this->load->view('web/head',$data);
            $this->load->view('web/perkaderan');
            $this->load->view('web/footer');

        }else{
            redirect('login');
        }

    }

    function viewperkaderan($cat,$slug = ''){

        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 4')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data_konten		= $this->m_site->getPerkaderan("where slug= '$slug'")->result_array();

        $data = array(
            'nama'			=> strip_tags($data_konten[0]['nama']),
            'description'	=> strip_tags(character_limiter($data_konten[0]['nama'], 500)),
            'keyword'		=> strip_tags($data_konten[0]['nama']),
            'logo'			=> strip_tags($logoheader[0]['content']),
            'footer'		=>  $footer[0]['content'],
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
            'berita_baru'	=> $berita_baru,
            'galeri'		=> $galeri,
            'link_ex'		=> $link_ex,
            'menu_foot'		=> $menu_foot,
            'kode'			=> $data_konten[0]['id'],
            'slug'			=> $data_konten[0]['slug'],
            'judul'			=> $data_konten[0]['nama'],
            'cv'		    => $data_konten[0]['cv'],
            'foto'  		=> $data_konten[0]['foto'],
            'content'		=> $data_konten[0]['isi'],
            'pelaksanaan'	=> $data_konten[0]['tanggal'],
            'category'		=> $data_konten[0]['category'],
            'penyelenggara'	=> $data_konten[0]['penyelenggara'],
        );

        if($this->session->userdata('login'))
        {

            //mengambil nama dari session
            $session = $this->session->userdata('login');
            $data['nama'] = $session['nama'];
            $data['email'] = $session['email'];
            $data['active'] = $session['active'];

            $this->load->view('web/head',$data);
            $this->load->view('web/contentperkaderan');
            $this->load->view('web/footer');

        }else{
            redirect('login');
        }
    }

}