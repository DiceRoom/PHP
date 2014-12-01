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
		
		<FORM method = "POST" action = "form_recerver.php">

			<!-- メイン処理 -->	
			<?php
				
				print "テキストボックス";
				print "<INPUT type = \"text\" name = \"txt_box\" maxlength = \"10\" size = \"50\"><br><br>";
				print "テキストエリア<br>";
				print "<TEXTAREA name = \"txt_area\" rows = \"10\" cols = \"80\">初期情報も追加出来る</TEXTAREA><br><br>";
				print "パスワード";
				print "<INPUT type = \"password\" name = \"password\"><br><br>";
				
				$chara_list = array("ラグナ" , "ジン" , "ノエル" , "レイチェル");
				print "選択リスト";
				print "<SELECT name = \"select_list\">";
				foreach($chara_list as $index => $chara_name)
				{
					if($index == 2)
					{
						print "<OPTION value = $index selected>$chara_name</OPTION>";
					}
					else
					{
						print "<OPTION value = $index>$chara_name</OPTION>";
					}
				}
				print "</SELECT><br><br>";
				
				$radio_list = array("ν-13" , "Λ-11" , "μ-12" , "ゴルゴ13");
				print "ラジオボックス";
				foreach($radio_list as $index => $chara_name)
				{
					if($index == 1)
					{
						print "<INPUT type = \"radio\" name = \"rd\" value = \"$index\" checked>$chara_name";
					}
					else
					{
						print "<INPUT type = \"radio\" name = \"rd\" value = \"$index\">$chara_name";
					}
				}
				print "<br><br>";
				
				$check_list = array("アズラエル" , "カグラ" , "ココノエ" , "イザヨイ");
				print "チェックボックス<br>";
				foreach($check_list as $index => $chara_name)
				{
					if($index != 2)
					{
						print "<INPUT type = \"checkbox\" name = \"cb[]\" value = \"$index\" checked>$chara_name";
					}
					else
					{
						print "<INPUT type = \"checkbox\" name = \"cb[]\" value = \"$index\">$chara_name";
					}
					print "<br>";
				}
				
				print "<INPUT type = \"hidden\" name = \"id\" value = \"6221\">";
				
				$hidden_array = array("name" => "Blazblue" , "hard" => "PS3" , "UseChara" => "テルミ");
				$hidden_array_serialize = serialize($hidden_array);
				$hidden_array_encode = base64_encode($hidden_array_serialize);
				print "<INPUT type = \"hidden\" name = \"hdn_array\" value = \"$hidden_array_encode\">";
			?>
		
			<br><br>
			<INPUT type = "submit" value = "送信"> <INPUT type = "reset" value = "リセット">
		</FORM>
		
	</BODY>
</HTML>
