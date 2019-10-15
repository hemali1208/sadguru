


$(document).ready(function() {
  $("#form_register").validate({
    rules: {
      name : {
        required: true,

        minlength: 3
	
      },
      
      image: {
        required: "true!!!"
     
      },
	 
       
	  
    },
    messages : {
     name : {
        minlength: "Name should be at least 3 characters",


      },
      
      
	  image: {
        required: "This filed is required!!!"
     
      },
	 
     
    }
  });
  
  
});
