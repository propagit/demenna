<div class="container center offset-top secondary-banner">
	<img src="<?=base_url();?>assets/img/fleet_banner.png">
</div>

<div class="container app-container remove-gutters">
	<div class="col-xs-12 remove-gutters caption">
        <h3>
        	Demenna Cranes extensive Crane Trucks/High Rail Crane Trucks Fleet<br>
            has the perfect rig and team for every project
		</h3>
    </div>
    
    <div class="clear"></div>
    
    <div class="fleet-wrap">
		<?php foreach($fleet as $key => $f){ ?>
        <a href="<?=base_url();?>fleet/<?=$key;?>">
        <div class="col-xs-4 fleet-box">
            <img src="<?=base_url();?>assets/img/fleet/<?=$f['image'];?>">
            <div class="fleet-info">
                <h6><?=$f['short_name']?><br>Load Capacity <?=$f['laod_capacity'];?></h6>
            </div>	
        </div>
        </a>
        <?php } ?>
    </div>
</div>