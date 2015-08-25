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
<script src="<?php echo base_url();?>assets/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/uisearch.js"></script>
<script src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script>

<script>
    new UISearch(document.getElementById("sb-search"));
</script>

<script>
    $(document).ready(function(a){a(".card__share > a").on("click",function(e){e.preventDefault(),a(this).parent().find("div").toggleClass("card__social--active"),a(this).toggleClass("share-expanded")})});
</script>

</body>

</html>