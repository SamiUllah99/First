<?php

    /*
      0 : Deactivated route
      1 : Deactivated route
    */
  class BusRoute{
    public $BusID = '';
    public $Route = '';
    public $Desc = '';

    public function __CONSTRUCT(){}

     /* Method: RegisterRoute
		   Description: Register new Bus Route
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

		function RegisterRoute(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO busroute
                                        ( BusID,Route,Des)
                                        VALUES(
                                            '".$this->BusID."',
                                            '".$this->Route."',
                                            '".$this->Desc."' )";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = "Section Registered against Class # ".$this->ClassID." ";
			}else{
				$result[1] = 'Failed to register Class.';
			}

			return $result;
		}


         /* Method: UpdateBusRoute
		   Description: Update Bus Route
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  BusRouteID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:45 am
		*/

		function UpdateBusRoute($BusRouteID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$db = new DatabaseManager();
			$query = "UPDATE  busroute SET BusID = '".$this->BusID."', Route ='".$this->Route."', Des ='".$this->Des."'  WHERE BusRouteID='".$BusRouteID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}



        /* Method: GetBusRouteDetails
		   Description: Get the details of teh Bus Route
		   Pre Reqs:
		   Parameters:  $SectionID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  GetBusRouteDetails($BusRouteID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM busroute WHERE BusRouteID='".$BusRouteID."' ";;
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


        /* Method: DeactivateBusRoute
		   Description: Deactivate the route
		   Pre Reqs:
		   Parameters:  BusRouteID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  DeactivateBusRoute($BusRouteID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;


			$dbCon = new DatabaseManager();
			$query = "UPDATE  busroute SET Status = '0'  WHERE BusRouteID='".$BusRouteID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}


        /* Method: ActivateBusRoute
		   Description: Activate the route
		   Pre Reqs:
		   Parameters:  BusRouteID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function  ActivateBusRoute($BusRouteID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;


			$dbCon = new DatabaseManager();
			$query = "UPDATE  busroute SET Status = '1'  WHERE BusRouteID='".$BusRouteID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}


       function GetAllBusRoutes(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM busroute";;

			$res = $dbCon->executeQuery($query, 'read_many');
            return $res;
        }


  }
?>