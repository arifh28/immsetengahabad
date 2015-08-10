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

<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url();?>"><span class="icon-immsetab_font_icon"></span></a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#imm">Page 1</a></li>
                    <li><a href="#deklarasi">Page 2</a></li>
                    <li><a href="#tentang">Page 3</a></li>
                    <li><a href="#tanfidz">Sign Up</a></li>
                    <li><a href="#kontak">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="registrasi">
    <div class="container">
        <div class="col-md-9">
            <h1><strong>Registrasi Website IMM Setengah Abad</strong></h1>
            <hr>
            <form method="post" action="<?php echo base_url();?>register/submit" class="form-group pull-left">
                <div class="form-group has-feedback left">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <i class="fa fa-user form-control-feedback"></i>
                </div>
                    <div class="form-group has-feedback left">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <i class="fa fa-key form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback left">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                    <i class="fa fa-key form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback left">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <i class="fa fa-key form-control-feedback"></i>
                </div>
                <button class="btn btn-primary pull-left" name="daftar" value="Daftar" type="submit">SUBMIT</button>
            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</section>
</body>
</html>
