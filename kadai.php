<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- �֐���` -->
		<?php
		
			// ���݂���L�[�Ɨאڂ���L�[�z��̃}�b�v���擾
			function get_key_map($input)
			{
				$ret_array = array();
				$row_val = count($input);
				for($row_index = 0 ; $row_index < $row_val ; ++ $row_index)
				{				
					$col_val = count($input[$row_index]);
					for($col_index = 0 ; $col_index < $col_val ; ++ $col_index)
					{
						//���݂̈ʒu����E�Ɖ��̂ݒ��ׂ�
						if($row_index < $row_val - 1)
						{
							add_near_key($ret_array , $input , $row_index , $col_index , $row_index + 1 , $col_index);
						}
						if($col_index < $col_val - 1)
						{
							add_near_key($ret_array , $input , $row_index , $col_index , $row_index , $col_index + 1);
						}
					}
				}
				
				//�`�F�b�N�p
				foreach($ret_array as $key => $array_val)
				{
					print "�L�[({$key}<br>";
					foreach($array_val as $target_key)
					{
						print "{$target_key}<br>";
					}
					print "<br>";
				}
				
				return $ret_array;
			}
			
			//
			function add_near_key(&$add_list , $input , $src_row_index , $src_col_index , $dst_row_index , $dst_col_index)
			{
				//���݃`�F�b�N�Ƒ}��
				$src_key = $input[$src_row_index][$src_col_index];
				$dst_key = $input[$dst_row_index][$dst_col_index];
				if($src_key != $dst_key)
				{
					if(!array_key_exists($src_key , $add_list))
					{
						$add_list += array($src_key => array());
					}
					if(!array_key_exists($dst_key , $add_list))
					{
						$add_list += array($dst_key => array());
					}
					
					//�ǉ�
					if(!in_array($dst_key , $add_list[$src_key]))
					{
						array_push($add_list[$src_key] , $dst_key);
					}
					if(!in_array($src_key , $add_list[$dst_key]))
					{
						array_push($add_list[$dst_key] , $src_key);
					}
				}
			}
			
			//
			function culc_group(&$out_check_list , &$out_check_key_list , $key_map , $key)
			{
				print "�L�[:{$key}�̉�͊J�n<br>";
			
				//�܂��͎w�肳�ꂽ����ǉ�
				if(!add_culc_group($out_check_list , $key_map , $key))
				{
					return false;
				}
				
				//�אڂ��Ă��镨���ׂĂ�ǉ�
				foreach($key_map[$key] as $near_key)
				{
					if(!add_culc_group($out_check_list , $key_map , $near_key))
					{
						return false;
					}
				}
				
				//���[�v�����}��
				array_push($out_check_key_list , $key);
				
				//�אڂ��Ă�����̂𓯗l�Ƀ��[�v����
				foreach($key_map[$key] as $near_key)
				{
					//�܂����[�v���ĂȂ����̂�
					if(!in_array($near_key , $out_check_key_list))
					{
						if(!culc_group($out_check_list , $out_check_key_list , $key_map , $near_key))
						{
							return false;
						}
					}
				}
				
				return true;
			}
			
			function add_culc_group(&$out_check_list , $key_map , $key)
			{
				//���Ƀ`�F�b�N�ς݂̏ꍇ�͖���
				if(array_key_exists($key , $out_check_list))
				{
					return true;
				}
			
				//����̃L�[�Ŏg������̂��擾
				$use_list = array(FALSE , FALSE , FALSE , FALSE);
				foreach($key_map[$key] as $near_key)
				{
					//���Ɋm��ς݂̏ꍇ�̂�
					if(array_key_exists($near_key , $out_check_list))
					{
						$index = $out_check_list[$near_key];
						$use_list[$index] = TRUE;
					}
				}
				
				//���ׂĎg���Ȃ��ꍇ�͏I��
				$use_val = count($use_list);
				$group_index = 0;
				for( ; $group_index < $use_val ; ++ $group_index)
				{
					//���g�p�̏ꍇ�m��
					if(!$use_list[$group_index])
					{
						break;
					}
				}
				if($group_index >= $use_val)
				{
					return false;
				}
				
				//�ǉ�
				$out_check_list += array($key => $group_index);
				return true;
			}
		?>
		
		<!-- ���C������ -->	
		<?php
			
			/*$input = array(
				array("0","2","3","3","3","7","7","7","7","a"),
				array("0","2","2","2","3","7","8","8","a","a"),
				array("0","0","2","4","3","6","6","8","8","a"),
				array("1","0","4","4","4","6","9","9","8","a"),
				array("1","1","1","4","6","6","9","b","b","b"),
				array("1","5","5","5","5","5","9","9","b","b")
			);*/
			
			$input = array(
				array("0","2","3","3","3","7","7","7","7","a","r"),
				array("0","2","2","2","3","7","8","8","a","a","c"),
				array("z","0","2","g","3","6","6","8","8","a","c"),
				array("z","0","4","4","4","6","9","9","8","a","a"),
				array("z","z","1","4","6","6","9","b","b","b","d"),
				array("1","5","5","4","5","5","9","9","b","b","d"),
				array("z","5","4","4","4","6","9","9","8","a","e"),
				array("z","z","1","4","6","6","9","b","b","b","e"),
				array("1","5","5","5","5","5","9","9","b","b","e")
			);
			
			
			//��肠�����e��L�[�̗אڃL�[�}�b�v���o�͂��Ă݂悤
			$key_map = get_key_map($input);
			
			//�v�Z
			print "<br><br>-------------------------------------------<br><br>";
			
			$key_group_list = array();
			$out_check_key_list = array();
			
			if(culc_group($key_group_list , $out_check_key_list , $key_map , $input[0][0]))
			{
				$disp_list = array("<font color = \"red\">�{</font>" , "<font color = \"green\">�[</font>" , "<font color = \"blue\">�^</font>" , "��");
				$row_val = count($input);
				for($row_index = 0 ; $row_index < $row_val ; ++ $row_index)
				{				
					$col_val = count($input[$row_index]);
					for($col_index = 0 ; $col_index < $col_val ; ++ $col_index)
					{
						$key = $input[$row_index][$col_index];
						$index = $key_group_list[$key];
						print "{$disp_list[$index]}";
					}
					print "<br>";
				}
			}
			else
			{
				print "�`�F�b�N�s��";
			}
			
			print "<br><br>-------------------------------------------<br><br>";
		?>
	</BODY>
</HTML>
