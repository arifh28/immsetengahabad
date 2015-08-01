<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'kita' ; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo isset($description) ? $description : 'kita' ; ?>" />
    <meta name="keyword" content="<?php echo isset($keyword) ? $keyword : 'imm, muhammadiyah' ; ?>">
    <meta name="author" content="Arif Fasco Hidayat" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/themes/web/images/ico/favicon.png" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo base_url();?>assets/web/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/web/js/jquery.immersive-slider.js"></script>
    <script src="<?php echo base_url();?>assets/web/js/bootstrap.min.js"></script>

    <link href='<?php echo base_url();?>assets/web/css/immersive-slider.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/font-awesome.min.css">

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
