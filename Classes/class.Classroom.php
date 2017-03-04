<?php
    class Classroom{
        // I wrote this class when it was fucking 4'C outside. God Bless sami, jis ne cups dho kar, chae pilae.

        public $Title = "";
        public $Des = "";

        public function __CONSTRUCT(){

        }


         /* Method: RegisterDriver
		   Description: Register new ClassRoom
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:30 am @ fucking 3'C outside
		*/

		function RegisterClass(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query  =" INSERT INTO class ( Title,Des)VALUES('".$this->Title."','".$this->Des."' )";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Class Registered.';
			}else{
				$result[1] = 'Failed to register Class.';
			}

			return $result;
		}


         /* Method: UpdateClass
		   Description: Update  ClassRoom
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  ClassID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:30 am @ fucking 3'C outside
		*/

		function UpdateClass($ClassID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  class SET Title = '".$this->Title."', Des ='".$this->Des."' ) WHERE ClassID='".$ClassID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Class Updated.';
			}else{
				$result[1] = 'Failed to udpate Class .';
			}

			return $result;
		}

        /* Method: GetClassDetails
		   Description: Get details of teh Classroom
		   Pre Reqs:
		   Parameters:  Title(String)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function GetClassDetails($ClassID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM class WHERE ClassID='".$ClassID."' ";;
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

        /* Method: ClassExists
		   Description: Check if class exists with this name or not
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  Title(String)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function ClassExists($Title){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT count(*) as numb from class WHERE Title='".$Title."' ";;
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