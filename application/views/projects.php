
<div class="container center offset-top secondary-banner">
	<img src="<?=base_url();?>assets/img/projects_banner.png">
</div>
<?php
	#echo '<pre>' . print_r($projects,true) . '</pre>';
	#echo $total;
?>
<div class="container app-container remove-gutters">
	<div class="col-xs-12 remove-gutters caption">
        <h3>Experience & Reliability Counts</h3>
    </div>
    
    
   <div id="banners" class="carousel slide project-carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <?php for($i = 0; $i < $total; $i++){?>
            <li data-target="#banners" data-slide-to="<?=$i;?>" <?=$i==0 ? 'class="active"' : '';?>></li>
        <?php } ?>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
				$count = 0; 
				foreach($projects as $key => $p){
			?>
            <div class="item <?=$count == 0 ? 'active' : '';?>">
                <img src="<?=base_url();?>assets/img/projects/<?=$p['image'];?>">
                <div class="carousel-caption">
                    <h1><?=$p['name'];?> <span><?=$p['cost'] . ' '. $p['year']?></span></h1>
                   	<p>
                    	<?=$p['desc'];?>
                    </p>
                </div>
            </div>
            <?php $count++; } ?>
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
            <span class="slide-btn"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#banners" role="button" data-slide="next">
            <span class="slide-btn"><i class="fa fa-angle-right"></i></span>
        </a>
        
    </div>
</div>