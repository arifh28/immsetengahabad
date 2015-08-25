<div id="container" class="intro-effect-fadeout">
    <div class="header">
        <div class="bg-img"><img src="<?php echo base_url(); ?>file/dosen/<?=$foto ?>" alt="Background Image" /></div>
        <div class="title">
            <h1><?=$judul ?></h1>
            <p class="subline"><?=$category ?></p>
            <p>Penyelenggara <strong><?=$penyelenggara ?></strong> &#8212; <?=$pelaksanaan ?></p>
            <br>
            <br>
            <div class="card__share">
                <div class="card__social">
                    <a class="share-icon facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>perkaderan/<?=$category ?>/<?=$slug ?>&t=<?php echo $nama ;?>"
                       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><span class="fa fa-facebook"></span></a>
                    <a class="share-icon twitter" href="https://twitter.com/intent/tweet?via=immsetengahabad" target="_blank" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><span class="fa fa-twitter"></span></a>
                    <a class="share-icon googleplus" href="https://plus.google.com/share?url=<?php echo base_url(); ?>perkaderan/<?=$category ?>/<?=$slug ?>" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><span class="fa fa-google-plus"></span></a>
                </div>

                <span><a class="download download-icon" href="<?php echo base_url();?>file/cv/<?=$cv ?>"></a></span>
                <a id="share" class="share-toggle share-icon" href="#"></a>
            </div>
        </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <article class="content">
        <div>
            <p><?=$content ?></p>
        </article>
        </div>
        <div class="col-md-3">
            <a href=""><i class="fa fa-download fa-2x"></i></a>
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
            <div class="col-md-4">
                <ul>
                    <li><a href="<?php echo base_url();?>tentang">Tentang Kami</li>
                    <li><a href="<?php echo base_url();?>tanfidz">Tanfidz Muktamar XVI IMM</li>

                    <li><a href="<?php echo base_url();?>pusatunduhimm">Pusat Unduh IMM</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li><a href="<?php echo base_url();?>pages/perkaderan">Perkaderan Nasional dan Regional</li>

                    <li><a href="<?php echo base_url();?>kontak">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>

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