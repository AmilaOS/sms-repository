
function done(){

  var url=myLine.toBase64Image();
  document.getElementById("url").src=url;
}

	


var myLine = new Chart(document.getElementById("canvas").getContext("2d"), {
	type : 'horizontalBar',
	data : {
		labels : [ "october", "september", "August", "July", "June", "May" ],
		datasets : [ {
			label : "SFP Revenue Per Head)",
			backgroundColor : [ "#6E6E6E", "#0B610B", "#6E6E6E", "#6E6E6E",
					"#6E6E6E" ],
			data : [ 2464465, 4739060, 4235894, 4053495, 1958020, 4232580 ]
		} ]
	},
	options : {
		legend : {
			display : false
		},
		title : {
			display : true,
			text : 'SFP Revenue Per Head'
		},
		bezierCurve : false,
		  animation: {
			    onComplete: done
			  }
	}
});
    