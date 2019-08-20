 <?php
 //print_r($a);
// print_r($p);
 
 
	 
 foreach($p as $row)
 {
 
 ?>
 <!-- partial -->
  <div class="col-12 stretch-card">
   <div class="card">
    <div class="card-body">
      <p class="card-description">
      <h4>OWNER DETAILS</h4>
      </p>
      <form class="forms-sample" action="<?php echo base_url('owner/update'); ?>" method="POST" id="nform">
      
       <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">OWNER NAME</label>
             <div class="col-sm-9">
				 <input type="hidden" class="form-control"  name="id" id="ownername" value="<?php echo$row['id'];?>">
               <input type="text" class="form-control" placeholder="Owner Name" name="ownername" id="ownername" value="<?php echo$row['owner_name'];?>">
          </div>
       </div>
       
        <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">MOBILE NUMBER</label>
             <div class="col-sm-9">
           <input type="text" class="form-control" placeholder="MOBILE NUMBER" name="mobileno" id="mobileno" value="<?php echo$row['number'];?>">
         </div>
       </div>
       
         <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">EMAIL</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" placeholder="EMAIL" name="email" id="email" value="<?php echo$row['email'];?>">
               </div>
         </div>
       
        
       
      <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Wing Id</label>
               <div class="col-sm-9">
		         
                 <select class="form-control" name="unique_id"  id="unique_id" disabled>
				     <option value="<?php echo$row['wing_id'];?>"><?php echo$row['wing_id'];?></option>
				   <?php
			foreach($a as $row1)
			{
				//echo$row1['unique_id'];
				if($row['wing_id'] != $row1['unique_id'])
				{
	    ?>
				  <option value="<?php echo$row1['unique_id'];?>"><?php echo$row1['unique_id'];?></option>
		<?php
			    }
			 }
		 ?>
				</select>
				
        </div>
     </div>
                       
      <div class="form-group row">
        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Floor</label>
         <div class="col-sm-9">
           <select class="form-control" name="floor" id="floor" disabled>
		     <option value="<?php echo$row['floor'];?>"><?php echo$row['floor'];?></option>
		     <option value=""></option>
		  </select>
		 </div>
      </div>
      
      
         <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">FLAT NAME</label>
              <div class="col-sm-9">
				  <input type="hidden" class="form-control"  name="flat1"  value="<?php echo$row['flatname'];?>">
                 <select class="form-control" name="flat" id="flat" disabled>
		           <option value="<?php echo$row['flatname'];?>"><?php echo$row['flatname'];?></option>
		      </select>
            </div>
           </div>
         
          <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">AMOUNT</label>
             <div class="col-sm-9">
               <input type="text" class="form-control" placeholder="AMOUNT" name="amount" id="amount"value="<?php echo$row['amount'];?>" required>
            </div>
         </div>   
      
     
          <input type="submit" class="btn btn-success mr-2" name="submit" value="submit">
                        
       </form>
       <?php
	    }
       ?>
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
    $("#unique_id").on('change',function() 
    {
	  var selectedid = $(this).children("option:selected").val();
	 // alert(selectedid);
	  //$('#floor').val(selectedid);
	   $.ajax({
                type: "Post",
                url: "winglist",
                data:{id:selectedid},
                success: function(data) {
				                         // alert(data);
                                            var x = data;
                                            $("#floor").empty();
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
    $("select#floor").click(function() 
    {
		 $('#flat').children('option:not(:first)').remove();
	  var floorid = $(this).children("option:selected").val();
	  var wingid = $('#unique_id').children("option:selected").val();
	  //$('#floor').val(selectedid);
	  //alert(floorid);
	 // alert(wingid);
	   $.ajax({
                type: "Post",
                url: "flatlist",
                data:{id:floorid,id1:wingid},
                 dataType: 'json',
                success: function(data){
				                          //alert(data);
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

