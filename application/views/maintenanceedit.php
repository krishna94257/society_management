 <head>
   <style>
     .col-auto{
		        float:left;
		      }
   </style>
 </head>
 <?php
 foreach($p as $row)
 {
 ?>
 <!-- partial -->
  <div class="col-12 stretch-card">
   <div class="card">
    <div class="card-body">
      <p class="card-description">
      <h4>MAINTENANCE EDIT</h4>
      </p>
      <form class="forms-sample" action="<?php echo base_url('maintenance/update'); ?>" method="POST" id="nform">
      <input type="hidden" class="form-control" placeholder="AMOUNT" name="id" value="<?php echo$row['id'];?>" readonly>
       <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">FLAT</label>
               <div class="col-sm-9">
                <select class="form-control" name="flat"  id="flat" disabled>
				   <option value="<?php echo$row['flat']; ?>"><?php echo$row['flat']; ?></option>
				   <?php
			foreach($a as $row1)
			{
	    ?>
				   <option value="<?php echo$row1['flatname']; ?>"><?php echo$row1['flatname']; ?></option>
		<?php
			 }
		 ?>
				</select>
               </div>
         </div>
       
        <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">OWNER NAME</label>
             <div class="col-sm-9">
           <input type="text" class="form-control" placeholder="OWNER NAME" name="ownername" id="ownername" value="<?php echo$row['owner_name'];?>" readonly>
         </div>
       </div>
       
       <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">YEAR</label>
           <div class="col-sm-9">
             <select class="form-control" name="year"  id="year" required>
				   <option value="<?php echo$row['year'];?>"><?php echo$row['year'];?></option>
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
       
       
       <?php $m = explode(",", $row['month']);?>
        <div class="form-group row">
           <label class="col-sm-3 col-form-label">MONTH</label>
             <div class="" style="width: 596px;">
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="january"<?php if(in_array("january", $m)){ echo " checked=\"checked\""; } ?>  id="january">January
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="febraury"<?php if(in_array("february", $m)){ echo " checked=\"checked\""; } ?> id="february">Febraury
                   </label>
                 </div>
               </div>
              
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="march"<?php if(in_array("march", $m)){ echo " checked=\"checked\""; } ?> id="march">March
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="april"<?php if(in_array("april", $m)){ echo " checked=\"checked\""; } ?> id="april">April
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="may"<?php if(in_array("may", $m)){ echo " checked=\"checked\""; } ?> id="may">May
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="june"<?php if(in_array("june", $m)){ echo " checked=\"checked\""; } ?> id="june">June
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="july"<?php if(in_array("july", $m)){ echo " checked=\"checked\""; } ?> id="july">July
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="august"<?php if(in_array("august", $m)){ echo " checked=\"checked\""; } ?> id="august">August
                   </label>
                 </div>
               </div>
               
                <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="september"<?php if(in_array("september", $m)){ echo " checked=\"checked\""; } ?> id="september">September
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="october"<?php if(in_array("october", $m)){ echo " checked=\"checked\""; } ?> id="october">October
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="november"<?php if(in_array("november", $m)){ echo " checked=\"checked\""; } ?> id="november">November
                   </label>
                 </div>
               </div>
               
               <div class="col-auto">
                 <div class="form-check">
                  <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="month[]" value="december"<?php if(in_array("december", $m)){ echo " checked=\"checked\""; } ?> id="december">December
                   </label>
                 </div>
               </div>
               
           </div>
        </div>
                      
      
        
       <div class="form-group row">
         <label for="exampleInputPassword2" class="col-sm-3 col-form-label">AMOUNT</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" placeholder="AMOUNT" name="amount" id="amount" value="<?php echo$row['amount'];?>" readonly>
            </div>
        </div>  
          
          <input type="submit" class="btn btn-success mr-2" name="submit" value="submit">
                        
       </form>
      </div>
    </div>
   </div>
  </div>
</div>
<?php
}
?>
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
 
$(document).ready(function(){
	   //  $('#flat').children('option:not(:first)').remove();
	   $( "#flat" ).click(function() {
                    $( 'input[type="checkbox"]').prop("checked", false);
                        });
	    
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
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
                  success:function(data){
				                         //alert(data);
				                         var x = data*n;
				                        // alert(x);
				                         $('#amount').val($.trim(x));
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
                  success:function(data){
				                         //alert(data);
				                         var x = data*n;
				                        // alert(x);
				                         $('#amount').val($.trim(x));
                                       }
              });
            }
        });
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
						 }
						 month:
						 {     
						  required:true
						 },
					     amount:
					     {     
						  required:true,
						  digits:true
						  }	   	
						          
					    }
				});
			});
</script>
