


$(document).ready(function() {
  $("#basic").validate({
    rules: {
      
      image: {
        required: "true!!!"
     
      },
	 
       
	  
    },
    messages : {
      
      
	  image: {
        required: "This filed is required!!!"
     
      },
	 
     
    }
  });
  
  
});
