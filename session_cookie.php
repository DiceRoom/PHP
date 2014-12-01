<?php
	//セッション開始
	session_start();
?>


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
		
			//セッション操作
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
		
			//セッション名があれば表示
			if(isset($_SESSION["user_name"]))
			{
				print "セッションユーザー名：" . $_SESSION["user_name"] . "<br>";
				
				//削除ボタン
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "delete_name">';
				print '<INPUT type = "submit" value = "ユーザー名削除">';
				print "</FORM><br>";
				
				print "セッション変数保存先：" . session_save_path() . "<br>";
				print "セッションID：" . session_id() . "<br>";
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "reg_session_id">';
				print '<INPUT type = "submit" value = "セッションIDの更新">';
				print "</FORM><br>";
			}
			//無ければ設定
			else
			{
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "text" name = "user_name"><br>';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "set_name">';
				print '<INPUT type = "submit" value = "ユーザー名設定">';
				print "</FORM><br>";
			}
			
			//クッキー系
			if(isset($_COOKIE["DL_Cookie"]))
			{
				print "クッキー設定値(\"DL_Cookie\")：" . $_COOKIE["DL_Cookie"] . "<br>";
				
				//削除ボタン
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "delete_cookie">';
				print '<INPUT type = "submit" value = "クッキー削除">';
				print "</FORM><br>";
			}
			//無ければ設定
			else
			{
				print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';
				print '<INPUT type = "text" name = "cookie_val"><br>';
				print '<INPUT type = "hidden" name = "session_ope_type" value = "set_cookie">';
				print '<INPUT type = "submit" value = "クッキー設定">';
				print "</FORM><br>";
			}
		?>
	</BODY>
</HTML>
