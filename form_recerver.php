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
			print "�e�L�X�g�{�b�N�X -> ";
			$arg = $_POST["txt_box"];
			print "$arg<br>";
			
			
			
			print "�e�L�X�g�G���A -> ";
			$arg = $_POST["txt_area"];
			print "$arg<br>";
			
			print "�p�X���[�h -> ";
			$arg = $_POST["password"];
			print "$arg<br>";

			print "�I�����X�g -> ";
			$arg = $_POST["select_list"] . "�Ԃ�I��";
			print "$arg<br>";

			print "���W�I�{�^�� -> ";
			$arg = $_POST["rd"] . "�Ԃ�I��";
			print "$arg<br>";
			
			print "�`�F�b�N�{�b�N�X -> ";
			if(!isset($_POST["cb"]))
			{
				print "����";
			}
			else
			{
				foreach($_POST["cb"] as $index)
				{
					print $index . "�� ";
				}
			}
			print "<BR>";
			
			print "Hidden�Őݒ肵��ID��";
			$arg = $_POST["id"] . "��";
			print "$arg<br>";
			
			print "HiddenArrayEncode -> ";
			$arg = $_POST["hdn_array"];
			print "$arg<br>";
			print "HiddenArraySerialize -> ";
			$arg = base64_decode($arg);
			print "$arg<br>";
			print "HiddenArray -> ";
			print_r(unserialize($arg));
			print "<br>";
		?>
		
		<br><br>
		<a href = "form_sender.php">�߂�</a>
		
	</BODY>
</HTML>
