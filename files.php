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
			$file_path = "files/sample.txt";
		
			//POSTで飛んできたとき
			if(isset($_POST["on_type"]))
			{
				$type= $_POST["on_type"];
				if($type == "write")
				{
					//上書き
					$txt = htmlspecialchars($_POST["txt_area"]);
					/*$file = fopen($file_path , "w") or die("OPEN エラー {$file_path}");
					flock($file , LOCK_EX);
					fputs($file , $txt);
					flock($file , LOCK_UN);
					fclose($file);*/
					
					//PHP5から
					file_put_contents($file_path , $txt);
				}
				else if($type == "add")
				{
					//追記
					$txt = "\n" . htmlspecialchars($_POST["txt_area"]);
					/*$file = fopen($file_path , "a") or die("OPEN エラー {$file_path}");
					flock($file , LOCK_EX);
					fputs($file , $txt);
					flock($file , LOCK_UN);
					fclose($file);*/
					
					//PHP5から
					file_put_contents($file_path , $txt , FILE_APPEND);
				}
			}
				
			print "{$file_path}<br>";
			$array = file($file_path);
			print_r($array);
			$contents = file_get_contents("files/sample.txt");
			print "<br>String(" . $contents . ")<br>";
			print "-------------------------------------------------------------<br>";
			print str_replace("\n" , "<br>" , $contents);
			print "<br>-------------------------------------------------------------<br><br>";
			
			//上書き
			$myaddr = $_SERVER["PHP_SELF"];
			print "<FORM method = \"POST\" action = {$myaddr}>";
			print "<TEXTAREA name = \"txt_area\" rows = \"5\" cols = \"80\"></TEXTAREA><br>";
			print "<INPUT type = \"submit\" value = \"上書き\">";
			print "<INPUT type = \"hidden\" name = \"on_type\" value = \"write\">";
			print "</FORM>";
			
			//追記
			$myaddr = $_SERVER["PHP_SELF"];
			print "<FORM method = \"POST\" action = {$myaddr}>";
			print "<INPUT type = \"text\" name = \"txt_area\"><br>";
			print "<INPUT type = \"submit\" value = \"追記\">";
			print "<INPUT type = \"hidden\" name = \"on_type\" value = \"add\">";
			print "</FORM>";
			
			//アクセスカウンタ
			print "<br>-------------------------------------------------<br>";
			print "アクセス回数：";
			
			$access_file = "files/counter.txt";
			$access_count = 1;
			if(file_exists($access_file))
			{
				$file = fopen($access_file , "r+");
				$access_count = fgets($file);
				++ $access_count;
			}
			else
			{
				$file = fopen($access_file , "w");
			}
			
			flock($file , LOCK_EX);
			rewind($file);
			fputs($file , $access_count);
			flock($file , LOCK_UN);
			fclose($file);
			print $access_count . "回";
		?>
	</BODY>
</HTML>
