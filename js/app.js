google.maps.event.addDomListener(window, 'load', initialize); 

//Find route from google web service 
$( "#find" ).click(function() {

	var fr = $("#from").val();
	var t = $("#to").val();

	// if input is blank
	if(fr.length ==0 || t.length ==0){
		alert("From and To address is required.");
		return;
	}

	$.get("api.php", {from: fr, to: t}, function(data) {
		$("#route_info").html(data);
	});

});


function initialize() {
	var from = document.getElementById('from');
	var to = document.getElementById('to');
	var options = { componentRestrictions: {country: "ie"} };
	var ac_from = new google.maps.places.Autocomplete(from, options);
	var ac_to = new google.maps.places.Autocomplete(to, options);
}