<?php

	class Driver{

		public $DriverID = '';
		public $Name = '';
		public $CNIC = '';
		public $ContactNo = '';
		public $Address = '';
		public $Salary = '';

		public function __CONSTRUCT(){}


        /* Method: RegisterDriver
		   Description: Register new Driver in the system. (Add to DB)
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 19-Dec-2017, 6:20 pm
		*/

		function RegisterDriver(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO driver
									(
										Name,
										CNIC,
										ContactNo,
										Address,
										Salary
									)VALUES(
										'".$this->Name."',
										'".$this->CNIC."',
										'".$this->ContactNo."',
										'".$this->Address."',
										'".$this->Salary."'
										)
									";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Driver Registered.';
			}else{
				$result[1] = 'Failed to register Driver.';
			}

			return $result;
		}

        /* Method: GerDriverDetails
		   Description: Get the driver details.
		   Pre Reqs:
		   Parameters: DriverID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 19-Dec-2017, 6:28 pm
		*/
        function GetDriverDetails($driverID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
            $db = new DatabaseManager();
            $query = "SELECT * FROM driver WHERE DriverID='".$driverID."' ";
            $dbResult = $db->executeQuery($query , 'read' );

            if($dbResult[0]){
                $result[0] = true;
			    $result[1] = $dbResult[1];
		    	$result[2] = $dbResult[2];
            }else{
                $result[0] = false;
			    $result[1] = $dbResult[1];
		    }
            return $result;
        }


         /* Method: UpdateDriver
		   Description: Updates the driver
		   Pre Reqs: The update variables are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 19-Jan-2017, 6:30 pm
        */
        function UpdateDriver($DriverID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "UPDATE driver SET Name = '".$this->Name."',
                                        CNIC = '".$this->CNIC."',
                                        ContactNo = '".$this->ContactNo."',
                                        Address = '".$this->Address."',
                                        Salary = '".$this->Salary."'
                                        WHERE DriverID='".$DriverID."'  ";

			if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
            }
			return $result;
		}

         /* Method: GetAllDrivers
		   Description: Get all the drivers
		   Pre Reqs:
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 19-Jan-2017, 6:30 pm
        */
        function GetAllDrivers(){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
            $query = "SELECT * from driver";
            return $db->executeQuery($query , 'update');
        }

}