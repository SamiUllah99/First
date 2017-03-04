<?php
	class DatabaseManager{
		private $server = "localhost";
		private $dbName = "studentinfo";
		private $user = "root";
		private $pass = "";
		
		private $conn = "";
		
		function __CONSTRUCT(){
			
		}
		
		private function establishConnection(){
			$this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->dbName);
			if ($this->conn){
				return true;
			}else{
				return false;
			}
		}
		
		
		
		function executeQuery($query, $type){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			if($this->establishConnection()){
					switch($type){
						case 'read':
							$data = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
							if(mysqli_num_rows($data)>0){  
								$res = mysqli_fetch_assoc($data);
								$result[0] = true;
								$result[1] = 'Found and fetched';
								$result[2] = $res;
							}else{
								$result[0] = false;
								$result[1] = 'Nothing found. 0 rows returned.';
							}
							return $result;
						break;
						
						case 'read_many':
							$data = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
							return $data;
						break;
						
												
						case 'update':
							$a = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
							if($a){
								return true;
							}else{
								return false;
							}
						break;
						
						case 'insert':
							$a = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
							if($a){
								return true;
							}else{
								return false;
							}
						break;
						
						case 'insertAndGetID':
							$a = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
							if($a){
								$res = array();
								$res[0] = true;
								$res[1] = mysqli_insert_id($this->conn);
								return $res;
							}else{
								$res = array();
								$res[0] = false;
								return $res;
							}
						break;
					}
			}	
		}
		
		
		private function closeConnection(){
			mysqli_close($this->conn);
		}
		
		
	
	
	}