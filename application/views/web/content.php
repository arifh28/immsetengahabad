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
    <meta name="author" content="IMM Setengah Abad" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo $judul; ?>" />
    <meta property="og:image"         content="<?php echo base_url(); ?>file/blog/<?=$images ?>" />
    <meta property="og:url" content="<?php echo base_url(); ?>content/<?=$kategori ?>/<?=$slug ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="canonical" href="<?php echo base_url(); ?>content/<?=$kategori ?>/<?=$slug ?>" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.css">


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
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){
            js=d.createElement(s);js.id=id;
            js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);}
    }(document, 'script', 'twitter-wjs');</script>

<section id="nav-head">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-brand">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/web/images/imm_setengah_abad.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-8">
                <div name="search_form" id="sb-search" class="sb-search">
                    <form name="s" method="get" action="<?=base_url(); ?>search">
                        <input class="sb-search-input" placeholder="Cari berita dan artikel lalu tekan Enter" type="text" value="" name="s" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fixed navbar -->
    <div class="row">
        <div class="container">
            <div class="col-md-8">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <ul class="nav navbar-nav navbar-left">

                    <li><a href="<?php echo base_url();?>">HOME</a>
                    </li>
                    <li class="active"><a href="#deklarasi">ARTIKEL</a>
                    </li>
                    <li><a href="#tentang">TENTANG</a>
                    </li>
                    <li><a href="#imm">IMM</a>
                    </li>
                    <li><a href="#tanfidz">TANFIDZ</a>
                    </li>
                </ul>
                <!-- /.navbar-collapse -->
            </div>
            <div class="col-md-4">
                <div class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <!--/.container -->
    </div>
    </div>
</section>
<div id="container" class="intro-effect-fadeout">
    <div class="header">
        <div class="bg-img"><img src="<?php echo base_url(); ?>file/blog/<?=$images ?>" alt="Background Image" /></div>
        <div class="title">
            <h1><?=$judul ?></h1>
            <p class="subline"><?=$kategori ?></p>
            <?php
            $tanggal        = $date;
            $namahari       = date('D',strtotime($tanggal));

            if ($namahari == "Sunday") $namahari = "Ahad";
            else if ($namahari == "Mon") $namahari = "Senin";
            else if ($namahari == "Tue") $namahari = "Selasa";
            else if ($namahari == "Wed") $namahari = "Rabu";
            else if ($namahari == "Thu") $namahari = "Kamis";
            else if ($namahari == "Fri") $namahari = "Jumat";
            else if ($namahari == "Sat") $namahari = "Sabtu";
            ?>
            <p>Oleh <strong>Admin</strong> &#8212; <strong><?=$namahari ?>, <?=$tanggal ?></strong></p>

            <br>
            <br>
            <div class="card__share">
                <?php
                $url = (!empty($_SERVER['HTTPS'])) ? 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                ?>
                <a id="share" class="facebook-content facebook-content-icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>content/<?=$kategori ?>/<?=$slug ?>" target="_blank"></a>
                <a id="share" class="twitter-content twitter-content-icon" href="https://twitter.com/intent/tweet?via=immsetengahabad&url=<?php echo base_url(); ?>content/<?=$kategori ?>/<?=$slug ?>&text=<?=$judul ?>" target="_blank" ></a>
                <a id="share" class="google-plus-content google-plus-content-icon" href="https://plus.google.com/share?url=<?php echo base_url(); ?>content/<?=$kategori ?>/<?=$slug ?>" target="_blank"></a>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row">

        <div class="col-md-9">
        <article class="content">
        <div>
            <p><?=$content ?></p></article>
        </div>
        <div class="col-md-3">
          <p>Ini percobaan</p>
        </div>
</div>
    </div>
</div>
</div><!-- /container -->
<div class="container">
    <div class="col-md-3">

    </div>
    <div class="col-lg-9">
        <?php
        $url = (!empty($_SERVER['HTTPS'])) ? 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        ?>
        <div class="fb-comments" data-href="<?php echo $url; ?>" data-numposts="8"></div>
    </div>
</div>
<footer id="site-footer">
    <div class="container">
        <div class="row">
            <span class="divider grey"></span>
            <h4></h4>
            <a href="#" class="scroll-top">
                <img src="<?php echo base_url();?>assets/themes/web/img/top.png" alt="" class="top">
            </a>
        </div>
    </div>
</footer>

<script src="<?php echo base_url();?>assets/web/js/script.js"></script>
<script src="<?php echo base_url();?>assets/web/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/web/js/uisearch.js"></script>
<script src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script>

<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>

<script>
    !function(){function n(n){n=n||window.event,n.preventDefault&&n.preventDefault(),n.returnValue=!1}function e(e){for(var o=w.length;o--;)if(e.keyCode===w[o])return void n(e)}function o(e){n(e)}function t(){}function i(){window.onmousewheel=document.onmousewheel=t,document.onkeydown=e,document.body.ontouchmove=o}function d(){window.onmousewheel=document.onmousewheel=document.onkeydown=document.body.ontouchmove=null}function u(){return window.pageYOffset||v.scrollTop}function r(){if(s=u(),a&&!m){if(0>s)return!1;window.scrollTo(0,0)}return classie.has(y,"notrans")?(classie.remove(y,"notrans"),!1):l?!1:void(0>=s&&f?c(0):s>0&&!f&&c(1))}function c(n){l=!0,n?classie.add(y,"modify"):(a=!0,i(),classie.remove(y,"modify")),setTimeout(function(){f=!f,l=!1,n&&(a=!1,d())},600)}var s,f,a,l,m=function(){var n,e=-1,o=window.navigator.userAgent,t=o.indexOf("MSIE "),i=o.indexOf("Trident/");if(t>0)e=parseInt(o.substring(t+5,o.indexOf(".",t)),10);else if(i>0){var d=o.indexOf("rv:");e=parseInt(o.substring(d+3,o.indexOf(".",d)),10)}return e>-1?e:n}(),w=[32,37,38,39,40],v=window.document.documentElement,y=document.getElementById("container"),g=y.querySelector("button.trigger"),h=u();a=0===h,i(),h&&(f=!0,classie.add(y,"notrans"),classie.add(y,"modify")),window.addEventListener("scroll",r),g.addEventListener("click",function(){c("reveal")})}();
</script>


</body>
</html>