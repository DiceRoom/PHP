<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<br>
		<FORM method = "POST" action = "check_string.php">
			����<br><TEXTAREA name = "text_input" rows = "10" cols = "100"><?php if(isset($_POST["check_str"])){print $_POST["check_str"];} ?></TEXTAREA><br>
			<!-- ����������<INPUT type = "text" name = "search_str"><?php if(isset($_POST["search_str"])){print $_POST["search_str"];} ?><br> -->
			<br><INPUT type = "submit" value = "�`�F�b�N">
		</FORM>
		
		<!-- �֐���` -->
		<?php
		?>
		
		<!-- ���C������ -->	
		<?php
			if(isset($_POST["text_input"]))
			{
				$str = $_POST["text_input"];
				print "<br><br>";
				print "�o��-------------------------------------------------------------<br>";
				print "<br><font color = \"red\">���͒l</font><br>" . nl2br($str) . "<br><br>";
				
				$ope_list = array(
					"���^�����̃G�X�P�[�v" => escapeshellcmd($str),
					"���ꕶ���̃G�X�P�[�v" => htmlspecialchars($str),
					"�G�X�P�[�v�\�ȕ�����S�ăG�X�P�[�v" => htmlentities($str , ENT_QUOTES , "EUC-JP"),
					"�^�O����菜��" => strip_tags($str),
					"������̃G���R�[�h" => urlencode($str),
					"������̃G���R�[�h(base64)" => base64_encode($str),
				);
				
				foreach($ope_list as $ope_name => $out_str)
				{
					print "<font color = \"red\">$ope_name</font><br>$out_str<br><br>";
				}
			}
		?>
		
		
		
		
	</BODY>
</HTML>
