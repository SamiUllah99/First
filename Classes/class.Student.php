<?php
	
	class Student{

		public $StudentID = '';
		public $StudentNumber = '';
		public $Name = '';
		public $FatherName = '';
		public $DoB = '';
		public $Address = '';
		public $FatherPhone = '';
		public $StudentContact = '';
		public $GuardianName = '';
		public $GuardianContact = '';
		public $Email = '';
		public $Password = '';
		public $TuitionFeeConcession = '';
		public $HostelFeeConcession = '';
		public $IsHostel = '';
		public $Picture = '';
		public $IsTransport = '';
		public $BusRouteID = '';

        /*
          Name,
          FatherName
          FatherPhone
         criteria for identifying unique student
        */

		public function __CONSTRUCT(){}


        /* Method: RegisterStudent
		   Description: Register new student in the system. (Add to DB)
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io
           *************************************
           Change the picName where commented to the default profile pic name.
           *************************************
		   Last Edit: 24-Dec-2016, 6:28 pm
		*/

      

		function RegisterStudent(){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

            $UniqueNumb = $this->StudentNumberExists($this->StudentNumber);

            if($UniqueNumb[0]){
                $result[0] = false;
    			$result[1] = "Student Number (".$this->StudentNumber.") already in use.";
    			$result[2] = NULL;
                return $result;
            }

            if($this->Picture==""){
                $picName = ""; //enter detail picture name here.
            }else{
                $picResult = $this->MovePicture();
                if($picResult[0]){
                    $picName = $picResult[2];
                }else{

                    $result[0] = false;
			        $result[1] =  "Pic EROOR: ".$picResult[1];
                    return $result;
                }
            }

			$dbCon = new DatabaseManager();
			$query = "INSERT INTO student
									(
                                        StudentNumber,
										Name,
										FatherName,
										DoB,
										Address,
										FatherPhone,
										StudentContact,
										GuardianName,
										GuardianContact,
										Email,
										Password,
										TutionFeeConcession,
										HostelFeeConcession,
										IsHostel,
										Picture,
										IsTransport
										
									)VALUES(
										'".$this->StudentNumber."',
										'".$this->Name."',
										'".$this->FatherName."',
										'".$this->DoB."',
										'".$this->Address."',
										'".$this->FatherPhone."',
										'".$this->StudentContact."',
										'".$this->GuardianName."',
										'".$this->GuardianContact."',
										'".$this->Email."',
										'".$this->Password."',
										'".$this->TuitionFeeConcession."',
										'".$this->HostelFeeConcession."',
										'".$this->IsHostel."',
										'".$picName."',
										'".$this->IsTransport."'
									
									)
									";
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Student Registered.';
			}else{
				$result[1] = 'Failed to register student.';
			}
			
			return $result;
		}

        /* Method: MovePicture
		   Description: Uploads the image to the directory and returns the filename.
		   Pre Reqs:  At least the image file is initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 24-Dec-2016, 6:28 pm
		*/
		function MovePicture(){

			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
            $foo = new Upload($this->Picture);
			$filename = time();
			if ($foo->uploaded) {
    			$foo->file_new_name_body = $filename;
    			$foo->image_resize = true;
    			$foo->image_ratio_fill = true;
    			$foo->image_convert= 'jpg';
    			$foo->image_x = 300;
    			$foo->image_y = 300;
    			$foo->Process('cdn/StudentPic/');

    			if($foo->processed){
    				$result[0] = true;
			        $result[1] = "Image uplaoded.";
                    $result[2] = $filename;
    			}else {
    				$result[0] = false;
			        $result[1] = "Failed to upload file.";
    			}
    		}else{
                $result[0] = false;
			    $result[1] = "Error: Invalid File may be.";
    		}

			return $result;
		}


        /* Method: GetStudentDetails
		   Description: Returns the student details.
		   Pre Reqs:
		   Parameters: StundeID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 17-Jan-2017, 8:28 pm, 3'C
		*/
		function GetStudentDetails($StudentID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
            $db = new DatabaseManager();
            $query = "SELECT * FROM student WHERE StudentID='".$StudentID."' ";
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


        /* Method: loginStudent
		   Description: Checks the StudentID and Password in DB and creates session for the student.
		   Pre Reqs:
		   Parameters: StundeID (int), Pass (string)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 18-Jan-2017, 3:28 pm
        */
		function loginStudent($StudentID, $pass){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
			$data = $db->executeQuery("SELECT * FROM student WHERE StudentID='".$StudentID."' AND Password='".$pass."' AND Status=1 " , 'read_many' );

			if(mysqli_num_rows($data)>0){
				$data = mysqli_fetch_assoc($data);
				$_SESSION['StudentLogin'] = true;
				$_SESSION['StudentDetails'] = $data;
				$result[0] = true;
				$result[1] = 'Student details correct, and session created.';
            }else{
				$result[1] = 'Invalid ID/password.';
            }
			return $result;
		}

        /* Method: UpdateStudent
		   Description: Updates the Password, and phone number of the student
		   Pre Reqs:
		   Parameters: StundeID (int), Pass (string), PhoneNumber (string)
		   Return Type: Array

		   Status: Complete
           ************************************************
           HAMMAD HAS TO UPDATE THE FRONT END FIELDS ACCORDING TO THIS CLASS.
           ************************************************

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 18-Jan-2017, 3:48 pm
        */
        function UpdateStudent($StudentID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;


            if($this->Picture==""){
                    $picName = "Default.jpg"; //enter default picture name here.
            }else{
                $picResult = $this->MovePicture();
                if($picResult[0]){
                    $picName = $picResult[2];

                    $CurrentPic =  $this->GetStudentPic(($StudentID));
                    if($CurrentPic[0]){
                        unlink('cdn/StudentPic/'.$CurrentPic);
                    }
                }else{
                    $result[0] = false;
			        $result[1] =  $picResult[1];
                    return $result;
                }
            }

            $query = "UPDATE student set
                        Name = '".$this->Name."',
        				FatherName = '".$this->FatherName."',
        				DoB = '".$this->DoB."',
        				Address = '".$this->Address."',
        				FatherPhone = '".$this->FatherPhone."',
        			    StudentContact = '".$this->StudentContact."',
        			    GuardianName = '".$this->GuardianName."',
        				GuardianContact = '".$this->GuardianContact."',
        			    Email = '".$this->Email."',
        			    Password = '".$this->Password."',
        			    TuitionFeeConcession = '".$this->TuitionFeeConcession."',
        			    HostelFeeConcession = '".$this->HostelFeeConcession."',
        			    IsHotel = '".$this->IsHotel."',
        			    Picture = '".$picName."',
        			    IsTransport = '".$this->IsTransport."',
        			    BusRouteID = '".$this->BusRouteID."'
                    WHERE StudentID = '".$StudentID."' ) ";

            $db = new DatabaseManager();
            if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
            }
			return $result;
       }

       /* Method: checkPassword
		   Description: Checks the if the password matches against the StudentID
		   Pre Reqs:
		   Parameters: StundentID (int), Pass (string)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 18-Jan-2017, 3:48 pm
        */

        function checkPassword($studentID, $pass){
			$result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$dbCon = new DatabaseManager();
			$data = $dbCon->executeQuery("SELECT * FROM student WHERE StudentID='".$StudentID."' AND Password='".$pass."' " , 'read_many' );

			if(mysqli_num_rows($data)>0){
				$result[0] = true;
				$result[1] = 'Match g';
            }else{
				$result[1] = 'Not Match g';
            }
			return $result;
        }

        /*
           Method: GetStudentPic
		   Description: Returns the picture name of the Student.
		   Pre Reqs:
		   Parameters: StundentID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit:21-Jan-2017, 1:05 am
        */
         function GetStudentPic($StudentID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
			$dataRes = $db->executeQuery("SELECT Picture as PicName  FROM student WHERE StudentID='".$StudentID."'" , 'read' );

            if($dataRes){
                $result[0] = true;
    			$result[1] = $dataRes[1];
    			$result[2] = $dataRes[2]['PicName'];
            }else{
                $result[0] = false;
    			$result[1] = $dataRes[1];
    		}

			return $result;

        }
        /* ************************************************************************* */

        /*
           Method: AssignSectionToStudent
		   Description: Assigns a Section to Student.
		   Pre Reqs:
		   Parameters: StudentID (int) , SectiontID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit:21-Jan-2017, 2:07 am
        */
         function AssignSectionToStudent($StudentID , $SectiontID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
            $query = "INSERT INTO studentsection (StudentID, SectionID) VALUES('".$StudentID."' ,'".$SectiontID."' ) ";

            if($db->executeQuery($query , 'insert' )){
                $result[0] = true;
    			$result[1] = $dataRes[1];
    		}else{
                $result[0] = false;
    			$result[1] = $dataRes[1];
    		}
            return $result;
        }

         /* Method: StudentInSectionExists
         /* Method: StudentInSectionExists
		   Description: Checks if a student is already registered in a section or not.
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

		function StudentNumberExists($StudentNumber){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

			$db = new DatabaseManager();
			$query = "SELECT count(*) as numb from student WHERE StudentNumber='".$StudentNumber."' ";
            $res = $db->executeQuery($query, 'read');
			if($res[0]){
			    if($res[2]['numb']>0){
                     $result[0] = true;
			        $result[1] = $res[1];
                }else{
                    $result[0] = false;
			        $result[1] = $res[1];

                }

			}else{
				 $result[0] = false;
			     $result[1] = $res[1];
			}

			return $result;
		}
	}
?>