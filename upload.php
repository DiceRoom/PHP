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
			
			//�A�b�v���[�h���ꂽ�t�@�C�������鎞�R�s�[����
			if(is_uploaded_file(@$_FILES["upfile"]["tmp_name"]))
			{
				//�R�s�[
				$dir = "upload/";
				$file_path = $dir . $_FILES["upfile"]["name"];
				copy($_FILES["upfile"]["tmp_name"] , $file_path);
				
				//�\��
				print "�t�@�C���A�b�v���[�h����<br>";
				print "�t�@�C���p�X�F{$file_path}<br>";
				print "<br><br><br>";
			}
		?>
		
		<FORM method = "POST" action = "<?php print $_SERVER["PHP_SELF"]; ?>" enctype = "multipart/form-data">
		�A�b�v���[�h����t�@�C����I�����Ă�������<br>
		<INPUT type = "file" name = "upfile"><br>
		<INPUT type = "submit" value = "�A�b�v���[�h">
		</FORM>
	</BODY>
</HTML>
