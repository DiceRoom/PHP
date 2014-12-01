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
		
			//準備
			require_once("question_list.php");
			$question_val = count($question_list);
			if($question_val != count($answer_list))
			{
				die("答えと質問の数が一致していません");
			}
			
			$question_index = 0;
			$quesition_no_list = array();
			$true_answer = "";
		
			//初回
			if(!isset($_POST["id"]))
			{
				//ランダム用の配列を作るよ
				$quesition_no_list = range(0 , $question_val - 1);
				shuffle($quesition_no_list);
			}
			//初回以外
			else
			{
				$quesition_no_list = explode("," , $_POST["shuffle_list"]);
				
				//正当チェック
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
				print "不正解です、正解は「" . $true_answer . "」でした<br>下記より初めにお戻りください<br><br>";
				print '<a href = "' . $_SERVER["PHP_SELF"] . '">戻る</a>';
			}
			else
			{
				//終了
				if($question_index >= $question_val)
				{
					print "全問正解です、下記より初めにお戻りください<br>";
					print '<a href = "' . $_SERVER["PHP_SELF"] . '">戻る</a>';
				}
				else
				{
					//タイムゾーンの設定
					date_default_timezone_set('Asia/Tokyo');
					
					$question_no = $quesition_no_list[$question_index];
					print "問" . ($question_index + 1) . "<br>";
					print $question_list[$question_no] . "のキーワード<br>";
					
					print '<FORM method = "POST" action = "' . $_SERVER["PHP_SELF"] . '">';	
					print '<INPUT type = "text" size = "2" name = "answer">';
					print '<INPUT type = "hidden" name = "id" value = "' . ($question_index + 1) . '">';
					print '<INPUT type = "hidden" name = "shuffle_list" value = "' . implode("," , $quesition_no_list) . '">';
					print '<INPUT type = "submit" value = "回答">';
					print "</FORM>";
				}
			}
		?>
		
	</BODY>
</HTML>
