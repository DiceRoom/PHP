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
		
		<!-- ���C������ -->	
		<?php
			$file_path = "files/sample.txt";
		
			//POST�Ŕ��ł����Ƃ�
			if(isset($_POST["on_type"]))
			{
				$type= $_POST["on_type"];
				if($type == "write")
				{
					//�㏑��
					$txt = htmlspecialchars($_POST["txt_area"]);
					/*$file = fopen($file_path , "w") or die("OPEN �G���[ {$file_path}");
					flock($file , LOCK_EX);
					fputs($file , $txt);
					flock($file , LOCK_UN);
					fclose($file);*/
					
					//PHP5����
					file_put_contents($file_path , $txt);
				}
				else if($type == "add")
				{
					//�ǋL
					$txt = "\n" . htmlspecialchars($_POST["txt_area"]);
					/*$file = fopen($file_path , "a") or die("OPEN �G���[ {$file_path}");
					flock($file , LOCK_EX);
					fputs($file , $txt);
					flock($file , LOCK_UN);
					fclose($file);*/
					
					//PHP5����
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
			
			//�㏑��
			$myaddr = $_SERVER["PHP_SELF"];
			print "<FORM method = \"POST\" action = {$myaddr}>";
			print "<TEXTAREA name = \"txt_area\" rows = \"5\" cols = \"80\"></TEXTAREA><br>";
			print "<INPUT type = \"submit\" value = \"�㏑��\">";
			print "<INPUT type = \"hidden\" name = \"on_type\" value = \"write\">";
			print "</FORM>";
			
			//�ǋL
			$myaddr = $_SERVER["PHP_SELF"];
			print "<FORM method = \"POST\" action = {$myaddr}>";
			print "<INPUT type = \"text\" name = \"txt_area\"><br>";
			print "<INPUT type = \"submit\" value = \"�ǋL\">";
			print "<INPUT type = \"hidden\" name = \"on_type\" value = \"add\">";
			print "</FORM>";
			
			//�A�N�Z�X�J�E���^
			print "<br>-------------------------------------------------<br>";
			print "�A�N�Z�X�񐔁F";
			
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
			print $access_count . "��";
		?>
	</BODY>
</HTML>
