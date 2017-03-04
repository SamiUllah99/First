function validations(){
	
	var id_e = 0;
	var fname_e = 0;
	var lname_e = 0;
	var contact_e = 0;
	var address_e = 0;
	var salary_e = 0;
	var busNum_e = 0;
	
	var regID = document.getElementById('driver_id').value;
	var firstName = document.getElementById('driver_fname').value;
	var lastName = document.getElementById('driver_lname').value;
	var contact = document.getElementById('driverContact').value;
	var address = document.getElementById('driverAddress').value;
	var salary = document.getElementById('driverSalary').value;
	var busNumber = document.getElementById('busNumber').value;
	 
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
	
	if(busNumber!=''){
		document.getElementById('vehicle_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		busNum_e = 1;
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
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter driver address</label></div>";
	    address_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		address_e = 1;
	} 
	
	
	if(id_e*contact_e*fname_e*lname_e*address_e*salary_e*busNum_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
}
 