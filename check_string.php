<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<br>
		<FORM method = "POST" action = "check_string.php">
			入力<br><TEXTAREA name = "text_input" rows = "10" cols = "100"><?php if(isset($_POST["check_str"])){print $_POST["check_str"];} ?></TEXTAREA><br>
			<!-- 検索文字列<INPUT type = "text" name = "search_str"><?php if(isset($_POST["search_str"])){print $_POST["search_str"];} ?><br> -->
			<br><INPUT type = "submit" value = "チェック">
		</FORM>
		
		<!-- 関数定義 -->
		<?php
		?>
		
		<!-- メイン処理 -->	
		<?php
			if(isset($_POST["text_input"]))
			{
				$str = $_POST["text_input"];
				print "<br><br>";
				print "出力-------------------------------------------------------------<br>";
				print "<br><font color = \"red\">入力値</font><br>" . nl2br($str) . "<br><br>";
				
				$ope_list = array(
					"メタ文字のエスケープ" => escapeshellcmd($str),
					"特殊文字のエスケープ" => htmlspecialchars($str),
					"エスケープ可能な文字を全てエスケープ" => htmlentities($str , ENT_QUOTES , "EUC-JP"),
					"タグを取り除く" => strip_tags($str),
					"文字列のエンコード" => urlencode($str),
					"文字列のエンコード(base64)" => base64_encode($str),
				);
				
				foreach($ope_list as $ope_name => $out_str)
				{
					print "<font color = \"red\">$ope_name</font><br>$out_str<br><br>";
				}
			}
		?>
		
		
		
		
	</BODY>
</HTML>
