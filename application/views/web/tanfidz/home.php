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
    <meta property="og:image"         content="<?php echo base_url();?>assets/web/images/ic_launcher.png" />
    <meta property="og:url" content="<?php echo base_url();?>tanfidz"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="canonical" href="<?php echo base_url(); ?>tanfidz" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/component.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/font-awesome.css">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<div id="fb-root"></div>
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

<body class="demo-2">
<div id="container" class="container1 intro-effect-fadeout">
    <!-- Top Navigation -->

    <header class="header">
        <div class="bg-img"><img style="width: 100%" src="<?php echo base_url();?>assets/web/images/tanfidz_home.png" alt="Background Image" /></div>
        <div class="title">
            <h1>Tanfidz Muktamar XVI IMM</h1>
            <p class="subline">IMM Setengah Abad</p>
        </div>
    </header>

        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url();?>assets/web/images/tanfidz_windows.png"/>
            </div>
            <div class="col-md-6 tanfidz_windows">
                <h3>Bukan hanya sekedar Tanfidz, ada info lainnya tentang IMM dan Muhammadiyah. Install dalam komputermu sekarang juga!</h3>
                <a class="btn btn-danger btn-medium" href="https://goo.gl/vySvE7">Download .ZIP</a>
            </div>
            </div>
        </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6 tanfidz_android">
                <h3>Selain ada Anggaran Dasar dan menu lainnya, ada juga Info Perkaderan dan Link Ikatan dan Persyarikatan.</h3>
                <a class="btn btn-danger btn-medium" href="">Download .APK</a><a href="https://play.google.com/store/apps/details?id=com.fasco.tanfidzimmdua"><img src="<?php echo base_url();?>assets/web/images/en_app_rgb_wo_60.png" height="50px"></a>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>assets/web/images/tanfidz_android.png"/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Ingin membaca langsung secara online?</h1>
<h4>Klik link-link berikut ini (harus log in terlebih dahulu).</h4>
            </div>
            <div class="col-md-6 tanfidz_online">
                <a class="btn btn-danger btn-large" href="<?php echo base_url();?>tanfidz/anggaran-dasar">Anggaran Dasar</a><a class="btn btn-danger btn-large" href="<?php echo base_url();?>tanfidz/anggaran-rumah-tangga">Anggaran Rumah Tangga</a><a class="btn btn-danger btn-large" href="<?php echo base_url();?>tanfidz/gbho">GBHO Muktamar XVI</a><a class="btn btn-danger btn-large" href="<?php echo base_url();?>tanfidz/mekanisme-kerja-pimpinan">Mekanisme Kerja Pimpinan</a><a class="btn btn-danger btn-large" href="<?php echo base_url();?>tanfidz/tatib-pemilihan-pimpinan">Tatib Pemilihan Pimpinan</a>
            </div>
        </div>
    </div>


</div><!-- /container -->
<script src="<?php echo base_url();?>assets/web/js/classie.js"></script>
<script src="<?php echo base_url();?>assets/web/js/bootstrap.js"></script>

<script>
    (function() {

        // detect if IE : from http://stackoverflow.com/a/16657946
        var ie = (function(){
            var undef,rv = -1; // Return value assumes failure.
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf('MSIE ');
            var trident = ua.indexOf('Trident/');

            if (msie > 0) {
                // IE 10 or older => return version number
                rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            } else if (trident > 0) {
                // IE 11 (or newer) => return version number
                var rvNum = ua.indexOf('rv:');
                rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
            }

            return ((rv > -1) ? rv : undef);
        }());


        // disable/enable scroll (mousewheel and keys) from http://stackoverflow.com/a/4770179
        // left: 37, up: 38, right: 39, down: 40,
        // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
        var keys = [32, 37, 38, 39, 40], wheelIter = 0;

        function preventDefault(e) {
            e = e || window.event;
            if (e.preventDefault)
                e.preventDefault();
            e.returnValue = false;
        }

        function keydown(e) {
            for (var i = keys.length; i--;) {
                if (e.keyCode === keys[i]) {
                    preventDefault(e);
                    return;
                }
            }
        }

        function touchmove(e) {
            preventDefault(e);
        }

        function wheel(e) {
            // for IE
            //if( ie ) {
            //preventDefault(e);
            //}
        }

        function disable_scroll() {
            window.onmousewheel = document.onmousewheel = wheel;
            document.onkeydown = keydown;
            document.body.ontouchmove = touchmove;
        }

        function enable_scroll() {
            window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;
        }

        var docElem = window.document.documentElement,
            scrollVal,
            isRevealed,
            noscroll,
            isAnimating,
            container = document.getElementById( 'container' ),
            trigger = container.querySelector( 'button.trigger' );

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }

        function scrollPage() {
            scrollVal = scrollY();

            if( noscroll && !ie ) {
                if( scrollVal < 0 ) return false;
                // keep it that way
                window.scrollTo( 0, 0 );
            }

            if( classie.has( container, 'notrans' ) ) {
                classie.remove( container, 'notrans' );
                return false;
            }

            if( isAnimating ) {
                return false;
            }

            if( scrollVal <= 0 && isRevealed ) {
                toggle(0);
            }
            else if( scrollVal > 0 && !isRevealed ){
                toggle(1);
            }
        }

        function toggle( reveal ) {
            isAnimating = true;

            if( reveal ) {
                classie.add( container, 'modify' );
            }
            else {
                noscroll = true;
                disable_scroll();
                classie.remove( container, 'modify' );
            }

            // simulating the end of the transition:
            setTimeout( function() {
                isRevealed = !isRevealed;
                isAnimating = false;
                if( reveal ) {
                    noscroll = false;
                    enable_scroll();
                }
            }, 600 );
        }

        // refreshing the page...
        var pageScroll = scrollY();
        noscroll = pageScroll === 0;

        disable_scroll();

        if( pageScroll ) {
            isRevealed = true;
            classie.add( container, 'notrans' );
            classie.add( container, 'modify' );
        }

        window.addEventListener( 'scroll', scrollPage );
        trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
    })();
</script>
</body>
</html>