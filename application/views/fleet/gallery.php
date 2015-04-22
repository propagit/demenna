<?php
	$missing_items = 0;
	$items_per_row = 5;
	$fleet = $this->data_model->get_fleet();
	$rows = count($fleet)/$items_per_row;
	$loop = is_int($rows) ? $rows : $rows + 1;
	$missing_items = $items_per_row - (count($fleet) - (floor($rows) * $items_per_row));
?>

<div class="col-xs-12 app-multi-carousel">
    <h5>Meet the fleet</h5>
    
    <div id="fleets" class="carousel slide" data-ride="carousel">
         <!-- Wrapper for slides -->
        <div class="carousel-inner">
        	<div class="item active">
				<?php 
                    $counter = 1;
                    foreach($fleet as $key => $f){
                    	if($counter > 5){
							$counter = 1;
                ?>
			</div>
            <div class="item">
                <?php	
                    } #if counter > 5
                ?>
                
                	<a href="<?=base_url();?>fleet/<?=$key;?>">
                    	<img src="<?=base_url();?>assets/img/fleet/<?=$f['image'];?>">
                    	<div class="caption">
                            <h3><?=$f['short_name'];?></h3>
                        </div>
                    </a>
                	
                <?php
						$counter++;
                    } # foreach
                ?>	
                
                <?php if($missing_items){ 
					  $counter2 = 1;
						 foreach($fleet as $key => $f){
							 if($counter2 <= $missing_items){
				?>
                				<a href="<?=base_url();?>fleet/<?=$key;?>">
                                	<img src="<?=base_url();?>assets/img/fleet/<?=$f['image'];?>">
                                    <div class="caption">
                                        <h3><?=$f['short_name'];?></h3>
                                    </div>
                                </a>	
                <?php 
							 }else{
								break; 
							 }
						$counter2++;
						}
					}
				?>
        	</div>	
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#fleets" role="button" data-slide="prev">
            <span class="slide-btn"><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#fleets" role="button" data-slide="next">
            <span class="slide-btn"><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</div>