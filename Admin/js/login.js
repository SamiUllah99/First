function validate_post(){
	
	/* variables */
	
	var name_e = 0;
	var pass1_e = 0;
	
	var name = document.getElementById('username').value;
	var pass1 = document.getElementById('password').value;
	
	
	 
	var nameRegex = /^[a-z ,.'-]+$/i;
	/*var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;*/
	 
	//////////////////////////////
	if(name==''){
		document.getElementById('name_error').innerHTML = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Enter Username!</div>";
	    name_e = 0;
	}else if(!nameRegex.test(name)){
		document.getElementById('name_error').innerHTML = "<div class='alert alert-danger'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Invalid Name</div>";
		name_e = 0;
	}else{
		document.getElementById('name_error').innerHTML = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Your Name</div>";
		name_e = 1;
	} 
	
	
	if(pass1==''){
		document.getElementById('pass_error').innerHTML = "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Please Enter Your Password!</div>";
	    pass1_e = 0;
	}else if(pass1.length<6){
		document.getElementById('pass_error').innerHTML = "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Password should be atleast 6 characters long.</div>";
	    pass1_e = 0;
	}else{
		document.getElementById('pass_error').innerHTML = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> Your Password</div>";
		pass1_e = 1;
	} 
	
	
	if(name_e * pass1_e == 1){
		
		return true;
	}else{
		return false;
		 
	}
	
	
}
 