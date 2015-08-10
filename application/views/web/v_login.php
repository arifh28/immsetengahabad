<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'IMM Setengah Abad' ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo isset($description) ? $description : 'IMM Setengah Abad' ; ?>" />
    <meta name="keyword" content="<?php echo isset($keyword) ? $keyword : 'imm, muhammadiyah' ; ?>">
    <meta name="author" content="Arif Fasco Hidayat" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/jquery.easy-pie-chart.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/styles.css" title="mainStyle">

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/js/rs-plugin/css/settings.css" media="screen" />

    <script src="<?php echo base_url();?>assets/web/js/modernizr.custom.32033.js"></script>

    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div class="pre-loader">
    <div class="load-con">
        <img src="img/logo-blue.png" class="animated fadeInDown" alt="">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<div class="go-down">
    <a href="#tentang">
        <i class="fa fa-angle-down fa-3x"></i>
    </a>
</div>
<!-- Wrap all page content here -->
<div id="wrap" class="home">

<header class="masthead">
    <div class="slider-container" id="slider">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                        <!-- MAIN IMAGE -->
                        <img src="img/dummy.png" data-lazyload="<?php echo base_url();?>assets/web/images/slider-bk.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <div class="tp-caption large_white_light sft hidden-xs" data-x="left" data-y="center" data-hoffset="700" data-voffset="-60" data-speed="700" data-start="1300" data-easing="Power4.easeOut">
                            <strong>Berbagi Perkaderan <span style="color: red">IMM</span></strong>
                            <hr>
                        </div>
                        <div class="tp-caption large_white_light sfb hidden-xs" data-x="left" data-y="center" data-hoffset="780" data-voffset="-20" data-speed="700" data-start="1700" data-easing="Power4.easeOut">
                            Nasional
                        </div>
                        <div class="tp-caption large_white_light sfr hidden-xs" data-x="left" data-y="center" data-hoffset="930" data-voffset="-20" data-speed="700" data-start="1900" data-easing="Power4.easeOut">
                            & Regional
                        </div>
                        <div class="tp-caption lfb " data-x="left" data-y="center" data-hoffset="980" data-voffset="15" data-speed="900" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#login" class="btn">Registrasi/Log In  <span class="fa fa-angle-right"></span></a>
                        </div>

                    </li>
                    <li data-transition="papercut" data-slotamount="7" data-masterspeed="500">
                        <!-- MAIN IMAGE -->
                        <img src="img/dummy.png" data-lazyload="<?php echo base_url();?>assets/web/images/slider-bk3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_white_light sft hidden-xs" data-x="left" data-y="center" data-hoffset="50" data-voffset="-20" data-speed="700" data-start="1300" data-easing="Power4.easeOut">
                            <strong>Desain dan Digital Kreatif <span style="color: red">IMM</span></strong>
                            <hr>
                        </div>


                        <div class="caption lft ltb"
                             data-x="600"
                             data-y="50"
                             data-speed="600"
                             data-start="1100"
                             data-easing="easeOutExpo" data-end="3100" data-endspeed="600" data-endeasing="easeInSine" ><img src="<?php echo base_url();?>assets/web/images/macbook-bl.png" class="macbook-image" alt=""></div>

                        <div class="caption sft stb"
                             data-x="720"
                             data-y="290"
                             data-speed="300"
                             data-start="1400"
                             data-easing="easeOutExpo" data-end="3300" data-endspeed="300" data-endeasing="easeInSine" ><h2><span style="background-color: #c60000">Aplikasi Tanfidz</span></h2></div>

                        <div class="caption sfb stb"
                             data-x="720"
                             data-y="330"
                             data-speed="300"
                             data-start="1700"
                             data-easing="easeOutExpo" data-end="3200" data-endspeed="300" data-endeasing="easeInSine" ><h3><span style="background-color: #c60000">Lihat</span></h3></div>

                        <div class="caption lft ltb"
                             data-x="600"
                             data-y="50"
                             data-speed="600"
                             data-start="3600"
                             data-easing="easeOutExpo" data-end="5600" data-endspeed="600" data-endeasing="easeInSine" ><img src="<?php echo base_url();?>assets/web/images/macbook-bl.png" class="macbook-image" alt=""></div>

                        <div class="caption bold_brown_text sft stb"
                             data-x="720"
                             data-y="290"
                             data-speed="300"
                             data-start="3900"
                             data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine" ><h2><span style="background-color: #c60000">COKE & RUM</span></h2></div>

                        <div class="caption big_black sfb stb"
                             data-x="720"
                             data-y="330"
                             data-speed="300"
                             data-start="4200"
                             data-easing="easeOutExpo" data-end="5700" data-endspeed="300" data-endeasing="easeInSine" ><h3><span style="background-color: #c60000">$ 5.99</span></h3></div>

                        <div class="caption lft ltb"
                             data-x="600"
                             data-y="50"
                             data-speed="600"
                             data-start="6100"
                             data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine" ><img src="<?php echo base_url();?>assets/web/images/macbook-bl.png" class="macbook-image" alt=""></div>

                        <div class="caption bold_green_text sft stb"
                             data-x="720"
                             data-y="290"
                             data-speed="300"
                             data-start="6400"
                             data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine" >MOJITO COCTAIL</div>

                        <div class="caption big_black sfb stb"
                             data-x="720"
                             data-y="320"
                             data-speed="300"
                             data-start="6700"
                             data-easing="easeOutExpo" data-end="8200" data-endspeed="300" data-endeasing="easeInSine" >$ 6.79</div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>

    </div>
    <section id="atas">
        <li class="social-nav visible-lg">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </li>
    </section>

    <!-- Fixed navbar -->
    <div class="navbar navbar-static-top" id="nav" role="navigation">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img src="<?php echo base_url();?>assets/web/images/imm_setengah_abad.png" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#slider">Home</a>
                    </li>
                    <li><a href="#deklarasi">Artikel</a>
                    </li>
                    <li><a href="#login">log in</a>
                    </li>
                    <li><a href="#tentang">tentang</a>
                    </li>
                    <li><a href="#imm">IMM</a>
                    </li>
                    <li><a href="#tanfidz">tanfidz</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!--/.container -->
    </div>
    <!--/.navbar -->

</header>

<section id="deklarasi">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="row">
                    <div class="member scrollpoint sp-effect3">
                        <?php foreach ($berita_kampus as $b): ?>
                        <div class="member-image">
                            <img src="<?php echo base_url(); ?>file/blog/<?=$b['img_header']?>" alt="" class="img-responsive img-center">
                            <div class="member-details">
                                <?php
                                $tanggal        = $b['date'];
                                $namahari       = date('D',strtotime($tanggal));

                                if ($namahari == "Sunday") $namahari = "Minggu";
                                else if ($namahari == "Mon") $namahari = "Senin";
                                else if ($namahari == "Tue") $namahari = "Selasa";
                                else if ($namahari == "Wed") $namahari = "Rabu";
                                else if ($namahari == "Thu") $namahari = "Kamis";
                                else if ($namahari == "Fri") $namahari = "Jumat";
                                else if ($namahari == "Sat") $namahari = "Sabtu";
                                ?>
                                <p><?=$namahari ?>, <?=$b['date']?></p>
                            </div>
                        </div>
                        <div class="member-name">
                            <h4><a href="<?php echo base_url(); ?>content/<?=$b['category']?>/<?=$b['slug']?>"><?=$b['title']?></a></h4>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="login">

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
                <a href="<?php echo base_url();?>register" class="btn btn-login btn-primary">Registrasi</a>
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
</section>
<section id="tentang">
    <div class="container">
        <div class="col-md-12">
            <h1>IMM Setengah Abad</h1>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo base_url();?>assets/web/images/immawati.png" class="img-responsive ipad-image img-center" alt="">
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

<section id="imm">
    <div class="container">
        <div class="section-heading">
            <h1>Tri kompetensi <span style="color: #ff0000">IMM</span></h1>
            <hr>
            <h3>Tiga dasar dalam mengemban misi gerakan Ikatan Mahasiswa Muhammadiyah.</h3>
        </div>
        <div class="list religi">
            <div class="media media-circle">
                <img src="<?php echo base_url();?>assets/web/images/religiusitas.png" alt="" class="pull-left">
                <div class="media-body">
                    <h2 class="media-heading">Religiusitas</h2>
                    <h4>Sebagai organisasi kader yang berintikan nilai-nilai religiusitas, <span style="color: #c60000">IMM</span> senantiasa memberikan pembaruan keagamaan
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
                    <h4>Dalam tataran intelektual <span style="color: #c60000">IMM</span> berproses untuk menjadi <i>"centre of excellent"</i>, pusat-pusat keunggulan teruatama
                        sisi intelektual. Organisasi ini diorientasikan menjadi sumber ide-ide segar bagi pembaruan. Sebagai kelompok intelektual,
                        kader <span style="color: #c60000">IMM</span> harus berpikir universal tanpa sekat eksklusivisme.</h4>
                </div>
            </div>
        </div>
        <div class="list humanis">
            <div class="media media-circle">
                <img src="<?php echo base_url();?>assets/web/images/humanitas.png" alt="" class="pull-left">
                <div class="media-body">
                    <h2 class="media-heading">Humanitas</h2>
                    <h4>Perubahan tidak dapat terwujud hanya dengan segudang konsepsi. Yang tak kalah pentingnya adalah perjuangan untuk
                        mewujudkan idealitas (manifestasi gerakan). Kader <span style="color: #c60000">IMM</span> harus senantiasa berorientasi objektif, agar idealitas dapat
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

<footer id="site-footer">
    <div class="container">
        <div class="row">
            <span class="divider grey"></span>
            <h4>2014 Bond<span class="brandy">y</span> Agency.</h4>
            <h5>by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a>
            </h5>
            <a href="#" class="scroll-top">
                <img src="img/top.png" alt="" class="top">
            </a>
        </div>
    </div>
</footer>
</div>
<!--/wrap-->

<script src="<?php echo base_url();?>assets/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/stellar.js"></script>
<script src="<?php echo base_url();?>assets/web/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/jquery.easypiechart.min.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="<?php echo base_url();?>assets/web/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/web/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?php echo base_url();?>assets/web/js/waypoints.min.js"></script>


<script src="<?php echo base_url();?>assets/web/js/script.js"></script>

<script>
    $(document).ready(function() {
        appMaster.preLoader();
        appMaster.smoothScroll();
        appMaster.animateScript();
        appMaster.navSpy();
        appMaster.revSlider();
        appMaster.stellar();
        appMaster.skillsChart();

        appMaster.isoTop();
        appMaster.canvasHack();
    });
</script>

</body>

</html>