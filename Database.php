<?php
class Database{
	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;

	public $link;
	public $error;

	public function __construct(){
		$this->connectDB();
	}

	private function connectDB(){
		$this->link = new mysqli ($this->host, $this->user, $this->pass, $this->dbname );
		if (!$this->link) {
			$this->error = "connection Fail".$this->link->connection_error;
			return false;
		}
	}

	//select or read database
	public function select ($query){
		$result = $this->link->query($query) or die ($this->link->error.__link__);

		if ($result->num_rows > 0) {
			return $result;
		}
		else {
			return false;
		}
	}

	public function insert ($query) {
		$insert_row = $this->link->query($query) or die ($this->link->error.__link__);
		if($insert_row) {
			header("location: index.php?msg=".urlencode('Data Insert successfully.'));
			exit();
		}
		else{
			
			die("Error :(".$this->link->errno.")".$this->link->error); 

		}
	}

	public function update ($query) {
		$update_row = $this->link->query($query) or die ($this->link->error.__link__);
		if($update_row) {
			header("location: index.php?msg=".urlencode('Data Updated successfully.'));
			exit();
		}
		else{
			
			die("Error :(".$this->link->errno.")".$this->link->error); 

		}
	}

	public function delete ($query) {
		$delete_row = $this->link->query($query) or die ($this->link->error.__link__);
		if($delete_row) {
			header("location: index.php?msg=".urlencode('Data Deleted successfully.'));
			exit();
		}
		else{
			
			die("Error :(".$this->link->errno.")".$this->link->error); 

		}
	}
}


?>