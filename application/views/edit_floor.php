<?php
foreach($p as $row)
{
	   
	

?>
    
      <!-- partial -->
      <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                     
                      <p class="card-description">
                       <h4>PRODUCT</h4>
                      </p>
                      <form class="forms-sample" action="<?php echo base_url('Login/update_floor'); ?>" method="POST" id="nform">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Floor Name</label>
                          <div class="col-sm-9">
							  <input type="hidden" class="form-control"  value="<?php echo $row['id']; ?>" name="id" required>
                            <input type="text" class="form-control"  value="<?php echo $row['floor_name']; ?>" name="floor_name" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Floor No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"value="<?php echo $row['floor_no']; ?>" name="floor_no"  required>
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
		
