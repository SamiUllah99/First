<?php
	
	class Admin{
		public $AdminID = 0;
		public $Name = '';
		public $DoB;
		public $Email;
		public $Password;
		public $Pic;
		public $Contact;
		public $LastUpdated;
		public $FatherName;
		public $LastLogin;
		public $CNIC;
		
		function __CONSTRUCT(){
			
		}
		
		/* Method: loginAdmin
		   Description: Checks the admin credentials in the DB and creates the session
		   Pre Reqs:
		   Parameters: email (string), pass (string)
		   Return Type: Array
		   
		   Status: Complete
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 24-Dec-2016, 6:28 pm
		*/
		function loginAdmin($email, $pass){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
			$data = $db->executeQuery("SELECT * FROM admin WHERE Email='".$email."' AND Password='".$pass."' AND Status=1 " , 'read_many' );
			
			if(mysqli_num_rows($data)>0){
				$data = mysqli_fetch_assoc($data);
				$_SESSION['adminLogin'] = true;
				$_SESSION['adminDetails'] = $data;
				$result[0] = true;
				$result[1] = 'Admin found and logged in.';

			}else{
				$result[1] = 'Invalid email/password.';
				
			}
			return $result;
		}
		
		
		 
		
		/* Method: checkPass
		   Description: Checks the provided password againts DB password.
		   Pre Reqs:
		   Parameters: AdminID (string), pass (string)
		   Return Type: Array
		   
		   Status: Complete
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 24-Dec-2016, 6:28 pm
		*/
		function checkPass($pass, $adminID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
			$query = "select * from admin where Password='".$pass."' AND AdminID='".$adminID."' ";
			$res = $db->executeQuery($query, 'read_many');
			$rows = mysqli_num_rows($res);
			if ($rows == 1) {
				$result[0] = true;
				$result[1] = 'Password is correct.';
				
			}else{
				$result[1] = 'Password is incorrect.';
			}
			return $result;
		}
		
		
		/* Method: getPass and setPass
		   Description: Getter and Setter for password attribute.
		   Pre Reqs:
		   Parameters: AdminID (string), pass (string)
		   Return Type: Pass (string) / None
		   
		   Status: Complete
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 24-Dec-2016, 7:11 pm
		*/
		function getPass(){
			return $this->password;
		}
		
		function setPass($pass){
			$this->password = $pass;
		}
		
		
		/* Method: checkEmail
		   Description: Checks email against the DB
		   Pre Reqs:
		   Parameters:  email (string)
		   Return Type: result (Array) 
		   
		   Status: Complete
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 24-Dec-2016, 7:12 pm
		*/
		
		function checkEmail($email){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$dbCon = new DatabaseManager();
			$query = "SELECT COUNT(email) as numb from admin WHERE email='".$email."'  ";
			$data = $dbCon->executeQuery($query, 'read');
			if($data[0]){
				if($data[2]['numb']>0){
					$result[0] = true;
					$result[1] = 'Email exists.';
				}else{
					$result[0] = false;
					$result[1] = "Email does not exist.";
				}
			}
			return $result;
		}
		
		
		/* Method: addAdmin
		   Description: Add new admin.
		   Pre Reqs:
		   Parameters:  **************************************************
		   Return Type: result (Array) 
		   
		   Status: Incomplete.
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 24-Dec-2016, 7:17 pm
		*/
		function addAdmin(){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			
			$CheckData = $this->checkEmail($this->Email);

			if($CheckData[0]){
				$result[1] = $CheckData[1];
			}else{
				$dbCon = new DatabaseManager();
				$query= "INSERT INTO admin
										(
										Name, 
										Email, 
										Password, 
										DoB,
										Pic,
										Contact,
										FatherName, 
										CNIC
										) 
										VALUES(
										'".$this->Name."',
										'".$this->Email."',
										'".$this->Password."',
										'".$this->DoB."',
										'".$this->Pic."',
										'".$this->Contact."',
										'".$this->CNIC."'
						)";
                $dbResult =$dbCon->executeQuery($query, 'insert');
				if($dbResult[0]){
					$result[0] = true;
					$result[1] = 'Admin Data inserted.';
				}else{
					$result[1] = 'Failed to add admin';
				}	
			}	
			return $result;		
		}
		
		/* Method: MovePicture
		   Description: Moves the admin pic to the directory, and removes the old one if any.
		   Pre Reqs:
		   Parameters:  
		   Return Type: result (Array) 

		   Status: Complete.
		   
		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
		   
		   Last Edit: 25-Dec-2016, 8:11 pm
		*/
		
		function MovePicture($AdminID){
			if(empty($this->Pic['logo']['name'])){
				return "";
			}else{
				$CurrentPic = $this->GetCurrentPicName($AdminID);
				if(!$CurrentPic==''){
					unlink($CurrentPic);
				}
			
				$foo = new Upload($this->Pic); 
				$filename = time();
				if ($foo->uploaded) {
					$foo->file_new_name_body = $filename;
					$foo->image_resize = true;
					$foo->image_ratio_fill = true;
					$foo->image_convert= 'jpg';
					$foo->image_x = 300;
					$foo->image_y = 300;
					$foo->Process('cdn/AdminPic/');
					
					if($foo->processed){
						$done = true;
					}else {
						$done = false;
					}	
				}
				
				return $filename;
			}
		}
		
		function GetCurrentPicName($AdminID){
			$db = new DatabaseManager();
			$data = $db->executeQuery("SELECT Pic as pic FROM admin WHERE AdminID='".$AdminID."' " , 'read' );
			return $data['pic'];
		}
		
		function updateAdmin($adminID, $pass){
			$db = new DatabaseManager();
			$query = "UPDATE admin SET  password='{$pass}' WHERE id=$adminID ";
			if($db->executeQuery($query , 'update' )){
				return true;
			}else{
				return false;
			}
		}
		
	}
?>