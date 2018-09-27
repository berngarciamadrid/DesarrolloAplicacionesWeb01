//JavaScript document
$(document).ready(function(e) {
   $('#formulariodeloscojones').validate({
	   rules:{
		   nombre:{
			   required:true
		   },
		   email:{
			  	required:true,
				email:true }
		   }
	   
   })
});