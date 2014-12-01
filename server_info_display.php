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
		
		環境変数を選択<br>
		<FORM method = "POST" action = <?php print $_SERVER["PHP_SELF"]; ?>
		
		<!-- メイン処理 -->	
		<?php
		
			//定義済み変数表示
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
			print "<INPUT type = \"submit\" value = \"作成\">";
						
			//指定コードがある場合
			if($arg_key)
			{
				print "<br><br>";
				print "作成されたコード:<br>";
				$set_php_str = '<?php print $_SERVER["' . $arg_key . '"]; ?>';
				
				print "<TEXTAREA rows = \"4\" cols = \"80\">$set_php_str</TEXTAREA>";
			}
		?>
		
		</FORM>
	</BODY>
</HTML>
