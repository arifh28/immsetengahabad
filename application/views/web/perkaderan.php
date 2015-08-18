<section id="news">
<div class="container">
    <div class="row">

            <?php foreach ($kueri as $g): ?>

                <div class="col-md-4">

                    <div class="card radius shadowDepth1">
                        <div class="card__image border-tlr-radius">
                            <a title="<?=$g->nama ;?>" href="<?=base_url(); ?>perkaderan/<?=$g->category ?>/<?=$g->slug ?>">
                                <img title="<?=$g->nama ;?>" src="<?=site_url(); ?>file/dosen/<?php echo $g->foto ;?>" alt="<?=$g->nama ;?>">
                            </a>
                        </div>

                        <div class="card__content card__padding">
                            <div class="card__share">
                                <div class="card__social">
                                    <a class="share-icon facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url(); ?>perkaderan/<?=$g->category ?>/<?=$g->slug ?>&t=<?php echo $g->nama ;?>"
                                       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><span class="fa fa-facebook"></span></a>
                                    <a class="share-icon twitter" href="https://twitter.com/intent/tweet?via=immsetengahabad" target="_blank" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><span class="fa fa-twitter"></span></a>
                                    <a class="share-icon googleplus" href="https://plus.google.com/share?url=<?php echo base_url(); ?>perkaderan/<?=$g->category ?>/<?=$g->slug ?>" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><span class="fa fa-google-plus"></span></a>
                                </div>

                                <a id="share" class="share-toggle share-icon" href="#"></a>
                            </div>

                            <div class="card__meta">
                                <?php echo $g->category ;?> &#8212; <?php echo $g->tanggal ;?>
                            </div>

                            <article class="card__article">
                                <h3><a title="<?php echo $g->nama ;?>" href="<?=base_url(); ?>content/<?=$g->category ?>/<?=$g->slug ?>"><?=character_limiter($g->nama,30) ?></a></h3>
                                <hr>
                                <p><?=character_limiter($g->isi,300) ?></p>
                            </article>
                        </div>

                        <div class="card__action">

                            <div class="card__author">
                                <a href="<?=base_url();?>file/cv/<?=$g->cv?>"><img src="" alt="user"></a>
                                <div class="card__author-content">
                                    Oleh <?=$g->penyelenggara ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col-md-6 -->

            <?php endforeach ?>



            <div class="row">
                <div class="col-md-12">
                    <?=$pagination ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->


    </div> <!-- /.row -->
</div> <!-- /.container -->
</section>