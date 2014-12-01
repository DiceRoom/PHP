<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- 関数定義 -->
		<?php
		?>
		
		<!-- メイン処理 -->	
		<?php
		
			$url = "http://blog.esuteru.com/";
			//readfile($url);
			
			$file = fopen($url , "r") or die("OPENエラー");
			
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
