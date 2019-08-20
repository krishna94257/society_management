<head>
 <style>
     <style>
         .heading{
	              font-size: 11px!important;
                  padding-right: 17px;
                  padding-left: 1px;
                  width:20px!important;
	              }
	    table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead >
	    tr > th.sorting, table.dataTable thead > tr > td.sorting_asc, table.dataTable thead > tr > td.sorting_desc, table.dataTable thead >
	    tr > td.sorting 
	    {
         padding-left: 0px; 
        }
       
        
	   .mnth
	   {
		 float: left;
         padding-left: 40px;
         width: 200px;
		}
      
	   .sl
	   {
		max-width: 135px;
	   }
	   
	   .fl
		{
	     margin-bottom:40px;
	     margin-left:30px;
	    }
	    
       .add 
        {
		background-color: #fb6d9d !important; 
		color:white;
        min-width:50px;
        background-color: #fb6d9d !important;
        border: 1px solid #fb6d9d !important;
		}
		.export
		{
		  float: right;
          background-color: #2189f3 !important;
          border-color: !important;
          border: 1px solid #2196F3 !important;
          /* margin-left: 201px; */
          margin-right: 287px;
          border-radius: 10px !important;
		}
     
 </style>
 </style>
</head>

<?php 
  $counter = 0; 
  $curr_month = date("M");
  $curr_year = date("Y");  
    
?>

<div class="col-lg-12 grid-margin stretch-card" style="width:95%; !important">
              <div class="card" style="height:fit-content;width:83% !important;">
                <div class="card-body">
                  <h4 class="card-title">FUND</h4>
                  <p class="card-description">
                   	<a href="<?php echo base_url('fund/fundadd');?>" style="color:white;text-decoration:none;"
						class="add btn btn-danger btn-rounded btn-fw">Add</a>
						
						<a href="#" style="color:white;text-decoration:none;" name="export"
						class="export  btn btn-danger btn-rounded btn-fw">Export</a>
				  </p>
                  <div id="entries">
					  
                     </div>
                  </div>
                  <!---filter-->
                      
                  <form action=""> 
          
             <div class="row">
                
           <div class="mnth form-group row" >
           <div class="col-sm-12">
           <select class="sl form-control" name="month"  id="month" required>
			 <option value="">SELECT MONTH</option>
			   <option value="jan">January</option>
			   <option value="feb">February</option>
			   <option value="mar">March</option>
			   <option value="apr">April</option>
			   <option value="may">May</option>
			   <option value="jun">June</option>
			   <option value="jul">July</option>
			   <option value="aug">August</option>
			   <option value="sep">September</option>
			   <option value="oct">October</option>
			   <option value="nov">November</option>
			   <option value="dec">December</option>
			</select>
            </div>
        </div>
        
         <div class="mnth form-group row">
       
           <div class="col-sm-12">
             <select class=" sl form-control" name="year"  id="year" required>
				   <option value="">SELECT YEAR</option>
				   <?php
				    $year = date("Y");
			for($i=2015;$i<=$year;$i++)
			{
	    ?>
				   <option value="<?php echo$i; ?>"><?php echo$i; ?></option>
		<?php
			 }
		 ?>
				</select>
            </div>
        </div>
        
            
            <input type="button" class="fl btn btn-success mr-2" name="submit" id="submit" value="Filter" style="">
            
             </div>
             
                  <!--filter end-->
                  
                  <div class="table-responsive" style="width: 82%;" id="usersTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <table class="table table-bordered table-striped" id="mytable" >
                      <thead>
                        <tr>
                          <th class="heading">
                            S.NO
                          </th>
                          <th class="heading">
                            CATEGORY
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
                          <th style="word-wrap:break-word; !imporatant">
							  <div style="display: inline-block;word-break: break-word;">
                            MONTH
                            </div>
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
                            <?php echo $row['category']; ?>
                          </td>
                          <td>
                            <?php $date =  $row['date'];
                                  echo date('d/m/Y h:ia', strtotime($date));
                             ?>
                          </td>
                           <td>
                            <?php echo $row['status']; ?>
                          </td>
                          <td>
                            <?php echo $row['year']; ?>
                          </td>
                        
                           <td style="text-transform: capitalize;">
							
                            <?php 
                               
                            echo wordwrap($row['month'], 16, "</br>", TRUE);
                             ?>
                            
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/vendors/jquery/jquery.validation.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dataTables.editor.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.limitText.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.limitText.min.js');?>"></script>
<script type="text/javascript">
$(document).ready(function() 
 {
    $(document).on("click","a[name='export']", function (e)
    {
     var mon = $('#month').children("option:selected").val();                             
     var yearid = $('#year').children("option:selected").val(); 
     document.location.href = 'exportfund?mon='+mon+'&year='+yearid;
    }); 
 });
 $(document).ready(function() {
  $("#submit").click(function(){
			 var p = $('#month').children("option:selected").val();                             
             var yearid = $('#year').children("option:selected").val();   
             $.ajax({
                     url:'getfundrecord',
                     type:'GET',
                     data: {"list":p,"year":yearid},
                     success: function(data)
                              {
								  //alert(data);
						       //$("#mytable >tr").remove();
						       $("#mytable").find("tr:gt(0)").remove();
						      response = $.parseJSON(data);
                                  
                                var trHTML = '';
                               $.each(response, function (key,value)
                               {
								  var m = value.month;
								  trHTML += 
										   '<tr><td>' + value.id + 
										   '</td><td>' + value.category+ 
										   '</td><td>' + value.date+ 
										   '</td><td>' + value.status+
										   '</td><td>' + value.year+ 
										   '</td><td>'+ m.replace(/,/g, '<br>')+ 
										   '</td><td>' + value.amount+
										   '</td><td>' + value.total+
										   '</td><td>' + '<a href="edit?id='+ value.id +' " id="update"> <img src="<?php echo base_url('assets/images/edit1.png')?>" style="width:25px;height:25px;"></a><a href="delete?id='+ value.id +'" id="delete"><img src="<?php echo base_url('assets/images/del.png')?>" style="width:25px;height:25px;"></a>'+
										   '</td></tr>';     
								});
                           $('#mytable').append(trHTML);
                           $('#delete').on('click', function()
                           {
                             var choice = confirm('Do you really want to delete this record?');
                             if(choice === true) {
                                  return true;
                                              }
                                                return false;
                                         });
                                
						}                 
            });
            
          
 

});  
});


</script>   
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
         
      
        
          
                 

 
