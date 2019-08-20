 <!-- partial -->
  <div class="col-12 stretch-card">
   <div class="card">
    <div class="card-body">
      <p class="card-description">
      <h4>Wing</h4>
      </p>
      <form class="forms-sample" action="<?php echo base_url('wing/add'); ?>" method="POST" id="nform">
      <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Wing Id</label>
               <div class="col-sm-9">
                 <select class="form-control" name="unique_id" required >
				   <option>SELECT WING</option>
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
      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Wing Name</label>
      <div class="col-sm-9">
           <input type="text" class="form-control" placeholder="Wing Name" name="name" id="name" required>
       </div>
       </div>
                       
      <div class="form-group row">
      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Floor</label>
      <div class="col-sm-9">
          <select class="form-control" name="floor" required >
		  <option></option>
		  <?php
					   for($x=1;$x<=30;$x++)
					   {
						   ?>
						   <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
						   
						<?php } ?>
					</select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Flat/Floor</label>
                          <div class="col-sm-9">
                            
                            <select class="form-control" name="flat" required>
						<option></option>
					 <?php
					   for($x=1;$x<=30;$x++)
					   {
						   
						   if($x<10)
						   {
							   ?>
							   <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
							<?php
							 }
							 else{
								 ?>
								    <option value="<?php echo$x; ?>"><?php echo$x; ?></option>
								<?php
								 }
						   
						 } ?>
					</select>
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
       
		
