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
		
		<FORM method = "POST" action = "form_recerver.php">

			<!-- ���C������ -->	
			<?php
				
				print "�e�L�X�g�{�b�N�X";
				print "<INPUT type = \"text\" name = \"txt_box\" maxlength = \"10\" size = \"50\"><br><br>";
				print "�e�L�X�g�G���A<br>";
				print "<TEXTAREA name = \"txt_area\" rows = \"10\" cols = \"80\">���������ǉ��o����</TEXTAREA><br><br>";
				print "�p�X���[�h";
				print "<INPUT type = \"password\" name = \"password\"><br><br>";
				
				$chara_list = array("���O�i" , "�W��" , "�m�G��" , "���C�`�F��");
				print "�I�����X�g";
				print "<SELECT name = \"select_list\">";
				foreach($chara_list as $index => $chara_name)
				{
					if($index == 2)
					{
						print "<OPTION value = $index selected>$chara_name</OPTION>";
					}
					else
					{
						print "<OPTION value = $index>$chara_name</OPTION>";
					}
				}
				print "</SELECT><br><br>";
				
				$radio_list = array("��-13" , "��-11" , "��-12" , "�S���S13");
				print "���W�I�{�b�N�X";
				foreach($radio_list as $index => $chara_name)
				{
					if($index == 1)
					{
						print "<INPUT type = \"radio\" name = \"rd\" value = \"$index\" checked>$chara_name";
					}
					else
					{
						print "<INPUT type = \"radio\" name = \"rd\" value = \"$index\">$chara_name";
					}
				}
				print "<br><br>";
				
				$check_list = array("�A�Y���G��" , "�J�O��" , "�R�R�m�G" , "�C�U���C");
				print "�`�F�b�N�{�b�N�X<br>";
				foreach($check_list as $index => $chara_name)
				{
					if($index != 2)
					{
						print "<INPUT type = \"checkbox\" name = \"cb[]\" value = \"$index\" checked>$chara_name";
					}
					else
					{
						print "<INPUT type = \"checkbox\" name = \"cb[]\" value = \"$index\">$chara_name";
					}
					print "<br>";
				}
				
				print "<INPUT type = \"hidden\" name = \"id\" value = \"6221\">";
				
				$hidden_array = array("name" => "Blazblue" , "hard" => "PS3" , "UseChara" => "�e���~");
				$hidden_array_serialize = serialize($hidden_array);
				$hidden_array_encode = base64_encode($hidden_array_serialize);
				print "<INPUT type = \"hidden\" name = \"hdn_array\" value = \"$hidden_array_encode\">";
			?>
		
			<br><br>
			<INPUT type = "submit" value = "���M"> <INPUT type = "reset" value = "���Z�b�g">
		</FORM>
		
	</BODY>
</HTML>
