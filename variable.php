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
		
			//��`�ςݕϐ��\��
			print "��`�ςݕϐ�----------------<br>";
			$ar = get_defined_vars();
			print "<pre>";
			print_r($ar);
			print "</pre><br><br>";
			
			print "���ϐ�----------------<br><br>";
			print "�u���E�U:" . $_SERVER["HTTP_USER_AGENT"] . "<br>";
			print "IP�A�h���X:" . $_SERVER["REMOTE_ADDR"] . "<br>";
			print "<br><br>";
			
			print "�萔��`----------------<br><br>";
			define("USER_NAME" , "�_�C�X��");
			print "User:" . USER_NAME . "<br>";
			print "User:" . constant("USER_NAME");
		?>
	</BODY>
</HTML>
