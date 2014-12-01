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
			//基数変換
			print "基数変換---------------------------------------------<br><br>";
			$base10 = 100;
			print "10進数({$base10})<br>";
			print "8進数→" . decoct($base10) . "<br>";
			print "2進数→" . decbin($base10) . "<br><br>";
			
			$base2 = 10100;
			print "2進数({$base2})<br>";
			print "10進数→" . bindec($base2) . "<br>";
			print "8進数→" . decoct(bindec($base2)) . "<br><br>";
			
			$base8 = 371;
			print "8進数({$base8})<br>";
			print "10進数→" . octdec($base8) . "<br>";
			print "2進数→" . decbin(octdec($base8)) . "<br><br>";
			
			print "桁数区切り---------------------------------------------<br><br>";
			$num = 12345567890.987654321;
			print "数値:{$num}<br>";
			print "3桁毎：" . number_format($num , 4) . "<br>";
			print "区切り文字変更：" . number_format($num , 4 , "-" , "|") . "<br>";
			
			print "乱数---------------------------------------------<br><br>";
			
			//PHP4.2.0以降では自動的に初期化されているので不要
			//srand() 又は mt_rand()
			
			print "rand()の最大値：" . getrandmax() . "<br>";
			print "mt_rand()の最大値：" . mt_getrandmax() . "<br>";
			
			print "rand() : " . rand() . "<br>";
			print "mt_rand() : " . mt_rand() . "<br>";
		?>
	</BODY>
</HTML>
