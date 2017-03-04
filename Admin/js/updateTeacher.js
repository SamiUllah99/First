function validate_post(){
	
	var id_e = 0;
	var name_e = 0;
	var contact_e = 0;
	var pass1_e = 0;
	var pass2_e = 0;
	var salary_e = 0;
	var education_e = 0;
	var designation_e = 0;
	
	var regID = document.getElementById('teachID').value;
	var name = document.getElementById('tchName').value;
	var pass1 = document.getElementById('tch_pass1').value;
	var pass2 = document.getElementById('tch_pass2').value;
	var contact = document.getElementById('tchConact').value;
	var salary = document.getElementById('tchSalary').value;
	var education = document.getElementById('tchEducation').value;
	var designation = document.getElementById('tchDesigation').value;
	
	var nameRegex = /^[a-z ,.'-]+$/i;
	 
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
	
	
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter teacher name</label></div>";
	    name_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		name_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		name_e = 1;
	} 
	
	if(pass1==''){
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter password</label></div>";
	    pass1_e = 0;
	}else if(pass1.length<6){
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Password should be atleast 6 characters long</label></div>";
	    pass1_e = 0;
	}else{
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		pass1_e = 1;
	} 
	
	if(pass2==''){
		document.getElementById('conPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter confirm password</label></div>";
	    pass2_e = 0;
	}else if(pass1!=pass2){
		document.getElementById('conPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Password should be same</label></div>";
	    pass2_e = 0;
	}else{
		document.getElementById('conPass_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		pass2_e = 1;
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
	
	if(id_e * contact_e * name_e * salary_e * pass1_e * pass2_e * education_e * designation_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
	
}
 