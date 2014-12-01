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
			$csv_output = array
			(
				array("ノエル" , "女" , "Blazblue"),
				array("マリー" , "女" , "P4U"),
				array("テルミ" , "男" , "Blazblue"),
				array("番長" , "男" , "P4U"),
			);
			
			$str = "";
			foreach($csv_output as $chara_array)
			{
				$str .= implode("," , $chara_array);
				$str .= "\n";
			}
			
			$file = fopen("files/csv_ope.csv" , "w");
			flock($file , LOCK_EX);
			fputs($file , $str);
			flock($file , LOCK_UN);
			fclose($file);
			
			//読み込んで出力
			$file = fopen("files/csv_ope.csv" , "r");
			while($get_array = fgetcsv($file , 1000 , ","))
			{
				print_r($get_array);
				print "<hr>";
			}
			fclose($file);
		?>
	</BODY>
</HTML>
