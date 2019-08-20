 <!-- partial -->
  <div class="col-12 stretch-card">
   <div class="card">
    <div class="card-body">
      <p class="card-description">
      <h4>OWNER DETAILS</h4>
      </p>
      <form class="forms-sample" action="<?php echo base_url('owner/add'); ?>" method="POST" id="nform">
      
       <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">OWNER NAME</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" placeholder="Owner Name" name="ownername" id="ownername">
          </div>
       </div>
       
        <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">MOBILE NUMBER</label>
             <div class="col-sm-9">
           <input type="text" class="form-control" placeholder="MOBILE NUMBER" name="mobileno" id="mobileno" pattern="[7-9]{1}[0-9]{9}">
         </div>
       </div>
       
         <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">EMAIL</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" placeholder="EMAIL" name="email" id="email">
               </div>
         </div>
       
        
       
      <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Wing Id</label>
               <div class="col-sm-9">
		
                 <select class="form-control" name="unique_id"  id="unique_id" required>
				   <option>SELECT WING</option>
				   <?php
			foreach($p as $row)
			{
	    ?>
				   <option value="<?php echo$row['unique_id']; ?>"><?php echo$row['unique_id']; ?></option>
		<?php
			 }
		 ?>
				</select>
				
        </div>
     </div>
                       
      <div class="form-group row">
        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Floor</label>
         <div class="col-sm-9">
           <select class="form-control" name="floor" id="floor" required>
		     <option value="">SELECT FLOOR</option>
		  </select>
		 </div>
      </div>
      
      
         <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">FLAT NAME</label>
              <div class="col-sm-9">
                 <select class="form-control" name="flat" id="flat" required>
		           <option value="">SELECT FLAT</option>
		      </select>
            </div>
           </div>
         
          <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">AMOUNT</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" placeholder="AMOUNT" name="amount" id="amount" required>
            </div>
         </div>   
      
     
          <input type="submit" class="btn btn-success mr-2" name="submit" value="submit">
                        
       </form>
      </div>
    </div>
   </div>
  </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
$(document).ready(function() 
{
    $("select#unique_id").click(function() 
    {
		 $('#floor').children('option:not(:first)').remove();
	  var selectedid = $(this).children("option:selected").val();
	  //$('#floor').val(selectedid);
	   $.ajax({
                type: "Post",
                url: "wing/winglist",
                data:{id:selectedid},
                success: function(data) {
				                         //alert(data);
                                            var x = data;
                                            //$("#floor").empty();
                                            for(var i=1;i<= x;i++)
                                            {
					                         $('#floor').append('<option value="' + i + '">' + i + '</option>');
				                             // $('#floor').html('<option value="'+i+'">'+ i +'</option>'); 
				                             // $('#floor').html(i);
			                                 }
			                             }
              }); 
     });
});   
$(document).ready(function() 
{
    $("#floor").click(function() 
    {
		 $('#flat').children('option:not(:first)').remove();
	  var floorid = $(this).children("option:selected").val();
	  var wingid = $('#unique_id').children("option:selected").val();
	  //$('#floor').val(selectedid);
	  //alert(floorid);
	 // alert(wingid);
	   $.ajax({
                type: "Post",
                url: "flat/flatlist",
                data:{id:floorid,id1:wingid},
                 dataType: 'json',
                success: function(data){
				                         // alert(data);
				                          var x =data.length;
				                         //alert(x);
                                           // var x = data;
                                           //$("#flat").empty();
                                           for(var i=0;i<x;i++)
                                            {
												//alert(data[i]);
					                         $('#flat').append('<option value="' + data[i] + '">' + data[i] + '</option>');
					                         
					                        }
				                               
			                            }
			                           
              }); 
     });
    
});                         
</script>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
  <script>
      $(document).ready(function(){
	             // $("#mobileno").numeric();
				$("#nform").validate({
				rules:{
						 ownername:{
								 required:true
							   },
							   
					    mobileno:{
							      required:true,
							      digits:true,
							       minlength:10,
							       maxlength:10,
						           
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
			
  

  </script>
