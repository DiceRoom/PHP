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
		
		���ϐ���I��<br>
		<FORM method = "POST" action = <?php print $_SERVER["PHP_SELF"]; ?>
		
		<!-- ���C������ -->	
		<?php
		
			//��`�ςݕϐ��\��
			print "<SELECT name = \"args\">";
			$arg_key = isset($_POST["args"]) ? $_POST["args"] : "";
			foreach($_SERVER as $key => $val)
			{
				if($arg_key == $key)
				{
					print "<OPTION value = \"{$key}\" selected>{$key}</OPTION>";
				}
				else
				{
					print "<OPTION value = \"{$key}\">{$key}</OPTION>";
				}
			}
			print "</SELECT>";
			print "<INPUT type = \"submit\" value = \"�쐬\">";
						
			//�w��R�[�h������ꍇ
			if($arg_key)
			{
				print "<br><br>";
				print "�쐬���ꂽ�R�[�h:<br>";
				$set_php_str = '<?php print $_SERVER["' . $arg_key . '"]; ?>';
				
				print "<TEXTAREA rows = \"4\" cols = \"80\">$set_php_str</TEXTAREA>";
			}
		?>
		
		</FORM>
	</BODY>
</HTML>
