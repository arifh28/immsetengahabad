<footer id="site-footer">
    <div class="container">

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