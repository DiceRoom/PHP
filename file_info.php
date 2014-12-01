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
		
		
		<!-- メイン処理 -->	
		<?php
			
			//アップロードされたファイルがある時表示
			if(isset($_POST["file_path"]))
			{	
				//表示
				print "ファイル情報--------------<br>";
				$file_path = $_POST["file_path"];
				print "ファイルパス：" . $file_path . "<br>";
				if(!file_exists($file_path))
				{
					print "ファイルが存在しません";
				}
				else
				{
					print "最終アクセス時刻：" . date("y/m/d h:i:s" , fileatime($file_path)) . "<br>";
					print "最終更新時刻：" . date("y/m/d h:i:s" , filemtime($file_path)) . "<br>";
					print "ファイルサイズ：" . number_format(filesize($file_path)) . "Byte<br>";
					print "許可属性：" . fileperms($file_path) . "<br>";
					$file_info = pathinfo($file_path);
					print "拡張子：" . $file_info["extension"] . "<br>";
					print "ファイル名：" . $file_info["basename"] . "<br>";
				}
				
				print "<br><br><br>";
			}
		?>
		
		<FORM method = "POST" action = "<?php print $_SERVER["PHP_SELF"]; ?>" enctype = "multipart/form-data">
		ファイルパス：<INPUT type = "text" name = "file_path" size = "80"><br>
		<INPUT type = "submit" value = "情報表示">
		</FORM>
	</BODY>
</HTML>
