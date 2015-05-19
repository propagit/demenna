<?php
class Data_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	function get_fleet($key = "")
	{
		
		$fleet = array(
				"volvo-fm-430-hmf-2500-k5" => 
					array("image" => "truck10.jpg","name" => "Volvo FM 430 Fitted with HMF 2500 K5", "short_name" => "Volvo FM 430","load_capacity" => "7 tons",
							"specs" =>
								array(
										"Carrying capacity 7 tons",
										"Weight of vehicles 16 tons",
										"Tray length 7.2 meters",
										"Capable of pulling super dog trailer",
										"Dog trailer 7.3 meters carry capacity 16 tons"
									),
							"desc" => "",
							"gallery" => "",
													
							
					),
					
				"volvo-fm-440-hmf-4220-k5" => 
					array("image" => "truck2.jpg","name" => "Volvo FM 440 Fitted with HMF 4200 K5", "short_name" => "Volvo FM 440", "load_capacity" => "10 tons",
							"specs" =>
								array(
										"Carrying capacity 10 tons",
										"Weight of vehicles 19 tons",
										"Tray length 7.2 meters",
										"Capable of pulling super dog trailer",
										"Dog trailer 7.3 meters carry capacity 16 tons"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
				"freightliner-semi-hmf-2020-k5" => 
					array("image" => "truck3.jpg","name" => "Freightliner Semi Fitted with HMF 2020 K5", "short_name" => "Freightliner Semi", "load_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicles 24 tons",
										"Tray length 45 FT",
										"Extendables available up to 27 meters",
										"Overall length 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"isuzu-1400-hmf-2820-k5" => 
					array("image" => "isuzu_1400_2820.jpg","name" => "Isuzu 1400 Fitted with HMF 2820 K5", "short_name" => "Isuzu 1400 HMF 2820", "load_capacity" => "7 tons",
							"specs" =>
								array(
										"Hi rail machine (broad and standard gage)",
										"Carrying capacity 7 tons",
										"Weight of vehicle 16 tons",
										"Tray length 7.3 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"hino-12-ton-hmf-1720-k5" => 
					array("image" => "truck5.jpg","name" => "Hino 12 ton Fitted with HMF 1720 K5", "short_name" => "Hino 12 Ton", "load_capacity" => "10 tons",
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
					
					"hino-hi-rail-crane-with-carrying-frame" => 
					array("image" => "hino_hi_rail.jpg","name" => "Hino Hi rail crane ruck with carrying frame", "short_name" => "Hino Hi Rail Crane Truck", "load_capacity" => "7 tons",
							"specs" =>
								array(
										"Hi rail machine (broad and standard gage)",
										"12 ton meter crane",
										"Carrying capacity 7 tons",
										"Weight of vehicle 16 tons",
										"Tray length 6.3 meters",
										"Available for interstate work",
										"2 x wire drum carriers",
										"Carrying frame capable of carrying 25 meter steel beams on track"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"isuzu-1400-hmf-1720-k4" => 
					array("image" => "truck4.jpg","name" => "Isuzu 1400 Fitted with HMF 1720 K4", "short_name" => "Isuzu 1400 HMF 1720", "load_capacity" => "10 tons",
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
					array("image" => "truck7.jpg","name" => "Isuzu Semi Fitted with Ferrari 177", "short_name" => "Isuzu Semi Ferrari 177", "load_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 24 tons",
										"Trailer length 45 FT",
										"Overall length 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"volvo-fm-450-semi-hmf-3000-k5" => 
					array("image" => "truck8.jpg","name" => "Volvo FM 450 Semi Fitted with HMF 3000 K5", "short_name" => "Volvo FM 450 semi", "load_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 24 tons",
										"Trailer length 45 FT",
										"Overall length 19 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"volvo-fm-500-twin-steer-semi-hmf-odin-k6" => 
					array("image" => "truck1.jpg","name" => "Volvo FM 500 twin steer Semi Fitted with HMF Odin K6 (65 ton meters)", "short_name" => "Volvo FM 500 semi", "load_capacity" => "20 tons",
							"specs" =>
								array(
										"Carrying capacity 20 tons",
										"Weight of vehicle 31 tons",
										"Step deck 45ft trailer with hydraulic ramps",
										"Overall length 20 meters",
										"Interstate Transport"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					),
					
					"volvo-fe-hmf-1560-k5" => 
					array("image" => "truck9.jpg","name" => "Volvo FE fitted with HMF 1560 K5", "short_name" => "Volvo FE HMF 1560", "load_capacity" => "10 tons",
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
		
					"volvo-fl6-palfinger-1250-pk3" => 
					array("image" => "truck11.jpg","name" => "Volvo FL 6 Fitted with Palfinger 1250 PK3", "short_name" => "Volvo FL 6 Palfinger 1250", "load_capacity" => "10 tons",
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
													
							
					),
					
					"rail-trailer" => 
					array("image" => "rail_trailer_3.jpg","name" => "Rail Trailer", "short_name" => "Rail Trailer", "load_capacity" => "15 tons",
							"specs" =>
								array(
										"Carrying capacity 15 tons on track",
										"Available with a 1 meter or 4 meter draw bar",
										"Available for carrying long lengths of steel on track"
									),

							"desc" => ""	,
							"gallery" => array(
												"rail_trailer.jpg",
												"rail_trailer_2.jpg"
												)		
													
							
					),
					
					"isuzu-1500-hmf-3000-k4" => 
					array("image" => "truck12.jpg","name" => "Isuzu 1500 Fitted with HMF 3000 K4", "short_name" => "Isuzu 1500 HMF 3000", "load_capacity" => "7 tons",
							"specs" =>
								array(
										"Hi rail machine (broad and standard gage)",
										"Carrying capacity 7 tons",
										"Weight of vehicle 16 tons",
										"Tray length 7.3 meters",
										"Available for interstate work"
									),

							"desc" => ""	,
							"gallery" => "",		
													
							
					)
					
					
		
		
		);	
		
		
		if($key){
			# check array key exists
			if(array_key_exists($key,$fleet)){
				return $fleet[$key];	
			}
			return false;
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
	
	function get_projects($key = '')
	{
		$projects = array(
				"monash-freeway" => 
					array("image" => "monash.jpg","name" => "Monash Freeway Upgrade", "cost" => "$1.39 billion", "year" => '2008 - 2010',
							"desc" => "Supplied Crane Trucks and dogman",	
					),
				
				
				"peninsula-link" => 
					array("image" => "PenLink.jpg","name" => "Peninsula Link", "cost" => "$764 Million", "year" => '2010 - 2012',
							"desc" => "Supplied Crane Trucks and Crane Semis as well as Dogman for ABI Group.<br>
									   Peninsula link Melbourne Bridge Construction, DeMenna Cranes Medium to Large Crane trucks ideal for Bridge and freeway construction limiting the number of vehicles on site, where our crane 		trucks bring material in erect and remove, 1 Crane truck 1 cost effective procedure",	
					),
					
				"present-regional-rail-link" => 
					array("image" => "RegionalRailDuelLift.jpg","name" => "Present Regional Rail Link", "cost" => "$8.5 Billion", "year" => '2012 - Present',
							"desc" => "Supplying High Rail Crane Trucks, Crane Trucks, Crane Semis, Dogman/Riggers, Heavy Haulage to Thiess /Balfour Beatty, John Holland/Abi Group and United Group.",	
					),
				
				"springvale-road-grade-separation" => 
					array("image" => "Springvale.jpg","name" => "Springvale Road Grade Separation", "cost" => "$300 Million", "year" => '2013 - 2014',
							"desc" => "Supplying High Rail Crane Trucks, Crane Trucks, Crane Semis, Dogman/Riggers, Heavy Haulage to Balfour Beatty/Mc Connell Dowell",	
					),
					
				"mitcham-rooks-road-grade-separation" => 
					array("image" => "Mitchem.jpg","name" => "Mitcham Rooks Road Grade Separation", "cost" => "$192 Million", "year" => '2013 - 2014',
							"desc" => "Supplying High Rail Crane Trucks, Crane Trucks, Crane Semis, Dogman/Riggers, Heavy Haulage to John Holland",	
					),
				
				"bald-hill-wind-farm" => 
					array("image" => "windfarm.jpg","name" => "2014-Present Bald Hill Wind Farm", "cost" => "$300 Million", "year" => '2014 - Present ',
							"desc" => "Supplying Crane Trucks, Crane Semis, Dogman/Riggers, Heavy Haulage to Hazel Brothers",	
					),
					
				"present-metro-train-brp-frankston-line" => 
					array("image" => "frankston.jpg","name" => "Metro Trains BRP Frankston Line", "cost" => "$300 Million", "year" => '2015 - Present ',
							"desc" => "Supplying OHLE Supervision, High Rail Crane Trucks, Crane Trucks, Crane Semis, Dogman/Riggers, Heavy Haulage to Metro Trains",	
					),
				
				"john-holland-ringwood-station-upgrade" => 
					array("image" => "Ringwood.jpg","name" => "John Holland Ringwood Station upgrade", "cost" => "", "year" => '2015 - Present ',
							"desc" => "Supplying OHLE Supervision, High Rail Cranes, Riggers and labour hire",	
					),
				
				"thiess-dingley-by-pass " => 
					array("image" => "Thiess.jpg","name" => "THIESS Dingley By-Pass ", "cost" => "", "year" => '2015 - Present ',
							"desc" => "Supplying Cranes, Heavy Haulage, Dogman, Riggers, Labour hire",	
					),
					
				"frankston-brp-line" => 
					array("image" => "frankston2.jpg","name" => "Frankston BRP Project", "cost" => "$300 Million", "year" => 'Current',
							"desc" => "Supplying Hi Rail cranes, OHLE supervisors, riggers and dogman to erect and remove new and old rail structures",	
					),
					
				"frankston-brp-line-2" => 
					array("image" => "frankston3.jpg","name" => "Frankston BRP Project", "cost" => "$300 Million", "year" => 'Current',
							"desc" => "Supplying Hi Rail cranes, OHLE supervisors, riggers and dogman to erect and remove new and old rail structures",	
					),
						
					
		
		
		);	
		
		if($key){
			# check if key exists
			if(array_key_exists($key,$projects)){
				return $projects[$key];	
			}
			return false;
		}
		return $projects;
	}
}