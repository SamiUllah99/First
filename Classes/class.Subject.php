<?php

	class Subject{

		public $SubjectID = '';
		public $Title = '';
		public $SectionID = '';

		public function __CONSTRUCT(){}


        /* Method: RegisterSubject
		   Description: Register new Subject in the system. (Add to DB)
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 12:33 am
		*/

		function RegisterSubject(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO subject
									(
										Title,
										SectionID,
									)VALUES(
										'".$this->Title."',
										'".$this->SectionID."'
									   )
									" ;
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Subject Registered.';
			}else{
				$result[1] = 'Failed to register Subject.';
			}

			return $result;
		}

        /* Method: GetSubjectDetails
		   Description: Get the Subject details.
		   Pre Reqs:
		   Parameters: SubjectID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 12:34 am
		*/
        function GetSubjectDetails($SubjectID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
            $db = new DatabaseManager();
            $query = "SELECT * FROM subject WHERE SubjectID='".$SubjectID."' ";
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


         /* Method: UpdateSubject
		   Description: Updates the Subject
		   Pre Reqs: The update variables are already initialized.
		   Parameters:  SubjectID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 12:34 am
        */
        function UpdateSubject($SubjectID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "UPDATE subject SET Title = '".$this->Title."',
                                        SectionID = '".$this->SectionID."',
                                        WHERE SubjectID='".$SubjectID."'  ";

			if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
            }
			return $result;
		}

         /*
           Fucking wrote this method, when sami was filming his room-mate ghalat neyat se.
           Method: GetAllSubjectsForSection
		   Description: Get all subjects for a section
		   Pre Reqs:
		   Parameters:    $SectionID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 12:39 pm
        */
        function GetAllSubjectsForSection($SectionID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
            $query = "SELECT * from subject WHERE SectionID='".$this->SectionID."' ";
            return $db->executeQuery($query , 'update');
        }



        /*

           Method: AssignTeacherToSubject
		   Description: Get all subjects for a section
		   Pre Reqs:
		   Parameters:    $SectionID(int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 12:39 pm
        */

		function AssignTeacherToSubject($SubjectID, $TeacherID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$db = new DatabaseManager();
			$data = $db->executeQuery(
									"INSERT INTO subjectteacher
									(
										SubjectID,
										TeacherID,
									)VALUES(
										'".$SubjectID."',
										'".$TeacherID."'
									   )
									" ,
									'insert' );
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Teacher assigned the subject';
			}else{
				$result[1] = 'Faield: Teacher assigned the subject.';
			}

			return $result;
		}


        /* Method: SubjectALreadyAssignedToTeacher
		   Description: If true parhata hai, if false nae parhata hai
		   Pre Reqs:
		   Parameters: $SubjectID, $TeacherID
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Dec-2017, 12:55 am
		*/

		function SubjectALreadyAssignedToTeacher($SubjectID, $TeacherID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
			$query = "SELECT count(*) as numb from subjectteacher  WHERE SubjectID='".$SubjectID."'
                        AND  TeacherID='".$TeacherID."' ";;
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