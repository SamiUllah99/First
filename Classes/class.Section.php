<?php
    class Section{


        public $Title = "";
        public $Des = "";
        public $Fee = "";
        public $ClassID = "";



        public function __CONSTRUCT(){

        }


         /* Method: RegisterSection
		   Description: Register new Section
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:43
		*/

		function RegisterSection(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO section ( Title,Fee,Des,ClassID)VALUES('".$this->Title."','".$this->Fee."','".$this->Des."','".$this->ClassID."' )";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = "Section Registered against Class # ".$this->ClassID." ";
			}else{
				$result[1] = 'Failed to register Class.';
			}

			return $result;
		}


         /* Method: UpdateSection
		   Description: Update Section
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  SectionID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:45 am
		*/

		function UpdateClass($SectionID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  section SET Title = '".$this->Title."', Fee ='".$this->Fee."', Des ='".$this->Des."', ClassID ='".$this->ClassID."'  WHERE SectionID='".$SectionID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'Section Updated.';
			}else{
				$result[1] = 'Failed to update Sect .';
			}

			return $result;
		}

        /* Method: GetSectionDetails
		   Description: Get the details of teh Section
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

		function GetSectionDetails($SectionID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM section WHERE SectionID='".$SectionID."' ";;
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
		   Parameters:  $Title (string), ClassID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function SectionAlreadyExists($Title, $ClassID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT count(*) as numb from section WHERE Title='".$Title."' AND ClassID='".$ClassID."' ";;
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