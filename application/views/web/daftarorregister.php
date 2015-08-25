<div class="container">
    <h3 style="text-align: center; font-family: "Puritan", Tahoma, Arial">Untuk melanjutkan silahkan Immawan/Immawati Log In terlebih dahulu.</h3>
    <section class="main">
    <form class="form-2" method="post" action="<?php echo base_url();?>index.php/login_validation">
        <h1>Log In atau Registerasi</h1>
        <p class="float">
            <label for="login"><i class="fa fa-user"></i>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
        </p>
        <p class="float">
            <label for="password"><i class="fa fa-lock"></i></i>Password</label>
            <input type="password" class="form-control showpassword" name="password" placeholder="Password" required>
        </p>
        <p class="clearfix">
            <input type="submit" name="submit" value="Log In">
            <a href="<?php echo base_url();?>register" class="log-twitter">Register</a>
        </p>
        <?php
        if($this->input->get('gagal')==1){
            ?>
            <span>Username atau password salah</span>
        <?php
        }
        ?>
    </form>​​
</section>
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
<script src="<?php echo base_url();?>assets/web/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/web/js/uisearch.js"></script>
<script src="<?php echo base_url();?>assets/web/js/modernizr.custom.js"></script>

<script>
    new UISearch(document.getElementById("sb-search"));
</script>

<script type="text/javascript">
    $(function(){
        $(".showpassword").each(function(index,input) {
            var $input = $(input);
            $("<p class='opt'/>").append(
                $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
                    var change = $(this).is(":checked") ? "text" : "password";
                    var rep = $("<input placeholder='Password' type='" + change + "' />")
                        .attr("id", $input.attr("id"))
                        .attr("name", $input.attr("name"))
                        .attr('class', $input.attr('class'))
                        .val($input.val())
                        .insertBefore($input);
                    $input.remove();
                    $input = rep;
                })
            ).append($("<label for='showPassword'/>").text("Tampilkan Password")).insertAfter($input.parent());
        });

        $('#showPassword').click(function(){
            if($("#showPassword").is(":checked")) {
                $('.icon-lock').addClass('icon-unlock');
                $('.icon-unlock').removeClass('icon-lock');
            } else {
                $('.icon-unlock').addClass('icon-lock');
                $('.icon-lock').removeClass('icon-unlock');
            }
        });
    });
</script>
</body>
</html>