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
			//��ϊ�
			print "��ϊ�---------------------------------------------<br><br>";
			$base10 = 100;
			print "10�i��({$base10})<br>";
			print "8�i����" . decoct($base10) . "<br>";
			print "2�i����" . decbin($base10) . "<br><br>";
			
			$base2 = 10100;
			print "2�i��({$base2})<br>";
			print "10�i����" . bindec($base2) . "<br>";
			print "8�i����" . decoct(bindec($base2)) . "<br><br>";
			
			$base8 = 371;
			print "8�i��({$base8})<br>";
			print "10�i����" . octdec($base8) . "<br>";
			print "2�i����" . decbin(octdec($base8)) . "<br><br>";
			
			print "������؂�---------------------------------------------<br><br>";
			$num = 12345567890.987654321;
			print "���l:{$num}<br>";
			print "3�����F" . number_format($num , 4) . "<br>";
			print "��؂蕶���ύX�F" . number_format($num , 4 , "-" , "|") . "<br>";
			
			print "����---------------------------------------------<br><br>";
			
			//PHP4.2.0�ȍ~�ł͎����I�ɏ���������Ă���̂ŕs�v
			//srand() ���� mt_rand()
			
			print "rand()�̍ő�l�F" . getrandmax() . "<br>";
			print "mt_rand()�̍ő�l�F" . mt_getrandmax() . "<br>";
			
			print "rand() : " . rand() . "<br>";
			print "mt_rand() : " . mt_rand() . "<br>";
		?>
	</BODY>
</HTML>
