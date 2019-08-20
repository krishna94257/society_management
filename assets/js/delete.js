
	  $(document).ready(function() {
   $('#mytable').dataTable({
        "aLengthMenu": [[10, 15, 20, -1], [10, 15,20, "All"]],
        "iDisplayLength": 10,
       
    });
} );
   
   <!--ajax code for delete-->
  $('.delete').click(function(){
	  var del_id = $(this).attr('id');
	 // alert("fddf");
     alert(del_id);
//  swal({
 // title: "Are you sure?",
 // text: "Once deleted, you will not be able to recover this imaginary file!",
 // icon: "warning",
 // buttons: true,
 // dangerMode: true,
//})
//.then((willDelete) => {
  //if (willDelete) {
	 // alert(del_id);
	//  $.ajax({
		                   
		//					type:'POST',
			//				url:"Hello/$id",
				//			data:{id:del_id},
					//		success: function(data){
                      //       alert(data);
                             
						//	if(data==1){
								          
					//		location.reload();
						//	}else{
							//      alert("data not deleted");
						//	}
					//		}

						//	})
 //   swal("Poof! Your imaginary file has been deleted!", {
   //   icon: "success",
    //});
  //} else {
    //swal("Your imaginary file is safe!");
  //}
//});
  
})
