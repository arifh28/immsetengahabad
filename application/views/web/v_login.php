<div class="main">
    <div class="page_container">
        <div id="immersive_slider">
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide1_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.bucketlistly.com" target="_blank">
                        <img src="<?php echo base_url();?>assets/web/images/slide1.jpg" alt="Slider 1">
                    </a>
                </div>
            </div>
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide2_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.bucketlistly.com/apps" target="_blank">BucketListly Apps</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="<?php echo base_url();?>assets/web/images/slide2.jpg" alt="Slider 1"></a>
                </div>
            </div>
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide3_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.thepetedesign.com" target="_blank">The Pete Design</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.thepetedesign.com" target="_blank"><img src="<?php echo base_url();?>assets/web/images/slide3.jpg" alt="Slider 1"></a>
                </div>
            </div>

            <a href="#" class="is-prev">&laquo;</a>
            <a href="#" class="is-next">&raquo;</a>
        </div>
    </div>
</div>
<section id="login">
<div class="alert alert-danger fade in">
    <a class="close" data-dismiss="alert" href="#">&times;</a>
    <div class="container">
        <div class="col-md-12">
            <h2>Log In</h2>
            <hr>
        </div>
        <div class="row">
        <div class="col-md-8">
            <p>Untuk mendapatkan Info Perkaderan IMM Se-Nusantara dan membaca Tanfidz XVI IMM secara online silahkan Immawan/Immawati
                Log In terlebih dahulu.</p>
            <p>Jika belum punya Akun, silahkan membuatnya dengan Registrasi terlebih dahulu.</p>
            <a href="<?php echo base_url();?>index.php/register" class="btn btn-login btn-primary">Registrasi</a>
        </div>
        <div class="col-md-4">
            <form method="post" action="<?php echo base_url();?>index.php/login_validation" class="form-group" style="width: 320px;">
                <div class="form-group has-feedback left">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <i class="fa fa-user form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <i class="fa fa-key form-control-feedback"></i>
            </div>
            <button class="btn btn-primary pull-right" type="submit">SUBMIT</button>
            <?php
            if($this->input->get('gagal')==1){
            ?>
            <span>Username atau password salah</span>
            <?php
            }
            ?>
            </form>
        </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>
</section>
<section id="tentang">
    <div class="container">
        <div class="col-md-12">
            <h1>IMM Setengah Abad</h1>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo base_url();?>" class="img-responsive ipad-image img-center" alt="">
            </div>
            <div class="col-md-7">
                <div class="media media-circle">
                    <a class="pull-left" href="#">
                        <i class="fa fa-heart fa-2x"></i>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Tentang Cinta IMM</h4>
                        <p>Tidak ada yang lebih indah dari cinta selain IMM.</p>
                    </div>
                </div>
                <div class="media media-circle">
                    <a class="pull-left" href="#">
                        <i class="fa fa-pencil-square-o fa-2x"></i>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Desain dan Digital Kreatif</h4>
                        <p>Kami membagikan desain dan dunia digital IMM secara kreatif.</p>
                    </div>
                </div>
                <div class="media media-circle">
                    <a class="pull-left" href="#">
                        <i class="fa fa-book fa-2x"></i>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Ilmu Amaliyah Amal Ilmiyah</h4>
                        <p>Menerapkan ilmu dengan benar dan tepat untuk IMM.</p>
                    </div>
                </div>
                <div class="media media-circle">
                    <a class="pull-left" href="#">
                        <i class="fa fa-comments fa-2x"></i>
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Ramah dengan Kader</h4>
                        <p>Kami berusaha untuk selalu aktif terhadap kader IMM. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="deklarasi">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="member">
                        <div class="member-image">
                            <img src="<?php echo base_url();?>assets/web/images/1.jpg" alt="" class="img-responsive img-center">
                            <div class="member-details">
                                <h4>Connect with me</h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                            </div>
                        </div>
                        <div class="member-name">
                            <h4>Sara jones</h4>
                            <p>Art Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="member scrollpoint sp-effect3">
                        <div class="member-image">
                            <img src="<?php echo base_url();?>assets/web/images/2.jpg" alt="" class="img-responsive img-center">
                            <div class="member-details">
                                <h4>Connect with me</h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                            </div>
                        </div>
                        <div class="member-name member-odd">
                            <h4>jon Doe</h4>
                            <p>UI Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="member">
                        <div class="member-image">
                            <img src="<?php echo base_url();?>assets/web/images/3.jpg" alt="" class="img-responsive img-center">
                            <div class="member-details">
                                <h4>Connect with me</h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                            </div>
                        </div>
                        <div class="member-name">
                            <h4>Sam jones</h4>
                            <p>Design Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="member">
                        <div class="member-image">
                            <img src="<?php echo base_url();?>assets/web/images/4.jpg" alt="" class="img-responsive img-center">
                            <div class="member-details">
                                <h4>Connect with me</h4>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                            </div>
                        </div>
                        <div class="member-name member-odd">
                            <h4>Sofia jones</h4>
                            <p>IT Manager</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="imm">
  <div class="container">
    <div class="section-heading">
        <h1>Tri kompetensi IMM</h1>
        <hr>
        <h3>Tiga dasar dalam mengemban misi gerakan Ikatan Mahasiswa Muhammadiyah.</h3>
    </div>
        <div class="list religi">
            <div class="media media-circle">
                <img src="<?php echo base_url();?>assets/web/images/religiusitas.png" alt="" class="pull-left">
                <div class="media-body">
                    <h2 class="media-heading">Religiusitas</h2>
                    <h4>Sebagai organisasi kader yang berintikan nilai-nilai religiusitas, IMM senantiasa memberikan pembaruan keagamaan
                        menyangkut pemahaman pemikiran dan realisasinya, dengan kata lain <strong>menolak kejumudan.</strong> Menjadikan
                        Islam dalam setiap proses sebagai idealitas sekaligus jiwa yang menggerakan.</h4>
                </div>
            </div>
        </div>
        <div class="list intelek">
            <div class="media media-circle">
                <img src="<?php echo base_url();?>assets/web/images/intelektualitas.png" alt="" class="pull-left">
                <div class="media-body">
                    <h2 class="media-heading">Intelektualitas</h2>
                    <h4>Dalam tataran intelektual IMM berproses untuk menjadi <i>"centre of excellent"</i>, pusat-pusat keunggulan teruatama
                    sisi intelektual. Organisasi ini diorientasikan menjadi sumber ide-ide segar bagi pembaruan. Sebagai kelompok intelektual,
                    kader IMM harus berpikir universal tanpa sekat eksklusivisme.</h4>
                </div>
            </div>
        </div>
        <div class="list humanis">
            <div class="media media-circle">
                <img src="<?php echo base_url();?>assets/web/images/humanitas.png" alt="" class="pull-left">
                <div class="media-body">
                    <h2 class="media-heading">Humanitas</h2>
                    <h4>Perubahan tidak dapat terwujud hanya dengan segudang konsepsi. Yang tak kalah pentingnya adalah perjuangan untuk
                    mewujudkan idealitas (manifestasi gerakan). Kader IMM harus senantiasa berorientasi objektif, agar idealitas dapat
                    diwujudkan dalam realitas.</h4>
                </div>
            </div>
        </div>
  </div>
</section>

<section id="tanfidz">
    <div class="container">
            <div class="col-md-6">
                <div class="list"><p>Coba dulu</p></div>
            </div>
            <div class="col-md-6">
                <div class="list"><p>Coba dulu</p></div>
            </div>
    </div>
    <p>Percobaan</p>
</section>


