new Chart(document.getElementById("doughnut-chart"), {

	type : 'doughnut',
	data : {
		labels : [ "Ageing (30 +Days)", "Current(30>Days)" ],
		datasets : [ {
			label : "Target VS Achievement",
			backgroundColor : [ "#8e5ea2", "#3e95cd" ],
			data : [ 164, 63 ]
		} ]
	},
	options : {
		title : {
			display : true,
			text : 'Inventory Ageing'
		}
	}
});
