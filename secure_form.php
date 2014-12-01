<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- 関数定義 -->
		<?php
		?>
		
		入力値を暗号化します<br>
		<!-- メイン処理 -->	
		<?php
			$input_str = isset($_POST["code"]) ? $_POST["code"] : "";
			$act = $_SERVER["PHP_SELF"];
			
			print "<FORM method = \"POST\" action = {$act}>";
			print "<TEXTAREA name = \"code\" rows = \"5\" cols = \"80\">{$input_str}</TEXTAREA>";
			print "<br>";
			print "<INPUT type = \"submit\" value = \"暗号化\">";
			print "</FORM>";
			
			
			//ある場合のみ
			if($input_str)
			{
				$input_str = $_POST["code"];
				
				print "<br><br>---------------------------------------------------------<br><br>";
				print "入力文：" . $input_str . "<br><br>";
				
				$crypt_str = crypt($input_str);
				print "crypt：" . $crypt_str . "<br>";
				
				$md5_str = md5($input_str);
				print "md5：" . $md5_str . "<br>";
				
				$sha1_str = sha1($input_str);
				print "sha1：" . $sha1_str . "<br>";
			}
		?>
	</BODY>
</HTML>
