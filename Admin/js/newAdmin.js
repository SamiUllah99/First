function validate_post(){
	
	var id_e = 0;
	var name_e = 0;
	var contact_e = 0;
	var email_e = 0;
	var pass1_e = 0;
	var pass2_e = 0;
	var address_e = 0;
	
	var regID = document.getElementById('adminID').value;
	var name = document.getElementById('adminName').value;
	var email = document.getElementById('adminEmail').value;
	var pass1 = document.getElementById('newPass').value;
	var pass2 = document.getElementById('confirmPass').value;
	var contact = document.getElementById('adminContact').value;
	var address = document.getElementById('adminAddress').value;
	
	 
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
	
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter admin name</label></div>";
	    name_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		name_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		name_e = 1;
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
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter password</label></div>";
	    pass1_e = 0;
	}else if(pass.length<6){
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Password should be atleast 6 characters long</label></div>";
	    pass1_e = 0;
	}else{
		document.getElementById('newPass_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		pass1_e = 1;
	} 
	
	if(pass2==''){
		document.getElementById('confirmPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Please enter confirm password</label></div>";
	    pass2_e = 0;
	}else if(pass1!=pass2){
		document.getElementById('confirmPass_error').innerHTML = "<div class='alert'><label class='label label-danger'> Password should be same</label></div>";
	    pass2_e = 0;
	}else{
		document.getElementById('confirmPass_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		pass2_e = 1;
	} 
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter admin address</label></div>";
	    address_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		address_e = 1;
	} 
	
	
	if(id_e*contact_e*name_e*email_e*pass1_e*pass2_e*address_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
}
 