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

        so when inserting the data, foreach this array, and insert one row at a time.

    */

    class TeacherAttendance{
        public $AttendanceArray = array();
        public $TeacherID = '';
        public $Presence = '';
        public $Date = ''; //YYYY-MM-DD

        public function __CONSTRUCT(){}

         /* Method: MarkAttendanceTeachersAll
		   Description: Mark attendance of all teachers at once.
		   Pre Reqs:  Class variables initialized. (array and date)
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 01:13 am
		*/
        public function MarkAttendanceTeachersAll(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$dbCon = new DatabaseManager();
            foreach($this->AttendanceArray as $fromArray){
               $query = "INSERT INTO teacherattendance
    									(
    		                            TeacherID,
    									Present,
    									)VALUES(
    										'".$fromArray[0]."',
    										'".$fromArray[1]."'
    									   )
    									";
    			if($dbCon->executeQuery($query, 'insert')){
    			    $result[0] = true;
    			    $result[1] = 'Subject Registered.';
    			}else{
                    $result[0] = false;
    				$result[1] = 'Failed';
                    return $result;
    			}
            }


			return $result;
        }


        /* Method: UpdateTeacherAttendance
		   Description: Update teachers attendance
		   Pre Reqs:
		   Parameters:  TeacherAttendacnceID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 01:13 am
		*/
        function UpdateTeacherAttendance($TeacherAttendacnceID){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "UPDATE teacherattendance SET TeacherID = '".$this->TeacherID."',
                                        Present = '".$this->Presence."',
                                        Date = '".$this->Date."'
                                        WHERE TeacherAttendacnceID='".$TeacherAttendacnceID."'  ";

			if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
            }
			return $result;
		}


        /* Method: GetTeacherAttendanceFromTo
		   Description: GetTeacherAttendanceFromTo
		   Pre Reqs:
		   Parameters:  TeacherID,From, To
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Jan-2017, 01:13 am
		*/
        function GetTeacherAttendanceFromTo($TeacherID, $From, $To){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();

            $query = "SELECT * FROM teacherattendance
                      WHERE TeacherID='".$TeacherID."' AND
                      Date >= '".$FROM."' AND
                      DATE <= '".$To."'
                       ";

			$res = $db->executeQuery($query , 'read_many' );
            return $res;
		}

    }