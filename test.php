<?php 
//nav menu items
	$array = array
			 (
			 	array('slug' => "http://google.com", 'title' => "Tabajara")
			 );



	foreach($array as $key)
	{
		echo $key['title'];
	}

	//echo "<li><a href=\"$array[0]['key']\"> profile </a></li>"




	
?>