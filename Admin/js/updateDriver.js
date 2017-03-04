function validate_post(){
	
	var id_e = 0;
	var name_e = 0;
	var contact_e = 0;
	var address_e = 0;
	var vehicle_e = 0;
	var salary_e = 0;
	var routes_e = 0;
	
	var regID = document.getElementById('driverID').value;
	var name = document.getElementById('driverName').value;
	var contact = document.getElementById('driverContact').value;
	var salary = document.getElementById('driverSalary').value;
	var address = document.getElementById('driverAddress').value;
	var busNumber = document.getElementById('busNumber').value;
	var routes = document.getElementById('updateRoutes').value;
	
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
		salary_e = 1;
	}
	
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter driver name</label></div>";
	    name_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert'><label class='label label-danger'> Invalid Name</label></div>";
		name_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		name_e = 1;
	} 
	
	if(address==''){
		document.getElementById('address_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter driver address</label></div>";
	    address_e = 0;
	}else{
		document.getElementById('address_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		address_e = 1;
	}
	
	if(routes==''){
		document.getElementById('route_error').innerHTML = "<div class='alert'><label class='label label-danger'>Please enter bus routes</label></div>";
	    routes_e = 0;
	}else{
		document.getElementById('route_error').innerHTML = "<div class='alert'><i class='fa fa-check-circle' style='color:#449d44;font-size:1.5em;' ></i></div>";
		routes_e = 1;
	}
	
	if(id_e * contact_e * name_e * salary_e * address_e * vehicle_e * routes_e == 1){
		
		return true;
	}else{
		return false;
		 
	}

}
 