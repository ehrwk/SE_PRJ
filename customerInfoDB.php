<?php
class DBC{
	public $db;
	public $query;
	public $result;

	public function DBI(){
		$this->db = new mysql('localhost', 'root', 'apmsetup', 'needprograms');
		$this->db->query('SET NAME UTF-8');
		if(mysql_connect_errno()){
			echo "데이터 베이스 연동에 실패했습니다.";
			exit;
		}
	}

	public function DBQ(){
		$this->result = $this->db->query($this->query);
	}

	public function DBO(){
		$this->result->free;
		$this->db->close();
	}
}
?>