new Chart(document.getElementById("pie-chart"), {
	type : 'pie',
	data : {
		labels : model,

		datasets : [ {
			label : "Top 5 Selling Models",
			backgroundColor : [ "#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9",
					"#c45850" ],
			indexLabel : "#percent%",
			percentFormatString : "#0.",
			toolTipContent : "{data} (#percent%)",
			data : arraylist

		} ]
	},
	options : {
		title : {
			display : true,

			text : 'Top 5 Selling Models',

		}
	}
});