<?php
	$jscript = '';
	$js = '';

	if($js = opendir('js'))
	{
		while(false !== ($file = readdir($js)))
		{
			if(is_file('js/'.$file))
			{
			 	$jscript.= '<script src="./js/'.$file.'">  </script>';
			}
		}
	}
	echo $jscript;
?>
