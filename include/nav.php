<?php
	include('array.php');
?>
<ul>
<?php
	foreach($vec as $value)
	{
		echo "<li><a <a class='menuLinks' href='".$value['slug']."'>".$value['title']."</a></li>";
	}
?>
</ul>


