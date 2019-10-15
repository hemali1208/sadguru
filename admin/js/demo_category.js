


$(document).ready(function() {
  $("#form_register").validate({
    rules: {
      name : {
        required: true,

        minlength: 3
	
      },
      
      
       
	  
    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters",

      },
      
      
	  
     
    }
  });
  
  
});
