
new Chart(document.getElementById("doughnut-chart1"), {
	type : 'doughnut',
	data : {
		labels : [ "%Achievement", "%not achieved" ],
		datasets : [ {
			label : "Target VS Achievement",
			backgroundColor : [ "#3e95cd", "#8e5ea2" ],
			data : [ 58, 42 ]
		} ]
	},
	options : {
		title : {
			display : true,
			text : 'Target Vs Achievement'
		}
	}
});