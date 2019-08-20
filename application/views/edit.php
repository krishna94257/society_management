<?php
foreach($p as $row)
{
?>
 <!-- partial -->
 <div class="col-12 stretch-card">
  <div class="card">
  <div class="card-body">
  <p class="card-description">
     <h4>WING</h4>
  </p>
    <form class="forms-sample" action="<?php echo base_url('wing/update'); ?>" method="POST" id="nform">
         <div class="form-group row">
               <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Unique Id</label>
               <div class="col-sm-9">
				 <input type="hidden" class="form-control"  value="<?php echo $row['id']; ?>" name="id" >
				 <input type="hidden" class="form-control"  value="<?php echo $row['unique_id']; ?>" name="unique_id1" >
                  <select class="form-control" name="unique_id" disabled>
				   <option value="<?php echo $row['unique_id']; ?>"><?php echo $row['unique_id']; ?></option>
				   <?php
					for($x=A;$x<=Z;$x++)
				     {
				   ?>
					  <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
				   <?php
				      }
				    ?>
					</select>
                  </div>
            </div>
            
         <div class="form-group row">
             <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Name</label>
               <div class="col-sm-9">
                   <input type="text" class="form-control"value="<?php echo $row['name']; ?>" name="name" id="name" required>
               </div>
          </div>
             
        <div class="form-group row">
           <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Floor</label>
             <div class="col-sm-9">
               <select class="form-control" name="floor" >
			   <option value="<?php echo $row['floor']; ?>"><?php echo $row['floor']; ?></option>
		 <?php
			   for($x=1;$x<30;$x++){
		 ?>
				     <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
						   
		<?php                    } 
		?>
				</select>
               </div>
         </div>
         
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Flat</label>
             <div class="col-sm-9">
               <select class="form-control" name="flat" >
				<option  value="<?php echo $row['flat']; ?>"><?php echo $row['flat'];?></option>
			<?php
				for($x=1;$x<30;$x++){
			 ?>
				      <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
			<?php 
			                       }
			  ?>
			    </select>
           </div>
       </div>
                      
             <input type="submit" class="btn btn-success mr-2" name="submit" value="update">
                        
    </form>
 </div>
 </div>
</div>
</div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
 <?php
}
   ?>    
		
