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
    <meta property="og:title"         content="<?php echo isset($title) ? $title : 'IMM Setengah Abad' ; ?>" />
    <meta property="og:description"   content="<?php echo isset($description) ? $description : 'IMM Setengah Abad' ; ?>" />
    <meta property="og:image"         content="<?php echo base_url();?>assets/web/images/imm_setengah_abad.png" />
    <meta property="og:url" content="<?php echo base_url();?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="canonical" href="<?php echo base_url(); ?>" />
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
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.4&appId=584942981647419";
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
                <li class="active"><a href="<?php echo base_url();?>pages/news">ARTIKEL</a>
                </li>
                <li><a href="<?php echo base_url();?>tentang">TENTANG</a>
                </li>
                <li><a href="<?php echo base_url();?>pages/perkaderan">INFO PERKADERAN</a>
                </li>
                <li><a href="<?php echo base_url();?>tanfidz">TANFIDZ</a>
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