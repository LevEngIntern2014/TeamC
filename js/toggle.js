$(document).ready( function() {

	$(".down").click(function(){
		console.log("click");
		 $("#block").animate({ 
		    height: "100%"
		  }, 1500 );
	})

});