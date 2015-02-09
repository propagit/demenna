<div class="container center offset-top secondary-banner">
	<img src="<?=base_url();?>assets/img/fleet_banner.png">
</div>

<div class="container app-container">
	<div class="offset-top gallery-img">
    	<img src="<?=base_url();?>assets/img/fleet/<?=$fleet['image']?>">
        <!-- <a href="<?=base_url();?>assets/img/gallery/crane1.jpg" data-lightbox="gallery"><div class="view-gallery-btn"><i class="fa fa-image"></i> view gallery</div></a>-->
    </div>
    
    <div class="offset-top gallery-desc">
    	<h2><?=$fleet['name'];?></h2>
        <p>
        	<?=$fleet['desc'];?>
        </p>
        <ul class="fa-ul">
        	<?php foreach($fleet['specs'] as $spec){ ?>
            	<li><i class="fa-li fa fa-arrow-circle-right"></i><?=$spec;?></li>
            <?php } ?>
        </ul>
        
        <div class="gallery-btns">
        	<a href="<?=base_url();?>contact" class="btn btn-yellow-txt"><i class="fa fa-bullhorn"></i> contact us</a><a href="<?=base_url();?>fleet/<?=$next;?>" class="btn btn-yellow-txt btn-sml">next <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    
    <?php $this->load->view('fleet/gallery'); ?>
</div>