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
			
			$array = ini_get_all();
			print "<pre>";
			print_r($array);
			print "</pre>";
		?>
	</BODY>
</HTML>
