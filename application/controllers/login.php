<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('m_site');
    }

    public function logout(){
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        redirect('login');
    }

    function index($offset = 0)
    {
        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'IMM Setengah Abad';
        $this->load->model('m_site');
        $total 					= $this->m_site->artikel_count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'/pages/news/';
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

        $data['kueri']			= $this->m_site->get_all_artikel($per_pg,$offset);

        $data['description']	= 'IMM Setengah Abad';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'Semua Berita';
        $data['teks_kontak']	= $teks_kontak[0]['content'];
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['berita_baru']	= $berita_baru;
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;

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
            redirect('home');
        }

    }

    function tentang ()
    {
        $this->load->helper('text');
        date_default_timezone_set('Asia/Jakarta');

        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $footer2 			= $this->m_site->getConfig('WHERE id_config = 9')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 6')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $download 			=  $this->db->query('select * from download order by id desc limit 4')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

        $data	= 	array(
            'title'			=> strip_tags($home[0]['content']),
            'description'	=> strip_tags($deskripsi[0]['content']),
            'keyword'		=> strip_tags($keyword[0]['content']),
            'footer'		=> strip_tags($footer[0]['content']),
            'logo'			=> strip_tags($logoheader[0]['content']),
            'slider_ar'		=> $slider_ar,
            'berita_baru'	=> $berita_baru,
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
        $this->load->view('web/tentang');
    }

    function viewcontent($cat,$slug = ''){

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


        $data_konten		= $this->m_site->getArtikel("where slug= '$slug'")->result_array();

        $data = array(
            'title'			=> strip_tags($data_konten[0]['title']),
            'description'	=> strip_tags(character_limiter($data_konten[0]['content'], 500)),
            'keyword'		=> strip_tags($data_konten[0]['title']),
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
            'judul'			=> $data_konten[0]['title'],
            'slug'			=> $data_konten[0]['slug'],
            'date'			=> $data_konten[0]['date'],
            'time'			=> $data_konten[0]['time'],
            'author'		=> $data_konten[0]['author'],
            'images'		=> $data_konten[0]['img_header'],
            'content'		=> $data_konten[0]['content'],
            'kategori'		=> $data_konten[0]['category'],
        );
        $this->load->view('web/content', $data);
    }

    function news($offset = 0){

        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'Semua Berita';
        $this->load->model('m_site');
        $total 					= $this->m_site->artikel_count();
        $per_pg = 4;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'/pages/news/';
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

        $data['kueri']			= $this->m_site->get_all_artikel($per_pg,$offset);

        $data['description']	= 'Semua Berita';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'Semua Berita';
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['berita_baru']	= $berita_baru;
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;

        $this->load->view('web/head', $data);
        $this->load->view('web/news');
        $this->load->view('web/footer');
    }

    function pengumuman($offset = 0){

        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'Semua Pengumuman';
        $this->load->model('m_site');
        $total 					= $this->m_site->pengumuman_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'pages/pengumuman/';
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

        $data['kueri']			= $this->m_site->get_all_pengumuman($per_pg,$offset);

        $data['description']	= 'Semua Berita';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'Semua Berita';
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['berita_baru']	= $berita_baru;
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;

        $this->load->view('home/head', $data);
        $this->load->view('home/news');
        $this->load->view('home/footer');
    }


    function elearning($offset = 0){

        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'E-Learning';
        $this->load->model('m_site');
        $total 					= $this->m_site->elearning_count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'pages/elearning/';
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

        $data['kueri']			= $this->m_site->get_all_elearning($per_pg,$offset);

        $data['description']	= 'E-Learning';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'E-Learning';
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['berita_baru']	= $berita_baru;
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;

        $this->load->view('home/head', $data);
        $this->load->view('home/news');
        $this->load->view('home/footer');
    }


    function kontak(){

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
        $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data	= 	array(
            'title'			=> 'Hubungi Kami',
            'description'	=> 'Hubungi Kami',
            'keyword'		=> 'Hubungi Kami',
            'sukses'		=> '',
            'logo'			=> strip_tags($logoheader[0]['content']),
            'footer'		=> $footer[0]['content'],
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
            'link_ex'		=> $link_ex,
            'teks_kontak'	=> $teks_kontak[0]['content'],
            'menu_foot'		=> $menu_foot,
        );
        $this->load->view('home/head', $data);
        $this->load->view('home/contact');
        $this->load->view('home/footer');
    }

    function aksikontak(){

        if($_POST){

            date_default_timezone_set('Asia/Jakarta');

            $fullname		= $this->input->post('fullname');
            $email			= $this->input->post('email');
            $website		= $this->input->post('website');
            $message		= $this->input->post('message');

            $data 		= array(
                'fullname'		=> $fullname,
                'email'			=> $email,
                'website'		=> $website,
                'message'		=> $message,
                'date'			=> date('Y/m/d'),
                'time'			=> date(' H:i:s')
            );

            $this->m_site->insertdata('contact',$data);

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
            $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
            $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

            $data	= 	array(
                'title'			=> 'Hubungi Kami',
                'description'	=> 'Hubungi Kami',
                'keyword'		=> 'Hubungi Kami',
                'sukses'		=> '
						<br /><div class="alert alert-success">
					    	<strong>Berhasil!</strong> Pesan anda telah terkirim ke kotak masuk kami.
					    </div>
					',
                'logo'			=> strip_tags($logoheader[0]['content']),
                'footer'		=>  $footer[0]['content'],
                'footer'		=> $footer[0]['content'],
                'menu'			=> $this->m_site->GetParentMenu(),
                'uri1'			=> $this->uri->segment(2),
                'uri2'			=> $this->uri->segment(3),
                'link_ex'		=> $link_ex,
                'teks_kontak'	=> $teks_kontak[0]['content'],
                'menu_foot'		=> $menu_foot,
            );

            $this->load->view('home/head', $data);
            $this->load->view('home/contact');
            $this->load->view('home/footer');

        }
        else {
            echo "Dont Search Me :'(";
        }

    }

    function pesan_barang(){

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
        $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data	= 	array(
            'title'			=> 'Pesan Barang',
            'description'	=> 'Pesan Barang',
            'keyword'		=> 'Pesan Barang',
            'sukses'		=> '',
            'logo'			=> strip_tags($logoheader[0]['content']),
            'footer'		=> $footer[0]['content'],
            'menu'			=> $this->m_site->GetParentMenu(),
            'uri1'			=> $this->uri->segment(2),
            'uri2'			=> $this->uri->segment(3),
            'link_ex'		=> $link_ex,
            'teks_kontak'	=> $teks_kontak[0]['content'],
            'menu_foot'		=> $menu_foot,
        );
        $this->load->view('home/head', $data);
        $this->load->view('home/pesan_barang');
        $this->load->view('home/footer');
    }

    function pesan_barang_terkirim(){

        if($_POST){

            date_default_timezone_set('Asia/Jakarta');

            $nama   		= $this->input->post('nama');
            $no_hape		= $this->input->post('no_hape');
            $kode_barang	= $this->input->post('kode_barang');
            $jumlah 		= $this->input->post('jumlah');
            $alamat 		= $this->input->post('alamat');
            $kirim_lewat	= $this->input->post('kirim_lewat');

            $data 		= array(
                'nama'		    => $nama,
                'no_hape'		=> $no_hape,
                'kode_barang'	=> $kode_barang,
                'jumlah'		=> $jumlah,
                'alamat'		=> $alamat,
                'kirim_lewat'	=> $kirim_lewat,
                'date'			=> date('Y/m/d'),
                'time'			=> date(' H:i:s')
            );

            $this->m_site->insertdata('pesan_barang',$data);

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
            $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
            $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();

            $data	= 	array(
                'title'			=> 'Pesan Barang',
                'description'	=> 'Pesan Barang',
                'keyword'		=> 'Pesan Barang',
                'sukses'		=> '
						<br /><div class="alert alert-success">
					    	<strong>Berhasil!</strong> Anda telah memesan barang dan akan segera kami proses.
					    </div>
					',
                'logo'			=> strip_tags($logoheader[0]['content']),
                'footer'		=>  $footer[0]['content'],
                'footer'		=> $footer[0]['content'],
                'menu'			=> $this->m_site->GetParentMenu(),
                'uri1'			=> $this->uri->segment(2),
                'uri2'			=> $this->uri->segment(3),
                'link_ex'		=> $link_ex,
                'teks_kontak'	=> $teks_kontak[0]['content'],
                'menu_foot'		=> $menu_foot,
            );

            $this->load->view('home/head', $data);
            $this->load->view('home/pesan_barang');
            $this->load->view('home/footer');

        }
        else {
            echo "Dont Search Me :'(";
        }

    }



    function daftar_komunitasadd(){

        date_default_timezone_set('Asia/Jakarta');
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
        $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $data	= 	array(
            'description'	    => 'Daftar Komunitas',
            'keyword'		    => 'Daftar Komunitas',
            'title'			    => 'Daftar Komunitas',
            'status'		    => 'baru',
            'kode'			    => '',
            'nama'	            => '',
            'alamat'		    => '',
            'no_hape'		    => '',
            'alamat_komunitas'	=> '',
            'logo'			    => strip_tags($logoheader[0]['content']),
            'footer'		    => $footer[0]['content'],
            'menu'			    => $this->m_site->GetParentMenu(),
            'uri1'			    => $this->uri->segment(2),
            'uri2'			    => $this->uri->segment(3),
            'link_ex'		    => $link_ex,
            'menu_foot'		    => $menu_foot,
        );


        $this->load->view('home/head',$data);
        $this->load->view('home/daftar_komunitas');
        $this->load->view('home/footer');
    }

    function daftar_komunitassave(){
        if($_POST){

            $kode			    = $this->input->post('kode');
            $nama	    	    = $this->input->post('nama');
            $no_hape 		    = $this->input->post('no_hape');
            $foto			    = $this->input->post('foto');
            $status			    = $this->input->post('status');
            $cv 			    = $this->input->post('cv');
            $alamat 	        = $this->input->post('alamat');
            $nama_komunitas	    = $this->input->post('nama_komunitas');
            $alamat_komunitas   = $this->input->post('alamat_komunitas');

            if($status == 'baru'){

                // Foto Karyawan

                if($_FILES['foto']['name'] != ""){
                    $config['upload_path'] = 'file/dosen';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = '2000';
                    $config['remove_spaces'] = false;
                    $config['overwrite'] = true;
                    $config['encrypt_name'] = false;
                    $config['max_width']  = '';
                    $config['max_height']  = '';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                        print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
                        exit();
                    }
                    else
                    {
                        $image = $this->upload->data();
                        if ($image['file_name'])
                        {
                            $data['file1'] = $image['file_name'];
                        }
                        $foto = $data['file1'];
                    }
                }

                // CV Karyawan

                if($_FILES['cv']['name'] != ""){
                    $config['upload_path'] = 'file/cv';
                    $config['allowed_types'] = 'pdf|docx|doc';
                    $config['max_size'] = '2000';
                    $config['remove_spaces'] = false;
                    $config['overwrite'] = false;
                    $config['encrypt_name'] = false;
                    $config['max_width']  = '';
                    $config['max_height']  = '';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('cv'))
                    {
                        print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
                        exit();
                    }
                    else
                    {
                        $image = $this->upload->data();
                        if ($image['file_name'])
                        {
                            $data['file1'] = $image['file_name'];
                        }
                        $cv = $data['file1'];
                    }
                }


                $data = array(
                    'nama' 		        => $nama,
                    'no_hape'			=> $no_hape,
                    'foto'				=> $foto,
                    'cv'				=> $cv,
                    'alamat'	        => $alamat,
                    'nama_komunitas'    => $nama_komunitas,
                    'alamat_komunitas'  => $alamat_komunitas,
                );
                $this->m_site->insertdata('data_dosen',$data);
                redirect('pages/news');

            }
            else {


                $this->db->where('id',$kode);
                $query 	= $this->db->get('data_dosen');
                $row	= $query->row();

                unlink("./file/dosen/$row->foto");

                // Foto Karyawan
                if($_FILES['foto']['name'] != ""){
                    $config['upload_path'] = 'file/dosen';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = '2000';
                    $config['remove_spaces'] = false;
                    $config['overwrite'] = true;
                    $config['encrypt_name'] = false;
                    $config['max_width']  = '';
                    $config['max_height']  = '';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('foto'))
                    {
                        print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
                        exit();
                    }
                    else
                    {
                        $image = $this->upload->data();
                        if ($image['file_name'])
                        {
                            $data['file1'] = $image['file_name'];
                        }
                        $foto = $data['file1'];
                    }
                }

                $this->db->where('id',$kode);
                $query 	= $this->db->get('data_dosen');
                $row	= $query->row();

                unlink("./file/cv/$row->cv");

                // CV Karyawan

                if($_FILES['cv']['name'] != ""){
                    $config['upload_path'] = 'file/cv';
                    $config['allowed_types'] = 'pdf|docx|doc';
                    $config['max_size'] = '2000';
                    $config['remove_spaces'] = false;
                    $config['overwrite'] = true;
                    $config['encrypt_name'] = false;
                    $config['max_width']  = '';
                    $config['max_height']  = '';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('cv'))
                    {
                        print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
                        exit();
                    }
                    else
                    {
                        $image = $this->upload->data();
                        if ($image['file_name'])
                        {
                            $data['file1'] = $image['file_name'];
                        }
                        $cv = $data['file1'];
                    }
                }

                $data = array(
                    'nama' 		        => $nama,
                    'no_hape'			=> $no_hape,
                    'foto'				=> $foto,
                    'cv'				=> $cv,
                    'alamat'	        => $alamat,
                    'nama_komunitas'    => $nama_komunitas,
                    'alamat_komunitas'  => $alamat_komunitas,
                );

                $this->m_site->updatedata('data_dosen',$data,array('id' => $kode));
                redirect('pages/news');

            }

        }
        else {
            echo "Page Not Found";
        }
    }

    function galleri($offset = 0){

        $this->load->helper('text');
        $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
        $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
        $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
        $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
        $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
        $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
        $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
        $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
        $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
        $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
        $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();



        $data['base'] 			= $this->config->item('base_url');
        $data['title'] 			= 'Album Foto';
        $this->load->model('m_site');
        $total 					= $this->m_site->Album_Count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $this->load->library('pagination');

        $config['base_url']			= $data['base'].'pages/album/';
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

        $data['kueri']			= $this->m_site->getAllAlbum($per_pg,$offset);

        $data['description']	= 'Album Foto';
        $data['menu']			= $this->m_site->GetParentMenu();
        $data['footer']			= $footer[0]['content'];
        $data['uri1']			= $this->uri->segment(2);
        $data['uri2']			= $this->uri->segment(3);
        $data['keyword']		= 'Album Foto';
        $data['logo']			= strip_tags($logoheader[0]['content']);
        $data['footer']			= strip_tags($footer[0]['content']);
        $data['berita_baru']	= $berita_baru;
        $data['galeri']			= $galeri;
        $data['link_ex']		= $link_ex;
        $data['menu_foot']		= $menu_foot;



        $this->load->view('home/head',$data);
        $this->load->view('home/galeri');
        $this->load->view('home/footer');

    }

    function galleri_detail($kode = 0){


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
        $teks_kontak		= $this->m_site->getConfig('WHERE id_config = 8')->result_array();
        $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


        $galeri_detail 		= $this->db->query('select * from galery where id_album = "'.$kode.'"')->result_array();

        if($galeri_detail[0]['id_album'] == '')
        {
            redirect('/lost');
        }
        else
        {
            $nama_album 		= $this->db->query('select * from album_foto where id = "'.$galeri_detail[0]['id_album'].'"')->result_array();

            $data	= 	array(
                'title'			=> 'Album Foto > '. $nama_album[0]['nama_album'],
                'description'	=> 'Album Foto > ',
                'keyword'		=> 'Album Foto > ',
                'logo'			=> strip_tags($logoheader[0]['content']),
                'footer'		=> $footer[0]['content'],
                'menu'			=> $this->m_site->GetParentMenu(),
                'uri1'			=> $this->uri->segment(2),
                'uri2'			=> $this->uri->segment(3),
                'link_ex'		=> $link_ex,
                'teks_kontak'	=> $teks_kontak[0]['content'],
                'berita_baru'	=> $berita_baru,
                'menu_foot'		=> $menu_foot,
                'galeri'		=> $galeri_detail,
            );
            $this->load->view('home/head', $data);
            $this->load->view('home/detail_galery');
            $this->load->view('home/footer');

        }

    }



    function data_kosong()
    {
        $this->load->view('web/data_kosong');
    }

    function cari(){

        if($_GET){

            $query = $this->input->get_post('s',TRUE);

            $data['cari']	= $this->db->query('select * from artikel WHERE title LIKE  "%'.$query.'%" ')->result();

            $this->load->helper('text');
            $logoheader			= $this->m_site->getConfig('WHERE id_config = 1')->result_array();
            $deskripsi 			= $this->m_site->getConfig('WHERE id_config = 3')->result_array();
            $keyword 			= $this->m_site->getConfig('WHERE id_config = 4')->result_array();
            $home 				= $this->m_site->getConfig('WHERE id_config = 2')->result_array();
            $footer 			= $this->m_site->getConfig('WHERE id_config = 10')->result_array();
            $slider_ar 			= $this->db->query('select * from artikel where category= "news" order by rand() limit 3')->result_array();
            $berita_baru		= $this->db->query('select * from artikel where category= "news" order by id desc limit 3')->result_array();
            $berita_kampus 		= $this->db->query('select * from artikel where category= "kampus" order by id desc limit 3')->result_array();
            $pengumuman 		= $this->db->query('select * from artikel where category= "pengumuman" order by id desc limit 3')->result_array();
            $galeri 			= $this->db->query('select * from galery where kategori = 1 and status = 1 order by id desc limit 8')->result_array();
            $link_ex 			= $this->db->query('select * from link_external order by id desc limit 5')->result_array();
            $menu_foot 			= $this->db->query('select * from menu where parent_id = 0 and view_type = 4  order by menu_id asc limit 5')->result_array();


            $data['title'] 			= 'Pencarian';
            $data['description']	= 'Pencarian';
            $data['menu']			= $this->m_site->GetParentMenu();
            $data['footer']			= $footer[0]['content'];
            $data['uri1']			= $this->uri->segment(2);
            $data['uri2']			= $this->uri->segment(3);
            $data['keyword']		= 'Pencarian Berita';
            $data['logo']			= strip_tags($logoheader[0]['content']);
            $data['footer']			= strip_tags($footer[0]['content']);
            $data['berita_baru']	= $berita_baru;
            $data['galeri']			= $galeri;
            $data['link_ex']		= $link_ex;
            $data['t_se']			= $this->input->get_post('s',TRUE);
            $data['menu_foot']		= $menu_foot;

            if($data['cari'] == null){

                $data['kosong']			= 'Maaf, silahkan cari dengan kata lain.';
                $this->load->view('web/head', $data);
                $this->load->view('web/cari');
                $this->load->view('web/footer');
            }
            else {

                $data['kosong']			= '';

                $this->load->view('web/head', $data);
                $this->load->view('web/cari');
                $this->load->view('web/footer');

            }
        }
        else {
            redirect('Not_Found');
        }


    }

}

