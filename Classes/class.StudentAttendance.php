<?php

    /*
        0 - Absent
        1 - Present
        2 - Leave

        AttendanceArray is 2D array, e.g.
            each row has two columns, TeacherID, Status of Presence,
            sample data:
            1,1
            2,1
            3,2
            4,0
            Which means:
            NCBuoy, Present
            Sam, Present
            Bekhari, Leave
            Ali, Absent

        Section ID will be initialized via class member variable. so ek go mai ek
        section ki attendance will be marked.

    */
    class StudentAttendance.php{
        public $AttendanceArray = array();
        public $StudentID = '';
        public $Presence = '';
        public $Date = ''; //YYYY-MM-DD

        public function __CONSTRUCT(){}

         /* Method: MarkAttendanceStudentAll
		   Description: Mark attendance of all students of ONE section at once.
		   Pre Reqs:  Class variables initialized. (array and date. sectionID)
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 01:13 am
		*/
        public function MarkAttendanceStudentAll(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
            foreach($this->AttendanceArray as $fromArray){
               $query = "INSERT INTO stdattendance
    									(
    		                            StudentID,
    									Present,
                                        SectionID,
                                        Date,
    									)VALUES(
    										'".$fromArray[0]."',
    										'".$fromArray[1]."',
                                            '".$this->Date."'
    									   )
    									";
    			if($dbCon->executeQuery($query, 'insert')){
    			    $result[0] = true;
    			    $result[1] = 'Attendance marked..';
    			}else{
                    $result[0] = false;
    				$result[1] = 'Failed';
                    return $result;
    			}
            }


			return $result;
        }


        /* Method: UpdateStudentAttendance
		   Description: Update single student attendance
		   Pre Reqs:
		   Parameters: $StudentAttendacnceID (int), $Present (int = 0,1,2) , Date
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 02-Feb-2017, 11:13 am
		*/
        function UpdateTeacherAttendance($StudentAttendacnceID, $Present, $Date){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "UPDATE stdattendance SET
                      Present = '".$Present."',
                      WHERE StdAttendacnceID='".$StudentAttendacnceID."'
                      AND Date = '".$Date."'
                       ";

			if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
            }
			return $result;
		}


        /* Method: GetStudentAttendanceFromTo
		   Description: GetStudentAttendanceFromTo
		   Pre Reqs:
		   Parameters:  StudentID,From, To , SectionID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 01:13 am
		*/
        function GetStudentAttendanceFromTo($StudentID, $From, $To, $SectionID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "SELECT * FROM stdattendance
                      WHERE StudentID='".$TeacherID."' AND
                      AND SectionID = '".$SectionID."',
                      Date >= '".$FROM."' AND
                      DATE <= '".$To."'
                       ";

			$res = $db->executeQuery($query , 'read_many' );
            return $res;
		}

    }
?>