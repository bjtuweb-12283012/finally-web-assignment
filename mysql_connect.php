
	<?php
		$con = mysql_connect("localhost","root","niuniu");
		
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("news", $con);
	?>
