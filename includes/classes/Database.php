<?php 
	class Database{
		private $db_host = 'localhost';
		private $db_user = 'root';
		private $db_pass = '';
		private $db_name = 'final_projectDB';

		protected $dbh;
		protected $stmt;

		puplic function __construct(){
			$this->dbh = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user, $this->db_pass);
		}

		puplic function query($query) {
			$this->stmt = $this->dbh->prepare($query);
		}

		public function bind($param, $value, $type = null) {
			if(is_null($type)) {
				switch(true) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;
					case is_null()		
				}
			}
		}
	}




?>