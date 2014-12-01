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
			print "テキストボックス -> ";
			$arg = $_POST["txt_box"];
			print "$arg<br>";
			
			
			
			print "テキストエリア -> ";
			$arg = $_POST["txt_area"];
			print "$arg<br>";
			
			print "パスワード -> ";
			$arg = $_POST["password"];
			print "$arg<br>";

			print "選択リスト -> ";
			$arg = $_POST["select_list"] . "番を選択";
			print "$arg<br>";

			print "ラジオボタン -> ";
			$arg = $_POST["rd"] . "番を選択";
			print "$arg<br>";
			
			print "チェックボックス -> ";
			if(!isset($_POST["cb"]))
			{
				print "無し";
			}
			else
			{
				foreach($_POST["cb"] as $index)
				{
					print $index . "番 ";
				}
			}
			print "<BR>";
			
			print "Hiddenで設定したIDは";
			$arg = $_POST["id"] . "番";
			print "$arg<br>";
			
			print "HiddenArrayEncode -> ";
			$arg = $_POST["hdn_array"];
			print "$arg<br>";
			print "HiddenArraySerialize -> ";
			$arg = base64_decode($arg);
			print "$arg<br>";
			print "HiddenArray -> ";
			print_r(unserialize($arg));
			print "<br>";
		?>
		
		<br><br>
		<a href = "form_sender.php">戻る</a>
		
	</BODY>
</HTML>
