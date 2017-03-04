<?php

    /*
      0 : Deactivated Bus
      1 : Deactivated Bus
    */
  class BusRoute{
    public $BusNo = '';
    public $Desc = '';

    public function __CONSTRUCT(){}

     /* Method: RegisterBus
		   Description: Register new Bus
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 02:43am
		*/

		function RegisterBus(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO bus
                                        ( BusNo,Des)
                                        VALUES(
                                            '".$this->BusNo."',
                                            '".$this->Des."' )";
            if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = "Bus registered.";
			}else{
				$result[1] = 'Failed to register.';
			}

			return $result;
		}


         /* Method: UpdateBus
		   Description: Update Bus
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  BusID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:45 am
		*/

		function UpdateBus($BusID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  bus SET BusNo ='".$this->BusNo."', Des ='".$this->Des."'  WHERE BusID='".$BusID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}



        /* Method: GetBusDetails
		   Description: Get the details of teh Bus Route
		   Pre Reqs:
		   Parameters:  BusID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  GetBusDetails($BusID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM bus WHERE BusID='".$BusID."' ";;
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


        /* Method: DeactivateBus
		   Description: Deactivate the route
		   Pre Reqs:
		   Parameters: BusID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  DeactivateBus($BusID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();

			$query = "UPDATE  bus SET Status = '0'  WHERE BusID='".$BusID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}


        /* Method: ActivateBus
		   Description: Activate the route
		   Pre Reqs:
		   Parameters:  BusID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  ActivateBusRoute($BusID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  bus SET Status = '1'  WHERE BusID='".$BusID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}


  }
?>