 <head>
   <style>
     .col-auto{
		        float:left;
		      }
   </style>
 </head>
 <!-- partial -->
  <div class="col-12 stretch-card">
   <div class="card">
    <div class="card-body">
      <p class="card-description">
      <h4>MAINTENANCE</h4>
      </p>
      <form class="forms-sample" action="<?php echo base_url('maintenance/add'); ?>" method="POST" id="nform">
      
       <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">FLAT</label>
               <div class="col-sm-9">
                <select class="form-control" name="flat"  id="flat" required>
				   <option>Flat</option>
				   <?php
			foreach($p as $row)
			{
	    ?>
				   <option value="<?php echo$row['flatname']; ?>"><?php echo$row['flatname']; ?></option>
		<?php
			 }
		 ?>
				</select>
               </div>
         </div>
       
        <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">OWNER NAME</label>
             <div class="col-sm-9">
           <input type="text" class="form-control" placeholder="OWNER NAME" name="ownername" id="ownername" readonly>
         </div>
       </div>
       
       <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">YEAR</label>
           <div class="col-sm-9">
             <select class="form-control" name="year"  id="year" required>
				   <option>SELECT YEAR</option>
				   <?php
			for($i=2015;$i<=2030;$i++)
			{
	    ?>
				   <option value="<?php echo$i; ?>"><?php echo$i; ?></option>
		<?php
			 }
		 ?>
				</select>
            </div>
        </div>
        
       
         <div class="form-group row">
           <label class="col-sm-3 col-form-label">MONTH</label>
             <div class="" style="width: 596px;">
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="january" id="january">January
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="february" id="february">Febraury
                   </label>
                 </div>
               </div>
              
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="march" id="march">March
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="april" id="april">April
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="may" id="may">May
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="june" id="june">June
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="july" id="july">July
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="august" id="august">August
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="september" id="september">September
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="october" id="october">October
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="november" id="november">November
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="december" id="december">December
                   </label>
                 </div>
               </div>
               
           </div>
        </div>
              
         
       <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">MAINTAINENCE CHARGE</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" placeholder="MAINTAINENCE CHARGE" name="amount" id="amount" required readonly>
            </div>
        </div>  
        
         <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">WATER CHARGE</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" placeholder="WATER CHARGE" name="watercharge" id="watercharge" required>
            </div>
        </div> 
        
         <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">TOTAL</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" placeholder="TOTAL" name="total" id="total" required>
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
    $("#flat").click(function() 
    {
	  var selectedid = $(this).children("option:selected").val();
	  //$('#floor').val(selectedid);
	 //alert(selectedid);
	 
	   $.ajax({
                type:"Post",
                url: "maintenancelist",
                data:{id:selectedid},
                //async: false,
                //datatype:'json',
                success:function(data){
				                        // alert(data);
				                         $('#ownername').val($.trim(data));
                                       }
              });
              
     });
});
 
$(document).ready(function()
{
  $('#watercharge').val(0);
  $( "#flat" ).click(function()
   {
     $( 'input[type="checkbox"]').prop("checked", false);
    });
	    
   $('input[type="checkbox"]').click(function()
   {
     if($(this).prop("checked") == true)
     {
        var n = $( "input:checked" ).length;
         //alert(n);
        var flat =  $('#flat').val();
        //  alert(flat);
         $.ajax
         ({
            type:"Post",
            url:"amount",
            data:{id:flat},
            //async: false,
            //datatype:'json',
            success:function(data)
            {
			 //alert(data);
			 var x = data*n;
			 // alert(x);
			 $('#amount').val($.trim(x));
			 $('#total').val($.trim(x));
		    }
         });
      }
     else if($(this).prop("checked") == false)
      {
        var n = $( "input:checked" ).length;
        //alert(n);
        var flat =  $('#flat').val();
        //  alert(flat);
        $.ajax
         ({
            type:"Post",
            url:"amount",
            data:{id:flat},
            //async: false,
             //datatype:'json',
             success:function(data)
             {
			 //alert(data);
			   var x = data*n;
			// alert(x);
			   $('#amount').val($.trim(x));
			   $('#total').val($.trim(x));
             }
          });
        }
        });
        
    });
    
     $('#watercharge').keyup(function(){                              
			                          var t = $(this).val();
			                          var a =$('#amount').val();
									                                       //alert(t);
									                                      // var y = (a+t);
									                                       var c = parseFloat(a) + parseFloat(t);
									                                       //alert(c);
									                                       $('#total').val(c);
                                                                
                                                               });
    
 
//$( "input[type=checkbox]" ).on( "click", countChecked );  
                  
</script>	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
  <script>
      $(document).ready(function(){
	             // $("#mobileno").numeric();
				$("#nform").validate({
				rules:{
						 flat:
						 {
						   required:true
						 },
							   
					    ownername:
					     {
						  required:true
					     },
						
						 year:
						 {     
							required:true
						 },
						  month:
						 {     
							required:true
						 },
						 amount:
					     {     
						  required:true,
						  digits:true
						  },
						  watercharge:
						  {
							required:true,
						    digits:true 
						   }	   	
						          
					    }
				});
			});
			
  

  </script>
