

<?php 
       
  $counter = 0; 
		   
?>

<div class="col-lg-12 grid-margin stretch-card" style="width:95%; !important">
              <div class="card" style="height:fit-content;width:83% !important;">
                <div class="card-body">
                  <h4 class="card-title">MAINTENANCE LIST</h4>
                  <p class="card-description">
                    <button type="button" class="btn btn-danger btn-rounded btn-fw" style="background-color: #fb6d9d !important; color:white;
                    min-width:50px;background-color: #fb6d9d !important;border: 1px solid #fb6d9d !important;">
						<a href="<?php echo base_url('maintenance/add');?>" style="color:white;text-decoration:none;">Add</a>
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
                         
                          <th class="heading">
                            DATE
                          </th>
                          <th class="heading">
                            STATUS
                          </th>
                           <th class="heading">
                            YEAR
                          </th>
                          <th class="heading">
                            MONTH
                          </th>
                          <th class="heading">
                            AMOUNT
                          </th>
                         <th class="heading">
                            TOTAL
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
                            <?php echo $row['date']; ?>
                          </td>
                           <td>
                            <?php echo $row['status']; ?>
                          </td>
                          <td>
                            <?php echo $row['year']; ?>
                          </td>
                           <td>
                            <?php echo $row['month']; ?>
                          </td>
                           <td>
                            <?php echo $row['amount']; ?>
                          </td>
                          <td>
                            <?php echo $row['total']; ?>
                          </td>
                          
                          <td>
							  <?php  $id = $row['flat'];?>
                            <a href="edit?id=<?php echo $row['id']; ?>" id="update">
                            <img src="<?php echo base_url('assets/images/edit1.png')?>" style="width:25px;height:25px;"></a>
                            
                           <a href="delete?id=<?php echo $row['id']; ?>"   onClick="return confirm('Are you sure you want to delete?')">
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
         
      
        
          
                 

 
