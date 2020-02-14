function done() {

	var url = myLine.toBase64Image();
	document.getElementById("url").src = url;
	myLine.clear();
}

var myLine = new Chart(document.getElementById("chart-area"), {

	type : 'doughnut',
	data : {
		labels : [ 'Ageing (30 +Days)', 'Current(30>Days)' ],
		datasets : [ {
			data : [ 164, 63 ],
			backgroundColor : [ "#8e5ea2", "#3e95cd" ],
			label : "Target VS Achievement",
		} ]

	},

	options : {
		responsive : true,
		legend : {
			position : 'top',
		},
		title : {
			display : true,
			text : 'SFP Revenue Per Head'
		},
	 bezierCurve : false,
		animation : {
		 onComplete: done
		}
	}

});

/**
 * 
 */
