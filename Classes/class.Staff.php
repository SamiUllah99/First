<?php
    class Staff{


        public $StaffID = "";
        public $StaffNumber = "";
        public $Name = "";
        public $Contact = "";
        public $CNIC = "";
        public $Designation = "";
        public $Salary = "";



        public function __CONSTRUCT(){

        }


         /* Method: RegisterStaff
		   Description: Register new Staff member
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 03-Feb-2017, 01:00
		*/

		function RegisterStaff(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

            $NumberRes = $this->StaffNumberExists($this->StaffNumber);
            if($NumberRes[0]){
                $result[1] = 'Staff Number ('.$this->StaffNumbe.') already in use.';
                return $result;
            }

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO lowerstaff (
                                    StaffNumber,
                                    Name,
                                    Contact,
                                    CNIC,
                                    Post,
                                    Salary
                                    )VALUES(
                                    '".$this->StaffNumber."',
                                    '".$this->Name."',
                                    '".$this->Contact."',
                                    '".$this->CNIC."'
                                    '".$this->Designation."'
                                    '".$this->Salary."'
                                     )";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = "Staff Registered ";
			}else{
				$result[1] = 'Failed to register staff.';
			}

			return $result;
		}


         /* Method: UpdateStaff
		   Description: Update Staff
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  StaffID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:45 am
		*/

		function UpdateClass($StaffID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

            $NumberRes = $this->StaffNumberExists($this->StaffNumber);
            if($NumberRes[0]){
                $result[1] = 'Staff Number ('.$this->StaffNumbe.') already in use.';
                return $result;
            }

			$dbCon = new DatabaseManager();
			$query = "UPDATE  lowerstaff SET
                            StaffNumber = '".$this->StaffNumber."',
                            Name ='".$this->Name."',
                            Contact ='".$this->Contact."',
                            CNIC ='".$this->CNIC."' .
                            Post ='".$this->Designation."' .
                            Salary ='".$this->Salary."' .
                            WHERE StaffID='".$StaffID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Staff Updated.';
			}else{
				$result[1] = 'Failed to update Staff .';
			}

			return $result;
		}

        /* Method: GetStaffDetails
		   Description: Get the details of teh staff member
		   Pre Reqs:
		   Parameters:  $StaffID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function GetStaffDetails($StaffID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM lowerstaff WHERE StaffID='".$StaffID."' ";;
            $res = $dbCon->executeQuery($query, 'read');
			if($res[0]){
			    $result[0] = true;
			    $result[1] = $res[1];
                $result[2] = $res[2];
			}else{
				 $result[0] = false;
			     $result[1] = $res[1];
			}

			return $result;
		}

        /* Method: GetAlStaffDetails
		   Description: Get the details of all staff members
		   Pre Reqs:
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 15-Feb-2017, 05:31 pm
		*/

		function GetAlStaffDetails(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM lowerstaff";;

			$res = $dbCon->executeQuery($query, 'read_many');
            return $res;
        }





        /* Method: GetStaffDetailsByNumber
		   Description: Get the details of teh staff member
		   Pre Reqs:
		   Parameters:  $StaffID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function GetStaffDetailsByNumber($StaffNumber){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM lowerstaff WHERE StaffNumber='".$StaffNumber."' ";;
            $res = $dbCon->executeQuery($query, 'read');
			if($res[0]){
			    $result[0] = true;
			    $result[1] = $res[1];
                $result[2] = $res[2];
			}else{
				 $result[0] = false;
			     $result[1] = $res[1];
			}

			return $result;
		}

        /* Method: StaffNumberExists
		   Description: Check if NumberExists  exists
		   Pre Reqs:  All the class members are already initialized.
		   Parameters: StaffNumber  (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function StaffNumberExists($StaffNumber){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT count(*) as numb from lowerstaff WHERE StaffNumber='".$StaffNumber." ";
            $res = $dbCon->executeQuery($query, 'read');
			if($res[0]){
			    $result[0] = true;
			    $result[1] = $res[1];
			}else{
				 $result[0] = false;
			     $result[1] = $res[1];
			}

			return $result;
		}




    }
?>