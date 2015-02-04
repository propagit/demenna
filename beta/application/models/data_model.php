<?php
class Data_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_fleet($key = "")
	{
		
		$fleet = array(
				"volvo-fm-430-hmf-2500-k5" => 
					array("image" => "truck10.jpg","name" => "Volvo FM 430 Fitted with HMF 2500 K5", "short_name" => "Volvo FM 430","laod_capacity" => "7 tons",
							"specs" =>
								array(
										"Carrying capacity 7 tons",
										"Weight of vehicles 16 tons",
										"Tray lenght 7.2 meters",
										"Capable of pulling super dog trailer",
										"Dog trailer 7.3 meters carry capacity 16 tons"
									),
							"desc" => "",
							"gallery" => "",
													
							
					),
					
				"volvo-fm-440-hmf-4220-k5" => 
					array("image" => "truck2.jpg","name" => "Volvo FM 440 Fitted with HMF 4200 K5", "short_name" => "Volvo FM 440", "laod_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicles 19 tons",
										"Tray lenght 7.2 meters",
										"Capable of pulling super dog trailer",
										"Dog trailer 7.3 meters carry capacity 16 tons"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
				"freightliner-semi-hmf-2020-k5" => 
					array("image" => "truck3.jpg","name" => "Freightliner Semi Fitted with HMF 2020 K5", "short_name" => "Freightliner Semi", "laod_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicles 24 tons",
										"Tray lenght 45 FT",
										"Expendables available up to 27 meters",
										"Overall Lenght 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"isuzu-1400-hmf-2820-k5" => 
					array("image" => "truck4.jpg","name" => "Isuzu 1400 Fitted with HMF 2820 K5", "short_name" => "Isuzu 1400 HMF 2820", "laod_capacity" => "7 tons",
							"specs" =>
								array(
										"Hi rail machine (board ans standard gage)",
										"Carrying capacity 7 tons",
										"Weight of vehicle 16 tons",
										"Tray lenght 7.3 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"hino-12-ton-hmf-1720-k5" => 
					array("image" => "truck5.jpg","name" => "Hino 12 ton Fitted with HMF 1720 K5", "short_name" => "Hino 12 Ton", "laod_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicle 14 tons",
										"Front Mount Crane",
										"Tray length 7.6 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"isuzu-1400-hmf-1720-k4" => 
					array("image" => "truck4.jpg","name" => "Isuzu 1400 Fitted with HMF 1720 K4", "short_name" => "Isuzu 1400 HMF 1720", "laod_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicle 14 tons",
										"Tray length 7.6 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"isuzu-semi-ferrari-177" => 
					array("image" => "truck7.jpg","name" => "Isuzu Semi Fitted with Ferrari 177", "short_name" => "Isuzu Semi Ferrari 177", "laod_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 24 tons",
										"Trailer lenght 45 FT",
										"Overall Lenght 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"Volvo-fm-450-semi-hmf-3000-k5" => 
					array("image" => "truck8.jpg","name" => "Volvo FM 450 Semi Fitted with HMF 3000 K5", "short_name" => "Volvo FM 450 semi", "laod_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 24 tons",
										"Trailer lenght 45 FT",
										"Overall Lenght 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"Volvo-fm-500-twin-steer-semi-hmf-odin-k6" => 
					array("image" => "truck1.jpg","name" => "Volvo FM 500 twin steer Semi Fitted with HMF Odin K6 (65 ton meters)", "short_name" => "Volvo FM 500 semi", "laod_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 31 tons",
										"Step deck 45ft trailer with hydraulic ramps",
										"Overall lenght 20 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"Volvo-fe-hmf-1560-k5" => 
					array("image" => "truck9.jpg","name" => "Volvo FE fitted with HMF 1560 K5", "short_name" => "Volvo FE HMF 1560", "laod_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicle 14 tons",
										"Tray length 7.6 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
		
					"Volvo-fl6-palfinger-1250-pk3" => 
					array("image" => "truck9.jpg","name" => "Volvo FL 6 Fitted with Palfinger 1250 PK3", "short_name" => "Volvo FL 6 Palfinger 1250", "laod_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicle 14 tons",
										"Front Mount Crane",
										"Tray Length 7.6 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					)
		
		
		);	
		
		
		if($key){
			return $fleet[$key];	
		}
		return $fleet;
		
	}
	
	function get_next_fleet_key($cur_key){
		$first_key = 'volvo-fm-430-hmf-2500-k5';
		$fleet = $this->get_fleet();
		$keys = array_keys($fleet);
		
		$position = array_search($cur_key, $keys);
		if (isset($keys[$position + 1])) {
			return $keys[$position + 1];
		}else{
			return $first_key;	
		}
	}
}
?>
	
	