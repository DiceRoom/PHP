<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- �֐���` -->
		<?php
		?>
		
		<!-- ���C������ -->	
		<?php
		
			$url = "http://blog.esuteru.com/";
			//readfile($url);
			
			$file = fopen($url , "r") or die("OPEN�G���[");
			
			while(!feof($file))
			{
				$str = trim(fgetss($file , 1000));
				if($str)
				{
					//print $str;
				}
			}
			
			fclose($file);
		?>
	</BODY>
</HTML>
