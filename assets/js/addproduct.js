
			$(document).ready(function(){
				 

				$("#nform").validate({
					                        
					
					rules:{
						      unique_id:{
								      required:true
							          
						            },
						       name:{
						              required:true
						
						              }
						        
						       	
						            
					    },
					 messages:{
						         unique_id:{
									     required:"The Unique Id field is required."
									   },
							     name:{
								          required:"Must Enter The Name"
								        }	
								  	   
						      }
				});
			});
			
  
