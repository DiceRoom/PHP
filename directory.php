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
			//�f�B���N�g���̐����폜
			if(isset($_POST["post_type"]))
			{
				$type = $_POST["post_type"];
				if($type == "create")
				{
					$directory_name = $_POST["dir_name"];
					if(is_dir($directory_name))
					{
						print "�w��ꏊ�ɂ͊��Ƀf�B���N�g�������݂��܂��F";
					}
					else if(mkdir($directory_name , 0777))
					{
						print "�f�B���N�g���̍쐬�����F";
					}
					else
					{
						print "�f�B���N�g���̍쐬���s�F";
					}
					print $directory_name;
				}
				else if($type == "delete")
				{
					$directory_name = $_POST["dir_name"];
					if(!is_dir($directory_name))
					{
						print "�f�B���N�g�������݂��܂���F";
					}
					else if(rmdir($directory_name))
					{
						print "�f�B���N�g���̍폜�ɐ����F";
					}
					else
					{
						print "�f�B���N�g���̍폜�Ɏ��s�F";
					}
					print $directory_name;
				}
				print "<hr>";
			}
			
			//�f�B���N�g���ꗗ
			print "�f�B���N�g���ꗗ<br>";
			$current_dir_name = "./";
			$dir_list = array();
			while(true)
			{
				//�f�B���N�g���Ƃ��Đ��������̂ݕ\��
				if(is_dir($current_dir_name))
				{
					//���݂̃f�B���N�g���̐�΃p�X�\��
					$abs_path = realpath($current_dir_name);
					$info = pathinfo($abs_path);
					$free = diskfreespace($abs_path);
					print "<br>( " . $abs_path . " => DiscFreeSpace(" . $free . ") )---------------------------------------------------------<br>";
					
					//�܂܂��t�@�C���̑S�\��
					$dir = dir($current_dir_name);
					$file_val = 0;
					while($file_name = $dir -> read())
					{
						if($file_name != "." && $file_name != "..")
						{
							//�f�B���N�g���̏ꍇ�͒ǉ�
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
						print "<INPUT type = \"submit\" value = \"�폜\">";
						print "</FORM>";
					}
				}
				//�s��
				else
				{
					print "<br>( " . $current_dir_name . " )---------------------------------------------------------<br>";
					print "�s���ȃf�B���N�g���ł�<br>";
				}
			
				//�I���`�F�b�N
				if(count($dir_list) == 0)
				{
					break;
				}
			
				//����
				$current_dir_name = $dir_list[0];
				array_shift($dir_list);
			}
			print "<br><hr><br>";
		?>
		
		�f�B���N�g���̐���
		<FORM method = "POST" action = <?php print $_SERVER["PHP_SELF"]; ?>>
		<INPUT type = "text" name = "dir_name" size = 80><br>
		<INPUT type = "hidden" name = "post_type" value = "create">
		<INPUT type = "submit" value = "�쐬">
		</FORM>
		<br><br><br>
	</BODY>
</HTML>
