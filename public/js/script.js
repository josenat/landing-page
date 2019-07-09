$(document).ready(function() {
	// elemento radio button 
	var radio = "";
	// valor del radio button marcado
	var id = "";
	// obtener elemento input radio
 	radio = $("table input:radio");

    // Evento presionar radio button
 	$("table input:radio").click(function() {     
		// obtener valor del elemento radio button marcado
	    for (i = 0; i < radio.length; i++) {
	        if (radio[i].checked) { 
	        	$("#selectedElement").val(radio[i].value);
	        	break;
			}
	    }
	});
});