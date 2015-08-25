<section id="registrasi">
    <h3><strong>Registrasi Website IMM Setengah Abad</strong></h3>
    <hr>
    <div class="container">
        <div class="col-md-6">
            <form method="post" action="<?php echo base_url();?>register/submit" class="form-group pull-left">
                <div class="form-group has-feedback left">
                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    <i class="fa fa-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback left">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <i class="fa fa-key form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback left">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                    <i class="fa fa-user form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback left">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <i class="fa fa-envelope-o form-control-feedback"></i>
                </div>
                <hr>
                <p>Pastikan alamat email yang dimasukkan aktif untuk membuka link aktifasi akun.</p>
                <hr>
                <button class="btn btn-primary pull-left" name="daftar" value="Daftar" type="submit">Daftar</button>
        </div>
        <div class="col-md-6">
            <div class="form-group has-feedback left">

                <select name="wan_wati" class="form-control" required>
                    <option>Immawan</option>
                    <option>Immawati</option>
                </select>
                <i class="fa fa-user form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">

                <select name="dpd" class="form-control" id="provinsi" required>
                    <option>- Pilih DPD -</option>
                    <?php foreach($provinsi as $prov){
                        echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                    } ?>
                </select>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">

                <select name="cabang" class="form-control" id="kabupaten" required>
                    <option value=''>- Pilih Pimpinan Cabang -</option>
                </select>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">
                <input type="text" class="form-control" name="komisariat" placeholder="Komisariat" required>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
            <hr>
            <div class="checkbox">
                <label><input type="checkbox" value="" required>Data yang dimasukkan harus lengkap dan benar, guna mengurangi pendaftaran bukan kader IMM.</label>
            </div>


        </div>
        </form>
    </div>
</section>

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
    $(document).ready(function(){
        $("#provinsi").change(function (){
            var url = "<?php echo site_url('register/add_ajax_kab');?>/"+$(this).val();
            $('#kabupaten').load(url);
            return false;
        })

    });
</script>

</body>

</html>