<html> <head> 
<title></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
   <style>
	   .mnth
	   {
		  padding-top: 50px;
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
	    margin-top:50px;
	    margin-left:30px;
	    }
   </style>
</head> 
<body> 
<?php
 $query = $this->db->query("SELECT * FROM `sm_maintenance` WHERE type = 'maintenance'");
 $data = $query->result_array();
  $curr_month = date("M");
  $curr_year = date("Y");
?> 
<form action=""> 
          
             <div class="row">
                
           <div class="mnth form-group row" >
           <div class="col-sm-12">
           <select class="sl form-control" name="month"  id="month" required>
			 <option value="<?php echo $curr_month ?>">SELECT MONTH</option>
			   <option value="january">January</option>
			   <option value="february">February</option>
			   <option value="march">March</option>
			   <option value="april">April</option>
			   <option value="may">May</option>
			   <option value="june">June</option>
			   <option value="july">July</option>
			   <option value="august">August</option>
			   <option value="september">September</option>
			   <option value="october">October</option>
			   <option value="november">November</option>
			   <option value="december">December</option>
			</select>
            </div>
        </div>
        
         <div class="mnth form-group row">
       
           <div class="col-sm-12">
             <select class=" sl form-control" name="year"  id="year" required>
				   <option value="<?php echo $curr_year ?>">SELECT YEAR</option>
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
             
             
            <div class="tbl table-responsive" >
           <table  class="table table-bordered table-striped" id="mytable" >
        <thead>
            <tr>
              
                <th>id</th>
                <th>owner name</th>
                <th>flat</th>
                <th>Date</th>
                <th>Status</th>
                <th style="width:20px;">Month</th>
                <th>Year</th>
               <th>Total</th>
               
                
            </tr>
         </thead>
          <tbody>
            <?php
               $counter = 0;
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
                            <?php echo $row['owner_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['flat']; ?>
                          </td>
                          
                          <td>
                            <?php echo $row['date']; ?>
                          </td>
                           <td>
                            <?php echo $row['status']; ?>
                          </td>
                          <td>
                            <?php echo $row['month']; ?>
                          </td>
                           <td>
                            <?php echo $row['year']; ?>
                          </td>
                         <td>
                            <?php echo $row['total']; ?>
                          </td>
                          
            </tr>
            <?php
		     }
            ?>
          </tbody>
    </table>
    </div>
</div>
 </form> 

    
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets/vendors/jquery/jquery.validation.min.js');?>"></script>

<script type="text/javascript">
	 $(document).ready(function() {
		$("#submit").click(function(){
			 $(".table-responsive").show();
          // var p = [];
         /*  $(".fl-month:checked").each(function() {
                     p.push($(this).val());
                     
                                         });*/
             var p = $('#month').children("option:selected").val();                             
           var yearid = $('#year').children("option:selected").val();   
           //alert(yearid);  
           //alert(list);             
        // $.ajax({
                //   url:'monthlist',
                //  type:'GET',
              //  data: {"list":p,"year":yearid},
                     
           //  success: function(data)
                 //    {
                          //   alert(data);
                                
						//}                 
          //  });
       //~ });
      $("#mytable").dataTable().fnDestroy();
   var table =   $('#mytable').DataTable( {
	   
	                         "ajax":
	                          {
								 destroy:true,
                                "url": "monthlist",
                               "data": {"list":p,"year":yearid}
                              },
                               
                            "stateSave":true,
                            "scrollY":true,
                             "paging":false,
                             "autoWidth":true,
                            "searching":false,
                            "columnDefs": [
                                           { "width": "10px", "targets": 0 }
                                         ],
                      "columns": [
                                
								{ "data": "id" },
								{ "data": "owner_name" },
								{ "data": "flat" },
								{ "data": "date" },
								{ "data": "status" },
								{ "data": "month" },
								{ "data": "year" },
								{ "data": "total" }
								
								
							
							]
                     } );
                   
    } );
 
}); 
   /* var data = { 'user_ids[]' : []};
$(":checked").each(function() {
  data['user_ids[]'].push($(this).val());
});
$.post("ajax.php", data);*/
</script>
 </body> </html>
