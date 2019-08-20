

<?php 
       
  $counter = 0; 
		   
?>

<div class="col-lg-12 grid-margin stretch-card" style="width:95%; !important">
              <div class="card" style="height:fit-content;width:83% !important;">
                <div class="card-body">
                  <h4 class="card-title">WING LIST</h4>
                  <p class="card-description">
                    <button type="button" class="btn btn-danger btn-rounded btn-fw" style="background-color: #fb6d9d !important; color:white;
                    min-width:50px;background-color: #fb6d9d !important;border: 1px solid #fb6d9d !important;">
						<a href="<?php echo base_url('Wing');?>" style="color:white;text-decoration:none;">Add</a>
						</button>
                    
                  </p>
                  <div id="entries">
					  
                     </div>
                  </div>
                  <div class="table-responsive" style="width: 82%;">
                    <table class="table table-bordered table-striped" id="mytable" >
                      <thead>
                        <tr>
                          <th class="heading">
                            S.NO
                          </th>
                          <th>Wing Id</th>
                         
                          
                          <th class="heading">
                            Wing Name
                          </th>
                          <th class="heading">
                            Floor
                          </th>
                          <th class="heading">
                            Flat
                          </th>
                          
                          <th class="heading">
                            Actions
                          </th>
                          
                        </tr>
                         
                      </thead>
                       
                      <tbody id="myTable">
						  <?php
							     foreach($p as $row)
	                               {
								   
							?>
						 
                        <tr>
							
                          <td class="py-1">
							<?php
							
							 echo ++$counter;
							
							?>   
                          
                          </td>
                          
                          <td>
                            <?php echo $row['unique_id']; ?>
                          </td>
                          <td>
                            <?php echo $row['name']; ?>
                          </td>
                          <td>
                            <?php echo $row['floor']; ?>
                          </td>
                          
                          <td>
                            <?php echo $row['flat']; ?>
                          </td>
                          
                          <td>
							  <?php  $id = $row['unique_id'];?>
                            <a href="edit?id=<?php echo $row['unique_id']; ?>" id="update">
                            <img src="<?php echo base_url('assets/images/edit1.png')?>" style="width:25px;height:25px;"></a>
                            
                           <a href="delete?id=<?php echo $row['unique_id']; ?>"   onClick="return confirm('Are you sure you want to delete?')">
                            <img src="<?php echo base_url('assets/images/del.png')?>" style="width:25px;height:25px;"></a>
                          </td> 
                          
                           <!-- <a href="#" id="<?php //echo $row['productid']; ?>"  class="delete" >
                            <img src="<?php// echo base_url('assets/images/del.png')?>" style="width:25px;height:25px;"></a>
                          </td> -->
                          
                        </tr>
                        <?php
                     
				}
				
			
			//}
                    ?>
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>
            
        <!-- partial -->
  
      <!-- main-panel ends -->

    <!-- page-body-wrapper ends -->
  <!-- container-scroller -->
  <!-- plugins:js -->
  
  
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
 
  <!-- endinject -->
 
        <!--end of ajax code-->   
         
      
        
          
                 

 
