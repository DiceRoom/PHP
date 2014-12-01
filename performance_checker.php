<?php

class PerformanceChecker
{
	/************************************************************************/
	/* ��{����                                                             */
	/************************************************************************/

	/// �R���X�g���N�^
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
	
	/// �f�X�g���N�^
	function __destruct()
	{
	}
	
	/************************************************************************/
	/* �A�N�Z�T                                                             */
	/************************************************************************/

	/// �v���J�n
	function begin_check($id)
	{
		//�͈̓`�F�b�N
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return;
		}
	
		//�ݒ�
		$this -> begin_time_list_[$id] = microtime(TRUE);
		$this -> end_time_list_[$id] = -1;
		$this -> public_var_ = 6221;
	}
	
	/// �v������
	function end_check($id)
	{
		//�͈̓`�F�b�N
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return;
		}
	
		//�ݒ�
		$this -> end_time_list_[$id] = microtime(TRUE);
	}
	
	/// �v�����ʂ��}�C�N���b�Ŏ擾
	function get_check_micro_second($id)
	{
		//�͈̓`�F�b�N
		if($id < 0 || $id >= PerformanceChecker::$LIST_VAL)
		{
			return -1;
		}
		
		
		//���킩�`�F�b�N
		if($this -> begin_time_list_[$id] == -1 || $this -> end_time_list_[$id] == -1)
		{
			return -1;
		}
		
		//�}�C�N���b�ŕԂ�
		
		print $this -> begin_time_list_[$id] . "<br>";
		print $this -> end_time_list_[$id] . "<br>";
		
		$micro_second = $this -> end_time_list_[$id] - $this -> begin_time_list_[$id];
		$micro_second = floor($micro_second * 1000000);
		return $micro_second;
	}

	/************************************************************************/
	/* �ϐ���`	                                                            */
	/************************************************************************/
	
	/// �g�p�\���X�g��
	static $LIST_VAL = 10;
	/// �J�n���ԃ��X�g
	private $begin_time_list_;
	/// �I�����ԃ��X�g
	private $end_time_list_;
	/// ���g�p
	public $public_var_;
}


?>
