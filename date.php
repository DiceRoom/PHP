<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<?php require_once("performance_checker.php"); ?>
	
		<!-- �֐���` -->
		<?php
			$checker = new PerformanceChecker();
			$checker -> begin_check(0);
			
			//���݂̎���
			$time_stamp = time();
			print "���݂̃^�C���X�^���v�F" . $time_stamp . "<br>";
			print "���݂̎����F" . date("Y/m/d H:i:s" , $time_stamp) . "<br>";
			
			print_r(getdate());
			
			$checker -> end_check(0);
			//print "�ꉞ�F" . $checker -> get_check_micro_second(0);
		?>
		
		<!-- ���C������ -->	
		<?php
		?>
	</BODY>
</HTML>
