function validations(){
	
	var id_e = 0;
	var fname_e = 0;
	var lname_e = 0;
	var contact_e = 0;
	var education_e = 0;
	var designation_e = 0;
	var email_e = 0;
	var pass_e = 0;
	var address_e = 0;
	var salary_e = 0;
	
	var regID = document.getElementById('teach_id').value;
	var firstName = document.getElementById('tch_fname').value;
	var lastName = document.getElementById('tch_lname').value;
	var email = document.getElementById('tchEmail').value;
	var pass = document.getElementById('tchPass').value;
	var contact = document.getElementById('tchContact').value;
	var address = document.getElementById('address').value;
	var salary = document.getElementById('tchSalary').value;
	var education = document.getElementById('tchEdu').value;
	var designation = document.getElementById('tchDesig').value;
	
	 
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
	
	if(salary!=''){
		document.getElementById('salary_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		salary_e = 1;
	}
	
	if(firstName==''){
		document.getElementById('fname_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter first name</label></div>";
	    fname_e = 0;
	}else if(!nameRegex.test(firstName)){
		document.getElementById('fname_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		fname_e = 0;
	}else{
		document.getElementById('fname_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		fname_e = 1;
	} 
	
	if(lastName==''){
		document.getElementById('lname_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter last name</label></div>";
	    lname_e = 0;
	}else if(!nameRegex.test(lastName)){
		document.getElementById('lname_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		lname_e = 0;
	}else{
		document.getElementById('lname_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		lname_e = 1;
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
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter teacher address</label></div>";
	    address_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		address_e = 1;
	} 
	
	if(education==''){
		document.getElementById('education_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter teacher education</label></div>";
	    education_e = 0;
	}else{
		document.getElementById('education_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		education_e = 1;
	}
	
	if(designation==''){
		document.getElementById('designation_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter teacher designation</label></div>";
	    designation_e = 0;
	}else{
		document.getElementById('designation_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		designation_e = 1;
	}
	
	if(id_e*contact_e*fname_e*lname_e*email_e*pass_e*education_e*designation_e*address_e * salary_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
}
 