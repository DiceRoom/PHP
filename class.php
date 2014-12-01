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
			//クラス読み込み
			require_once("performance_checker.php");
			if(class_exists("PerformanceChecker"))
			{
				//クラス一覧
				$class_list = get_declared_classes();
				print "<pre>";
				print_r($class_list);
				print "</pre><hr>";
				
				//パフォーマンス計測クラスの情報表示
				print "<br>PerformanceCheckerクラスの情報<br><br>";
				print "クラスプロパティ";
				print "<pre>";
				print_r(get_class_vars("PerformanceChecker"));
				print "</pre>";
				
				$per = new PerformanceChecker();
				print "オブジェクトプロパティ";
				print "<pre>";
				print_r(get_object_vars($per));
				print "</pre>";
				
				print "クラスメソッド";
				print "<pre>";
				print_r(get_class_methods("PerformanceChecker"));
				print "</pre>";
			}
		?>
	</BODY>
</HTML>
