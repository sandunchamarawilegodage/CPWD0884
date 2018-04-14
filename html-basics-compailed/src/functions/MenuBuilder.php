<?php function MenuBuilder($items){

	$currentmenu = "<ul>";

	foreach($items as $key => $value){
		$currentmenu .= "<a><li>$key</li></a>";

	}
	return $currentmenu;
	$currentmenu = "</ul>";
}

$items = [
			"Home"=> "home",
			"Course Details" =>"course-details",
			"Upcoming Events" => "upcoming-events",
			"News" => "news",
			"Reviews" => "reviews",
			"Contact-Us"=>"contact-us"
		];

		//echo MenuBuilder($items)
?>