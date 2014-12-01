<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test~</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- 関数定義 -->
		<?php
			function get_function_list($func_array , $name , $selected_value)
			{			
				print "<p><SELECT size = \"20\" name = \"" . $name . "\">";
				foreach($func_array as $func_name)
				{
					print "<OPTION";
					if($func_name == $selected_value)
					{
						print " selected";
					}
					print " value = \"" . $func_name . "\">" . $func_name;
					print "</OPTION>";
				}
				print "</SELECT>";
				print "</p>";
			}
		?>

		<!-- メイン処理 -->	
		<?php
		
			//関数一覧を取得してソート
			$function_list = get_defined_functions();
			asort($function_list["internal"]);
			
			//選択してきたものを取得
			$name = "param";
			$selected_value = isset($_POST[$name]) ? $_POST[$name] : "";
			
			//選択してきたもののリンク先を取得
			$result = "";
			$link = "";
			if($selected_value != "")
			{		
				$result = sprintf("\$temp = %s();" , $selected_value);		
				$url = sprintf("http://www.php.net/manual/ja/function.%s.php" , str_replace("_" , "-" , $selected_value));
				$link = sprintf("<a href = \"%s\" target = \"_blink\">%s</a>" , $url , $selected_value);
			}
		?>

		<FORM method = "POST" action = "<?php echo $_SERVER["PHP_SELF"] ?>">
			<table cellpadding="10">
				<tr>
					<td>関数を選択:<br>
					<?php print get_function_list($function_list["internal"] , $name , $selected_value); ?>
					<input type = "submit" value = "作成" name = "sub">
					</td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>
						作成されたコード<br>
						<textarea name = "code" rows = "3" cols = "40"><?php print $result ?></textarea>
						<p>PHPマニュアルへのリンク: <?php print $link ?></p>
					</td>
				</tr>
			</table>
		</FORM>
		
		
	</BODY>
</HTML>
