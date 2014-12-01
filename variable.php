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
		
			//定義済み変数表示
			print "定義済み変数----------------<br>";
			$ar = get_defined_vars();
			print "<pre>";
			print_r($ar);
			print "</pre><br><br>";
			
			print "環境変数----------------<br><br>";
			print "ブラウザ:" . $_SERVER["HTTP_USER_AGENT"] . "<br>";
			print "IPアドレス:" . $_SERVER["REMOTE_ADDR"] . "<br>";
			print "<br><br>";
			
			print "定数定義----------------<br><br>";
			define("USER_NAME" , "ダイスル");
			print "User:" . USER_NAME . "<br>";
			print "User:" . constant("USER_NAME");
		?>
	</BODY>
</HTML>
