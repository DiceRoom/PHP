<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- �֐���` -->
		<?php
		
			function print_chara_name($item , $key)
			{
				print $key . "." . $item . "����<br>";
			}
		
		?>
		
		<!-- ���C������ -->	
		<?php
		
		//�������ƕ\��
		$chara_name = array("���O�i" , "�W��");
		print_r($chara_name);
		print "<br>";
		
		$chara_name = array("���O�i" => "�u���b�h�G�b�W" , "�W��" => "�L�T���M");
		print_r($chara_name);
		print "<br>";

		$chara_name = array("�A���N�l" , "���C�`" => "�t�F�C����");
		print_r($chara_name);
		
		print "<br><br>";
		print "var_dump:";
		var_dump($chara_name);
		print "<br>";
		print "var_export";
		var_export($chara_name);
		print "<br><br>";
		
		//�J�E���g
		
		$chara_name = array("���O�i" , "�W��" => "�L�T���M" , "�m�G��" , "���O�i" , "���O�i" , "�m�G��");
		print_r($chara_name);
		print "<br>";
		print "�v�f���F" . count($chara_name) . "<br>";
		print "�o���p�x�F";
		print_r(array_count_values($chara_name));
		print "<br><br>";
		
		//�}�[�W
		$merge_name = array("�W��" , "�W��" => "�L�T���M" , "�W��");
		$merge_list = array_merge($chara_name , $merge_name);
		print "array_merge�F";
		print_r($merge_list);
		print "<br>";
		$merge_list = array_merge_recursive($chara_name , $merge_name);
		print "array_merge_recursive�F";
		print_r($merge_list);
		print "<br><br>";
		
		//�\�[�g
		$sort_list = array("a" => 20 , "b" => 15 , "c" => 10 , "d" => 100);
		print "BeforeSort<br>";
		print_r($sort_list);
		print "<br>AfterSort<br>";
	
		$after_list = $sort_list;
		sort($after_list);
		print "sort�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		sort($after_list , SORT_STRING);
		print "sort(SORT_STRING)�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		asort($after_list);
		print "asort�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		asort($after_list , SORT_STRING);
		print "asort(SORT_STRING)�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		rsort($after_list);
		print "rsort�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		rsort($after_list , SORT_STRING);
		print "rsort(SORT_STRING)�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		arsort($after_list);
		print "arsort�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		arsort($after_list , SORT_STRING);
		print "arsort(SORT_STRING)�F";
		print_r($after_list);
		print "<br>";
		
		$after_list = array_reverse($sort_list);
		print "array_reverse�F";
		print_r($after_list);
		print "<br><br>";
		
		//�Z�b�^�[
		$array = array(10 , 20 , 30);
		print "�����l�F";
		print_r($array);
		print "<br>";
		
		$disp_array = array_pad($array , 10 , -1);
		print "10�Ɋg��(�����l�L��)<br>";
		print_r($disp_array);
		print "<br><br>";
		
		//�����_����o��
		$chara_name = array("���O�i" , "�W��" , "�m�G��" , "���C�`�F��" , "�e�C�K�[" , "�A���N�l" , "���C�`");
		print "�L�����ꗗ�F<br>";
		print_r($chara_name);
		print "<br>";
		print "�����_���ň��o���F" . $chara_name[array_rand($chara_name)] . "<br>";
		$keys = array_rand($chara_name , 2);
		print "�����_���œ��o���F" . $chara_name[$keys[0]] . "��" . $chara_name[$keys[1]] . "<br>";
		print "�V���b�t���F";
		$shuffle_array = $chara_name;
		shuffle($shuffle_array);
		print_r($shuffle_array);
		print "<br><br>";
		
		print "2�Ԗڂ���5�Ԗڂ܂Ő؂蔲��<br>";
		print_r(array_slice($chara_name , 2 , 4));
		print "<br>";
		
		//�ꊇ����
		print "<br>�ꊇ����<br>";
		array_walk($chara_name , "print_chara_name");
			
		?>
	</BODY>
</HTML>
