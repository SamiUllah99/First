<?php
    class Teacher{
        public TeacherID = '';
		public $Name = '';
		public $DoB = '';
		public $Email = '';
		public $Password = '';
		public $Address = '';
		public $Salary = '';
		public $Education = '';
		public $Designation = '';
		public $Pic = '';
		public $CNIC = '';      /*Hammad missed this field in the front end*/

        public function __CONSTRUCT(){

        }


         /* Method: RegisterDriver
		   Description: Register new Teacher   in the system. (Add to DB)
		   Pre Reqs:  All the class members are already initialized.
		   Parameters:
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Dec-2017, 12:25 pm
		*/

		function RegisterTeacher(){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;

            if($this->Pic==""){
                $picName = ""; //enter defail picture name here.
            }else{
                $picResult = $this->MovePicture();
                if($picResult[0]){
                    $picName = $picResult[2];
                }else{
                    $result[0] = false;
			        $result[1] =  $picResult[1];
                    return $result;
                }
            }

			$dbCon = new DatabaseManager();
			$query ="INSERT INTO teacher
									(
										Name,
										CNIC,
										Email,
										Passowrd,
										Address,
                                        Contact,
                                        Salary,
                                        Education,
                                        Designation,
                                        PicName
									)VALUES(
										'".$this->Name."',
										'".$this->CNIC."',
										'".$this->Email."',
										'".$this->Password."',
										'".$this->Address."',
										'".$this->Contact."',
										'".$this->Salary."',
										'".$this->Education."',
										'".$this->Designation."',
										'".$picName."'
                                     )
									");
			if($dbCon->executeQuery($query, 'insert')){
			    $result[0] = true;
			    $result[1] = 'Teacher Registered.';
			}else{
				$result[1] = 'Failed to register Teacher.';
			}

			return $result;
		}

        /* Method: UpdateTeacher
		   Description: Updates teacher profile
		   Pre Reqs: All relevant class variables are initialized.
		   Parameters: TeacherID (int)
		   Return Type: Array

		   Status: Complete
           ************************************************
           HAMMAD HAS TO UPDATE THE FRONT END FIELDS ACCORDING TO THIS CLASS.
           ************************************************

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 21-Jan-2017, 1:14 am
        */
       function UpdateTeacher($TeacherID){
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

                    $CurrentPic =  $this->GetTeacherPic(($TeacherID));
                    if($CurrentPic[0]){
                        unlink('cdn/TeacherPic/'.$CurrentPic);
                    }
                }else{
                    $result[0] = false;
			        $result[1] =  $picResult[1];
                    return $result;
                }
            }

            $query = "UPDATE teacher set
                        Name = '".$this->Name."',
        				CNIC = '".$this->CNIC."',
        				Email = '".$this->Email."',
        				Passowrd = '".$this->Passowrd."',
        				Address = '".$this->Address."',
        				Contact = '".$this->Contact."',
        				Salary = '".$this->Salary."',
        				Education = '".$this->Education."',
        				Designation = '".$this->Designation."',
        				Pic = '".$picName."'
                        WHERE TeacherID = '".$TeacherID."' ";
            $db = new DatabaseManager();
            if($db->executeQuery($query , 'update' )){
                $result[0] = true;
				$result[1] = 'Updated g';
            }else{
				$result[1] = 'Failed g';
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
    			$foo->Process('cdn/TeacherPic/');

    			if($foo->processed){
    				$result[0] = true;
			        $result[1] = "Image uplaoded.";
                    $result[2] = $filename;
    			}else {
    				$result[0] = false;
			        $result[1] = 'Failed to upload file. ';
    			}
    		}

			return $result;
		}

        /* Method: GetTeacherPic
		   Description: Returns the picture name of the Teacher.
		   Pre Reqs:
		   Parameters: $TeacherID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit:21-Jan-2017, 1:05 am
        */
        function GetTeacherPic($TeacherID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
			$db = new DatabaseManager();
			$dataRes = $db->executeQuery("SELECT Pic as PicName  FROM teacher WHERE TeacherID='".$TeacherID."'" , 'read' );

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

         /* Method: GetTeacherDetails
		   Description: Returns the Teacher details.
		   Pre Reqs:
		   Parameters: TeacherID (int)
		   Return Type: Array

		   Status: Complete

		   Author: Faysal Ahmed
		   Phone Number: 03471195501
		   Email: faysal@betahouse.io
		   Website: http://betahouse.io

		   Last Edit: 17-Jan-2017, 8:28 pm, 3'C
		*/
		function GetTeacherDetails($TeacherID){
            $result = array();
			$result[0] = false;
			$result[1] = '';
			$result[2] = NULL;
            $db = new DatabaseManager();
            $query = "SELECT * FROM teacher WHERE TeacherID='".$TeacherID."' ";
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

    }

?>