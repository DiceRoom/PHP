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
		
			//����
			require_once("question_list.php");
			$question_val = count($question_list);
			if($question_val != count($answer_list))
			{
				die("�����Ǝ���̐�����v���Ă��܂���");
			}
			
			$question_index = 0;
			$quesition_no_list = array();
			$true_answer = "";
		
			//����
			if(!isset($_POST["id"]))
			{
				//�����_���p�̔z�������
				$quesition_no_list = range(0 , $question_val - 1);
				shuffle($quesition_no_list);
			}
			//����ȊO
			else
			{
				$quesition_no_list = explode("," , $_POST["shuffle_list"]);
				
				//�����`�F�b�N
				$question_index = $_POST["id"];
				$answer_question_no = $quesition_no_list[$question_index - 1];
				$str = trim($_POST["answer"]);
				$true_answer = $answer_list[$answer_question_no];
				if($str != $true_answer)
				{
					$question_index = -1;
				}
			}
		
			
			if($question_index == -1)
			{
				print "�s�����ł��A�����́u" . $true_answer . "�v�ł���<br>���L��菉�߂ɂ��߂肭������<br><br>";
				print '<a href = "' . $_SERVER["PHP_SELF"] . '">�߂�</a>';
			}
			else
			{
				//�I��
				if($question_index >= $question_val)
				{
					print "�S�␳���ł��A���L��菉�߂ɂ��߂肭������<br>";
					print '<a href = "' . $_SERVER["PHP_SELF"] . '">�߂�</a>';
				}
				else
				{
					//�^�C���]�[���̐ݒ�
					date_default_timezone_set('Asia/Tokyo');
					
					$question_no = $quesition_no_list[$question_index];
					print "��" . ($question_index + 1) . "<br>";
					print $question_list[$question_no] . "�̃L�[���[�h<br>";
					
					print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';	
					print '<INPUT type = "text" size = "2" name = "answer">';
					print '<INPUT type = "hidden" name = "id" value = "' . ($question_index + 1) . '">';
					print '<INPUT type = "hidden" name = "shuffle_list" value = "' . implode("," , $quesition_no_list) . '">';
					print '<INPUT type = "submit" value = "��">';
					print "</FORM>";
				}
			}
		?>
		
	</BODY>
</HTML>
