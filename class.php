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
			//�N���X�ǂݍ���
			require_once("performance_checker.php");
			if(class_exists("PerformanceChecker"))
			{
				//�N���X�ꗗ
				$class_list = get_declared_classes();
				print "<pre>";
				print_r($class_list);
				print "</pre><hr>";
				
				//�p�t�H�[�}���X�v���N���X�̏��\��
				print "<br>PerformanceChecker�N���X�̏��<br><br>";
				print "�N���X�v���p�e�B";
				print "<pre>";
				print_r(get_class_vars("PerformanceChecker"));
				print "</pre>";
				
				$per = new PerformanceChecker();
				print "�I�u�W�F�N�g�v���p�e�B";
				print "<pre>";
				print_r(get_object_vars($per));
				print "</pre>";
				
				print "�N���X���\�b�h";
				print "<pre>";
				print_r(get_class_methods("PerformanceChecker"));
				print "</pre>";
			}
		?>
	</BODY>
</HTML>
