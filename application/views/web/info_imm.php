<div class="main">
    <div class="page_container">
        <div id="immersive_slider">
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide1_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.bucketlistly.com" target="_blank">
                        <img src="<?php echo base_url();?>assets/web/images/slide1.jpg" alt="Slider 1">
                    </a>
                </div>
            </div>
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide2_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.bucketlistly.com/apps" target="_blank">BucketListly Apps</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="<?php echo base_url();?>assets/web/images/slide2.jpg" alt="Slider 1"></a>
                </div>
            </div>
            <div class="slide" data-blurred="<?php echo base_url();?>assets/web/images/slide3_blurred.jpg">
                <div class="content">
                    <h2><a href="http://www.thepetedesign.com" target="_blank">The Pete Design</a></h2>
                    <p>It’s never been easier to watch YouTube on the big screen
                        Send your favorite YouTube videos from your Android phone or tablet to TV with the touch of a button. It’s easy. No wires, no setup, no nothing. Find out more here.</p>
                </div>
                <div class="image">
                    <a href="http://www.thepetedesign.com" target="_blank"><img src="<?php echo base_url();?>assets/web/images/slide3.jpg" alt="Slider 1"></a>
                </div>
            </div>

            <a href="#" class="is-prev">&laquo;</a>
            <a href="#" class="is-next">&raquo;</a>
        </div>
    </div>
</div>

        Selamat datang <?php echo $nama;?><!-- variable nama adalah array dengan nama = 'nama' menghasilkan variable di view dari controller tadi.-->
		<?php 
			if ($active)
				echo "Akun anda telah aktif";
			else
				echo "Akun belum aktif, silahkan cek email : <b>$email</b>";
		?>
        <a href="login/logout">Logout</a> <!-- link untuk logout -->