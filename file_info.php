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
			
			//�A�b�v���[�h���ꂽ�t�@�C�������鎞�\��
			if(isset($_POST["file_path"]))
			{	
				//�\��
				print "�t�@�C�����--------------<br>";
				$file_path = $_POST["file_path"];
				print "�t�@�C���p�X�F" . $file_path . "<br>";
				if(!file_exists($file_path))
				{
					print "�t�@�C�������݂��܂���";
				}
				else
				{
					print "�ŏI�A�N�Z�X�����F" . date("y/m/d h:i:s" , fileatime($file_path)) . "<br>";
					print "�ŏI�X�V�����F" . date("y/m/d h:i:s" , filemtime($file_path)) . "<br>";
					print "�t�@�C���T�C�Y�F" . number_format(filesize($file_path)) . "Byte<br>";
					print "�������F" . fileperms($file_path) . "<br>";
					$file_info = pathinfo($file_path);
					print "�g���q�F" . $file_info["extension"] . "<br>";
					print "�t�@�C�����F" . $file_info["basename"] . "<br>";
				}
				
				print "<br><br><br>";
			}
		?>
		
		<FORM method = "POST" action = "<?php print $_SERVER["PHP_SELF"]; ?>" enctype = "multipart/form-data">
		�t�@�C���p�X�F<INPUT type = "text" name = "file_path" size = "80"><br>
		<INPUT type = "submit" value = "���\��">
		</FORM>
	</BODY>
</HTML>
