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
			
			//アップロードされたファイルがある時コピーする
			if(is_uploaded_file(@$_FILES["upfile"]["tmp_name"]))
			{
				//コピー
				$dir = "upload/";
				$file_path = $dir . $_FILES["upfile"]["name"];
				copy($_FILES["upfile"]["tmp_name"] , $file_path);
				
				//表示
				print "ファイルアップロード完了<br>";
				print "ファイルパス：{$file_path}<br>";
				print "<br><br><br>";
			}
		?>
		
		<FORM method = "POST" action = "<?php print $_SERVER["PHP_SELF"]; ?>" enctype = "multipart/form-data">
		アップロードするファイルを選択してください<br>
		<INPUT type = "file" name = "upfile"><br>
		<INPUT type = "submit" value = "アップロード">
		</FORM>
	</BODY>
</HTML>
