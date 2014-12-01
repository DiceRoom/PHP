<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<?php require_once("performance_checker.php"); ?>
	
		<!-- 関数定義 -->
		<?php
			$checker = new PerformanceChecker();
			$checker -> begin_check(0);
			
			//現在の時間
			$time_stamp = time();
			print "現在のタイムスタンプ：" . $time_stamp . "<br>";
			print "現在の時刻：" . date("Y/m/d H:i:s" , $time_stamp) . "<br>";
			
			print_r(getdate());
			
			$checker -> end_check(0);
			//print "一応：" . $checker -> get_check_micro_second(0);
		?>
		
		<!-- メイン処理 -->	
		<?php
		?>
	</BODY>
</HTML>
