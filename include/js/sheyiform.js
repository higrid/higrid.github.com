		jQuery(document).ready(function(){
		  if(Modernizr.inputtypes.number) {
			  jQuery("#supported").append("<div>Your browser support input type: number!</div>");
		  } else {
			  jQuery("#notsupported").append("<div>请升级浏览器!</div>").addClass('ui-state-error');
		  }
		  $("input:submit").css('font-size','1.0em');
	  });