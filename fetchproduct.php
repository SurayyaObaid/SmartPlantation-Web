<?php 

	require_once('sessionconnection.php');
	$sql = "SELECT * FROM plant";
		
		$r = mysqli_query($db,$sql);
		
		$res = mysqli_fetch_array($r);
		while($res){
		
		$result = array();
		
		array_push($result,array(
		    "id"=>$res['Plant_ID'],
			"l_name"=>$res['Local_name'],
			"b_name"=>$res['Botanical_name'],
			"img"=>$res['image'],
			"price"=>$res['price(PKR)'],
			"hazard"  => $res['Known_hazards'],
			"soil"=>$res['Soil'],
			"habitat"=>['Habitat']
			)
			
		);
		}
		
		echo json_encode(array("prodresult"=>$result));
		
		mysqli_close($con);
		
	
	?>
		