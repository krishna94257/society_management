$(document).ready(function(){
	             // $("#mobileno").numeric();
				$("#nform").validate({
				rules:{
						 ownername:{
								 required:true
							   },
							   
					    mobileno:{
							      required:true,
							       minlength:10,
							       maxlength:10,
						           digits:true
						         },
						         
						 email:{     
							     required:true,
								 email:true
								 }	
						          
					    },
					 messages:{
						         ownername:{
									     required:"Must Enter The Name."
									   },
							     mobileno:{
								          required:"Please Enter The Phone Number.",
								          minlength:"Please Enter At Least 10 Digit Number",
								          maxlength:"Please Enter Only 10 Digit Number"
								          
								        },
								 email:{
								          required:"Please Enter The Email",
								          email:"Please Enter The Valid Email"
								        }      	
								  	   
						      }
				});
			});
			
  
