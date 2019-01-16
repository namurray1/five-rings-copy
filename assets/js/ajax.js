//---------------------------- Reset Button ---------------------------------
function PageReset(){
	window.location.reload();
}
//---------------------------- subscriber contact ------------------------------
function ckhformcontact(){
	if(document.getElementById("input-1").value==''){
		alert("Please Enter Your First Name"); 
		document.getElementById("input-1").value='';
		document.getElementById("input-1").focus();
		return false;
	}
	if(document.getElementById("input-2").value==''){
		alert("Please Enter Your Last Name"); 
		document.getElementById("input-2").value='';
		document.getElementById("input-2").focus();
		return false;
	}
	if(document.getElementById("input-3").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("input-3").value='';
		document.getElementById("input-3").focus();
		return false;
	}
	if(document.getElementById("message").value==''){
		alert("Please Enter Your Message"); 
		document.getElementById("message").value='';
		document.getElementById("message").focus();
		return false;
	}
    return true;
}
function ajaxmailcontact(){
	
	if(ckhformcontact() == true){
			
	var form_data = $('#contactForm').serialize();
		//alert(form_data);
		$.ajax({
		url:"../assets/php/mailcontroller.php?mode=contact",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#contactForm')[0].reset();
			}
		}
		});
		
	}
}
//---------------------------- subscriber section ------------------------------
function ckhformsubscribe(){
	if(document.getElementById("subsemail").value==''){
		alert("Please Enter Your Email Address"); 
		document.getElementById("subsemail").value='';
		document.getElementById("subsemail").focus();
		return false;
	}
    return true;
}
function ajaxmailsubscribe(){
	
if(ckhformsubscribe() == true){
	
	var form_data=$('#subsForm').serialize();
	//alert(form_data);
		 $.ajax({
		url:"../assets/php/mailcontroller.php?mode=subscriber",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#subsForm')[0].reset();
			}
		}
		});
}
}
//---------------------------- subscriber registration ------------------------------
function ckhformregistration(){
	//alert("abc");
	if(document.getElementById('maleRadio').checked == false && document.getElementById('femaleRadio').checked == false) {
		alert("Please Select Your Gender");
		document.getElementById("maleRadio").value='';
		document.getElementById("maleRadio").focus();
		return false;
	}
	if(document.getElementById("fullname").value==''){
		alert("Please Enter Your Full Name"); 
		document.getElementById("fullname").value='';
		document.getElementById("fullname").focus();
		return false;
	}
	if(document.getElementById("regemail").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("regemail").value='';
		document.getElementById("regemail").focus();
		return false;
	}
	if(document.getElementById("address").value==''){
		alert("Please Enter Your Address"); 
		document.getElementById("address").value='';
		document.getElementById("address").focus();
		return false;
	}
	if(document.getElementById("phone").value==''){
		alert("Please Enter Your Phone"); 
		document.getElementById("phone").value='';
		document.getElementById("phone").focus();
		return false;
	}
	if(document.getElementById("dob").value==''){
		alert("Please Enter Your Date Of Birth"); 
		document.getElementById("dob").value='';
		document.getElementById("dob").focus();
		return false;
	}
	if(document.getElementById("country").value==''){
		alert("Please Select Your Country"); 
		document.getElementById("country").value='';
		document.getElementById("country").focus();
		return false;
	}
	if(document.getElementById('calorieCheckbox').checked == false && document.getElementById('saltCheckbox').checked == false){
		alert("Please Select Your Meal Preference"); 
		document.getElementById("calorieCheckbox").value='';
		document.getElementById("calorieCheckbox").focus();
		return false;
	}
	if(document.getElementById('terms').checked == false) {
		alert("You must agree to the terms first.");
		document.getElementById("terms").value='';
		document.getElementById("terms").focus();
		return false;
	}
    return true;
}
function ajaxmailregistration(){
	
if(ckhformregistration() == true){
	
	//alert(email);
	var form_data=$('#registrationForm').serialize();
		 $.ajax({
		url:"../assets/php/mailcontroller.php?mode=registration",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#registrationForm')[0].reset();
			}
		}
		
		});
}
}
//------------------------------ single page contact --------------------------------------
function ckhformsinglepagecontact(){
	if(document.getElementById("sname").value==''){
		alert("Please Enter Your Name"); 
		document.getElementById("sname").value='';
		document.getElementById("sname").focus();
		return false;
	}
	if(document.getElementById("semail").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("semail").value='';
		document.getElementById("semail").focus();
		return false;
	}
	if(document.getElementById("message").value==''){
		alert("Please Enter Your Message"); 
		document.getElementById("message").value='';
		document.getElementById("message").focus();
		return false;
	}
    return true;
}
function ajaxsinglepagecontact(){
	
	if(ckhformsinglepagecontact() == true){
			
	var form_data=$('#singlepagecontact').serialize();
		$.ajax({
		url:"../assets/php/mailcontroller.php?mode=singlepage_contact",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#singlepagecontact')[0].reset();
			}
		}
		});
		
	}
}
//-----------------------------------------------------------------------