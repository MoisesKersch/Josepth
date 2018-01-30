<?php
	$jscript = '';
	$js = '';
	$css = '';
	$cssfile = '';
	// loading files .js
	if($js = opendir('js'))
	{
		while(false !== ($filejs = readdir($js)))
		{
			if(is_file('js/'.$filejs))
			{
			 	$jscript.= '<script src="./js/'.$filejs.'">  </script>';
			}
		}
	}
	echo $jscript;

	//loading files .css
	if($css = opendir('css'))
	{
		while(false !== ($filecss = readdir($css)))
		{
			if(is_file('css/'.$filecss))
			{
			 	$cssfile.= '<link type="text/css" rel="stylesheet" href="./css/'.$filecss.'"/>';
			}
		}
	}
	echo $cssfile;
?>