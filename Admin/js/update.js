function validate_post(){
	
	/* variables */
	
	var id_e = 0;
	var name_e = 0;
	var address_e = 0;
	var contact_e = 0;
	var pass1_e = 0;
	var pass2_e = 0;
	var concession_e = 0;
	
	var regID = document.getElementById('std_id').value;
	var name = document.getElementById('stdName').value;
	var address = document.getElementById('address').value;
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	var contact = document.getElementById('stdContact').value;
	var concession = document.getElementById('feeConcession').value;
	
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
	
	if(concession!=''){
		document.getElementById('concession_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		concession_e = 1;
	}
	
	
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter student name</label></div>";
	    name_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		name_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		name_e = 1;
	} 
	
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter student address</label></div>";
	    address_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		address_e = 1;
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
	
	
	if(id_e * contact_e * concession_e * name_e * address_e * pass1_e * pass2_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
	
}
 