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
                <input type="text" class="form-control" name="wan_wati" placeholder="Immawan/Immawati">
                <i class="fa fa-user form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">
                <input type="text" class="form-control" name="komisariat" placeholder="Komisariat" required>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">
                <input type="text" class="form-control" name="cabang" placeholder="Pimpinan Cabang" required>
                <i class="fa fa-home form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left">
                <input type="text" class="form-control" name="dpd" placeholder="DPD" required>
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
