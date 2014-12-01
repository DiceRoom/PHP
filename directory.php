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
			//ディレクトリの生成削除
			if(isset($_POST["post_type"]))
			{
				$type = $_POST["post_type"];
				if($type == "create")
				{
					$directory_name = $_POST["dir_name"];
					if(is_dir($directory_name))
					{
						print "指定場所には既にディレクトリが存在します：";
					}
					else if(mkdir($directory_name , 0777))
					{
						print "ディレクトリの作成成功：";
					}
					else
					{
						print "ディレクトリの作成失敗：";
					}
					print $directory_name;
				}
				else if($type == "delete")
				{
					$directory_name = $_POST["dir_name"];
					if(!is_dir($directory_name))
					{
						print "ディレクトリが存在しません：";
					}
					else if(rmdir($directory_name))
					{
						print "ディレクトリの削除に成功：";
					}
					else
					{
						print "ディレクトリの削除に失敗：";
					}
					print $directory_name;
				}
				print "<hr>";
			}
			
			//ディレクトリ一覧
			print "ディレクトリ一覧<br>";
			$current_dir_name = "./";
			$dir_list = array();
			while(true)
			{
				//ディレクトリとして正しい時のみ表示
				if(is_dir($current_dir_name))
				{
					//現在のディレクトリの絶対パス表示
					$abs_path = realpath($current_dir_name);
					$info = pathinfo($abs_path);
					$free = diskfreespace($abs_path);
					print "<br>( " . $abs_path . " => DiscFreeSpace(" . $free . ") )---------------------------------------------------------<br>";
					
					//含まれるファイルの全表示
					$dir = dir($current_dir_name);
					$file_val = 0;
					while($file_name = $dir -> read())
					{
						if($file_name != "." && $file_name != "..")
						{
							//ディレクトリの場合は追加
							$path = $current_dir_name . $file_name;
							if(is_dir($path))
							{
								array_push($dir_list , $current_dir_name . $file_name . "/");
							}
							//
							else
							{
								print $file_name . "<br>";
							}
							++ $file_val;
						}
					}
					if($file_val == 0)
					{
						$myaddr = $_SERVER["PHP_SELF"];
						print "<FORM method = \"POST\" action = \"" . $myaddr . "\">";
						print "<INPUT type = \"hidden\" name = \"post_type\" value = \"delete\">";
						print "<INPUT type = \"hidden\" name = \"dir_name\" value = \"" . $abs_path . "\">";
						print "<INPUT type = \"submit\" value = \"削除\">";
						print "</FORM>";
					}
				}
				//不正
				else
				{
					print "<br>( " . $current_dir_name . " )---------------------------------------------------------<br>";
					print "不正なディレクトリです<br>";
				}
			
				//終了チェック
				if(count($dir_list) == 0)
				{
					break;
				}
			
				//次へ
				$current_dir_name = $dir_list[0];
				array_shift($dir_list);
			}
			print "<br><hr><br>";
		?>
		
		ディレクトリの生成
		<FORM method = "POST" action = <?php print $_SERVER["PHP_SELF"]; ?>>
		<INPUT type = "text" name = "dir_name" size = 80><br>
		<INPUT type = "hidden" name = "post_type" value = "create">
		<INPUT type = "submit" value = "作成">
		</FORM>
		<br><br><br>
	</BODY>
</HTML>
