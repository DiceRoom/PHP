<?php

class PerformanceChecker
{
	/************************************************************************/
	/* 基本処理                                                             */
	/************************************************************************/

	/// コンストラクタ
	function __construct()
	{
		$this -> begin_time_list_ = array();
		$this -> end_time_list_ = array();
	
		for($index = 0 ; $index < PerformanceChecker::$LIST_VAL ; ++ $index)
		{
			$this -> begin_time_list_[] = -1;
			$this -> end_time_list_[] = -1;
		}
	}
	
	/// デストラクタ
	function __destruct()
	{
	}
	
	/************************************************************************/
	/* アクセサ                                                             */
	/************************************************************************/

	/// 計測開始
	function begin_check($id)
	{
		//範囲チェック
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return;
		}
	
		//設定
		$this -> begin_time_list_[$id] = microtime(TRUE);
		$this -> end_time_list_[$id] = -1;
		$this -> public_var_ = 6221;
	}
	
	/// 計測完了
	function end_check($id)
	{
		//範囲チェック
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return;
		}
	
		//設定
		$this -> end_time_list_[$id] = microtime(TRUE);
	}
	
	/// 計測結果をマイクロ秒で取得
	function get_check_micro_second($id)
	{
		//範囲チェック
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return -1;
		}
		
		
		//正常かチェック
		if($this -> begin_time_list_[$id] == -1 || $this -> end_time_list_[$id] == -1)
		{
			return -1;
		}
		
		//マイクロ秒で返す
		
		print $this -> begin_time_list_[$id] . "<br>";
		print $this -> end_time_list_[$id] . "<br>";
		
		$micro_second = $this -> end_time_list_[$id] - $this -> begin_time_list_[$id];
		$micro_second = floor($micro_second * 1000000);
		return $micro_second;
	}

	/************************************************************************/
	/* 変数定義	                                                            */
	/************************************************************************/
	
	/// 使用可能リスト数
	static $LIST_VAL = 10;
	/// 開始時間リスト
	private $begin_time_list_;
	/// 終了時間リスト
	private $end_time_list_;
	/// 未使用
	public $public_var_;
}


?>
