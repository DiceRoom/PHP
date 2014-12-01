<HTML>
	<HEAD>
	<META name="Author" content="PHP Test">
	<META http-equiv="cache-control" content="no-cache">
	<TITLE>PHP Test</TITLE>
	</HEAD>
	<BODY bgcolor=#ffffff>
	
		<!-- 関数定義 -->
		<?php
		
			function print_chara_name($item , $key)
			{
				print $key . "." . $item . "さん<br>";
			}
		
		?>
		
		<!-- メイン処理 -->	
		<?php
		
		//初期化と表示
		$chara_name = array("ラグナ" , "ジン");
		print_r($chara_name);
		print "<br>";
		
		$chara_name = array("ラグナ" => "ブラッドエッジ" , "ジン" => "キサラギ");
		print_r($chara_name);
		print "<br>";

		$chara_name = array("アラクネ" , "ライチ" => "フェイリン");
		print_r($chara_name);
		
		print "<br><br>";
		print "var_dump:";
		var_dump($chara_name);
		print "<br>";
		print "var_export";
		var_export($chara_name);
		print "<br><br>";
		
		//カウント
		
		$chara_name = array("ラグナ" , "ジン" => "キサラギ" , "ノエル" , "ラグナ" , "ラグナ" , "ノエル");
		print_r($chara_name);
		print "<br>";
		print "要素数：" . count($chara_name) . "<br>";
		print "出現頻度：";
		print_r(array_count_values($chara_name));
		print "<br><br>";
		
		//マージ
		$merge_name = array("ジン" , "ジン" => "キサラギ" , "ジン");
		$merge_list = array_merge($chara_name , $merge_name);
		print "array_merge：";
		print_r($merge_list);
		print "<br>";
		$merge_list = array_merge_recursive($chara_name , $merge_name);
		print "array_merge_recursive：";
		print_r($merge_list);
		print "<br><br>";
		
		//ソート
		$sort_list = array("a" => 20 , "b" => 15 , "c" => 10 , "d" => 100);
		print "BeforeSort<br>";
		print_r($sort_list);
		print "<br>AfterSort<br>";
	
		$after_list = $sort_list;
		sort($after_list);
		print "sort：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		sort($after_list , SORT_STRING);
		print "sort(SORT_STRING)：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		asort($after_list);
		print "asort：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		asort($after_list , SORT_STRING);
		print "asort(SORT_STRING)：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		rsort($after_list);
		print "rsort：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		rsort($after_list , SORT_STRING);
		print "rsort(SORT_STRING)：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		arsort($after_list);
		print "arsort：";
		print_r($after_list);
		print "<br>";
		
		$after_list = $sort_list;
		arsort($after_list , SORT_STRING);
		print "arsort(SORT_STRING)：";
		print_r($after_list);
		print "<br>";
		
		$after_list = array_reverse($sort_list);
		print "array_reverse：";
		print_r($after_list);
		print "<br><br>";
		
		//セッター
		$array = array(10 , 20 , 30);
		print "初期値：";
		print_r($array);
		print "<br>";
		
		$disp_array = array_pad($array , 10 , -1);
		print "10個に拡張(初期値有り)<br>";
		print_r($disp_array);
		print "<br><br>";
		
		//ランダム取出し
		$chara_name = array("ラグナ" , "ジン" , "ノエル" , "レイチェル" , "テイガー" , "アラクネ" , "ライチ");
		print "キャラ一覧：<br>";
		print_r($chara_name);
		print "<br>";
		print "ランダムで一つ取出し：" . $chara_name[array_rand($chara_name)] . "<br>";
		$keys = array_rand($chara_name , 2);
		print "ランダムで二つ取出し：" . $chara_name[$keys[0]] . "＆" . $chara_name[$keys[1]] . "<br>";
		print "シャッフル：";
		$shuffle_array = $chara_name;
		shuffle($shuffle_array);
		print_r($shuffle_array);
		print "<br><br>";
		
		print "2番目から5番目まで切り抜き<br>";
		print_r(array_slice($chara_name , 2 , 4));
		print "<br>";
		
		//一括処理
		print "<br>一括処理<br>";
		array_walk($chara_name , "print_chara_name");
			
		?>
	</BODY>
</HTML>
