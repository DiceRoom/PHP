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
			$csv_output = array
			(
				array("�m�G��" , "��" , "Blazblue"),
				array("�}���[" , "��" , "P4U"),
				array("�e���~" , "�j" , "Blazblue"),
				array("�Ԓ�" , "�j" , "P4U"),
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
			
			//�ǂݍ���ŏo��
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
