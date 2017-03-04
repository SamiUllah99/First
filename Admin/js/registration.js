function validate_post(){
	
	/* variables */
	
	var id_e = 0;
	var fname_e = 0;
	var lname_e = 0;
	var address_e = 0;
	var contact_e = 0;
	var fatherNum_e = 0;
	var dateBirth_e = 0;
	var gaurdName_e = 0;
	var gaurdNum_e = 0;
	var stClass_e = 0;
	var section_e = 0;
	var email_e = 0;
	var pass_e = 0;
	var hostelFee_e = 0;
	var concession_e = 0;
	
	var regID = document.getElementById('std_id').value;
	var name = document.getElementById('stdName').value;
	var lastName = document.getElementById('fatherName').value;
	var address = document.getElementById('address').value;
	var dateBirth = document.getElementById('std_Dob').value;
	var contact = document.getElementById('stdContact').value;
	var fatherNum = document.getElementById('fatherNum').value;
	var gaurdName = document.getElementById('gaurdName').value;
	var gaurdNum = document.getElementById('gaurdNum').value;
	var stClass = document.getElementById('stdClass').value;
	var section = document.getElementById('section').value;
	var email = document.getElementById('stdEmail').value;
	var pass = document.getElementById('pass').value;
	var concession = document.getElementById('feeConcession').value;
	var hostelFee = document.getElementById('hostelFee').value;
	
	
	 
	var nameRegex = /^[a-z ,.'-]+$/i;
	var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 
	//////////////////////////////
	
	if(regID!=''){
		document.getElementById('id_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		id_e = 1;
	}
	
	if(contact!=''){
		document.getElementById('contact_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		contact_e = 1;
	}
	
	if(fatherNum!=''){
		document.getElementById('fatherNum_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		fatherNum_e = 1;
	}
	
	if(dateBirth!=''){
		document.getElementById('date_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		dateBirth_e = 1;
	}
	
	if(gaurdNum!=''){
		document.getElementById('gaurdNum_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		gaurdNum_e = 1;
	}
	
	if(stClass!=''){
		document.getElementById('class_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		stClass_e = 1;
	}
	
	if(concession!=''){
		document.getElementById('concession_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		concession_e = 1;
	}
	
	if(hostelFee!=''){
		document.getElementById('hostelFee_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		hostelFee_e = 1;
	}
	
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter student name</label></div>";
	    fname_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		fname_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		fname_e = 1;
	} 
	
	if(lastName==''){
		document.getElementById('lname_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter father name</label></div>";
	    lname_e = 0;
	}else if(!nameRegex.test(lastName)){
		document.getElementById('lname_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Father Name</label></div>";
		lname_e = 0;
	}else{
		document.getElementById('lname_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		lname_e = 1;
	} 
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter student address</label></div>";
	    fname_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		fname_e = 1;
	} 
	
	if(gaurdName==''){
		document.getElementById('gaurdian_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter gaurdian name</label></div>";
	    gaurdName_e = 0;
	}else if(!nameRegex.test(gaurdName)){
		document.getElementById('gaurdian_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Gaurdian Name</label></div>";
		gaurdName_e = 0;
	}else{
		document.getElementById('gaurdian_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		gaurdName_e = 1;
	} 
	
	if(section==''){
		document.getElementById('section_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter section</label></div>";
	    section_e = 0;
	}else if(!nameRegex.test(section)){
		document.getElementById('section_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Section</label></div>";
		section_e = 0;
	}else{
		document.getElementById('section_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		section_e = 1;
	} 
	
	if(email==''){
		document.getElementById('email_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter email</label></div>";
	    email_e = 0;
	}else if(!emailRegex.test(email)){
		document.getElementById('email_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Email</label></div>";
		email_e = 0;
	}else{
		document.getElementById('email_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		email_e = 1;
	} 
	
	if(pass==''){
		document.getElementById('pass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter password</label></div>";
	    pass_e = 0;
	}else if(pass.length<6){
		document.getElementById('pass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Password should be atleast 6 characters long</label></div>";
	    pass_e = 0;
	}else{
		document.getElementById('pass_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		pass_e = 1;
	} 
	
	
	
	if(id_e * contact_e * fatherNum_e * dateBirth_e * gaurdNum_e * stClass_e * concession_e * hostelFee_e * fname_e * lname_e * gaurdName_e * section_e * email_e * pass_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
	
}
 