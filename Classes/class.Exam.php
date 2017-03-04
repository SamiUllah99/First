<?php
    /*

      Exam Status 0 = Deactivated
      Exam Status 1 = Activated

    */
    class Exam{
        public $Title = "";
        public $Des = "";


        function _CONSTRUCT(){}

        /*
           Method: RegisterExam
		   Description: Register new Exam
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:03am
		*/

		function RegisterExam(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO exam ( Title,Des)VALUES('".$this->Title."','".$this->Des."' )";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = "Exam Registered ";
			}else{
				$result[1] = 'Failed to register exam.';
			}

			return $result;
		}



        /* Method: UpdateExam
		   Description: Update eExam
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  ExamID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:05 am
		*/

		function UpdateExam($ExamID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  exam SET Title = '".$this->Title."', Des ='".$this->Des."' WHERE ExamID='".$ExamID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'exam Updated.';
			}else{
				$result[1] = 'Failed to update exam .';
			}

			return $result;
		}


        /* Method: GetExamDetails
		   Description: Get Exam Details
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  ExamID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:07 am
		*/

		function GetExamDetails($ExamID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM exam WHERE ExamID='".$ExamID."' ";;
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


         /*
           Method: GetAllExams
		   Description: Get All exams
		   Pre Reqs:
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:10 am
		*/

         function GetAllExams(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT * FROM exam";;
			$res = $dbCon->executeQuery($query, 'read_many');
            return $res;
		}

         /* Method: DeactivateExam
		   Description: Deactivate Exam
		   Pre Reqs:
		   Parameters: ExamID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:10 am
		*/

         	function DeactivateExam($ExamID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  exam SET Status = '0' WHERE ExamID='".$ExamID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'exam Deactivated.';
			}else{
				$result[1] = 'Failed to Deactivate exam .';
			}

			return $result;
		}


         /*
           Method: ActivateExam
		   Description: Activate Exam
		   Pre Reqs:
		   Parameters: ExamID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 23-Dec-2017, 12:10 am
		*/

         	function ActivateExam($ExamID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "UPDATE  exam SET Status = '1' WHERE ExamID='".$ExamID."' ";;
			if($dbCon->executeQuery($query, 'update')){
			    $result[0] = true;
			    $result[1] = 'exam Activated.';
			}else{
				$result[1] = 'Failed to activate exam .';
			}

			return $result;
		}


        /* Method: ExamsExists
		   Description: Check if Exams exists with this name or not
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:  $Title (string),
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 01:38 am
		*/

		function ExamsExists($Title){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT count(*) as numb from exam WHERE Title='".$Title."' ";;
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