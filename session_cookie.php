<?php
	//�Z�b�V�����J�n
	session_start();
?>


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
		
			//�Z�b�V��������
			if(isset($_POST["session_ope_type"]))
			{
				$type = $_POST["session_ope_type"];
				if($type == "set_name")
				{
					$user_name = trim($_POST["user_name"]);
					if(strlen($user_name) != 0)
					{
						$_SESSION["user_name"] = $user_name;
					}
				}
				else if($type == "delete_name")
				{
					unset($_SESSION["user_name"]);
				}
				else if($type == "reg_session_id")
				{
					session_regenerate_id();
				}
				else if($type == "set_cookie")
				{
					$cookie_val = trim($_POST["cookie_val"]);
					if(strlen($cookie_val) != 0)
					{
						setcookie("DL_Cookie" , $cookie_val);
					}
				}
				else if($type == "delete_cookie")
				{
					setcookie("DL_Cookie" , "" , time() - 1);
				}
			}
		
			//�Z�b�V������������Ε\��
			if(isset($_SESSION["user_name"]))
			{
				print "�Z�b�V�������[�U�[���F" . $_SESSION["user_name"] . "<br>";
				
				//�폜�{�^��
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "delete_name">';
				print '<INPUT type = "submit" value = "���[�U�[���폜">';
				print "</FORM><br>";
				
				print "�Z�b�V�����ϐ��ۑ���F" . session_save_path() . "<br>";
				print "�Z�b�V����ID�F" . session_id() . "<br>";
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "reg_session_id">';
				print '<INPUT type = "submit" value = "�Z�b�V����ID�̍X�V">';
				print "</FORM><br>";
			}
			//������ΐݒ�
			else
			{
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "text" name = "user_name"><br>';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "set_name">';
				print '<INPUT type = "submit" value = "���[�U�[���ݒ�">';
				print "</FORM><br>";
			}
			
			//�N�b�L�[�n
			if(isset($_COOKIE["DL_Cookie"]))
			{
				print "�N�b�L�[�ݒ�l(\"DL_Cookie\")�F" . $_COOKIE["DL_Cookie"] . "<br>";
				
				//�폜�{�^��
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "delete_cookie">';
				print '<INPUT type = "submit" value = "�N�b�L�[�폜">';
				print "</FORM><br>";
			}
			//������ΐݒ�
			else
			{
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "text" name = "cookie_val"><br>';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "set_cookie">';
				print '<INPUT type = "submit" value = "�N�b�L�[�ݒ�">';
				print "</FORM><br>";
			}
		?>
	</BODY>
</HTML>
