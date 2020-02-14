window.chartColors = {
			red: 'rgb(255, 99, 132)',
			orange: 'rgb(255, 159, 64)',
			yellow: 'rgb(255, 205, 86)',
			green: 'rgb(75, 192, 192)',
			blue: 'rgb(54, 162, 235)',
			purple: 'rgb(153, 102, 255)',
			grey: 'rgb(201, 203, 207)'
		};
 var lineChartData = {
	        labels: ["May","June","July","August","September","October","November"],
	        datasets: [{
	            label: "Sales",
	            borderColor: window.chartColors.red,
	            backgroundColor: window.chartColors.red,
	            fill: false,
	            data: [8465159.7,5874059.64,8106989.6,8471787.81,9478120.94,9857861.02,7278475.64],
	          
	            yAxisID: "y-axis-1",
	        }, {
	            label: "ASP",
	            borderColor: window.chartColors.blue,
	            backgroundColor: window.chartColors.blue,
	            fill: false,
	             data: [34134,34553,38061,27776,38845,33080,29231],
	            yAxisID: "y-axis-2"
	        }]
	    };
   
new Chart.Line(document.getElementById("canvas").getContext("2d"), {
	            data: lineChartData,
	            options: {
	                responsive: true,
	                hoverMode: 'index',
	                stacked: false,
	                title:{
	                    display: true,
	                      text:'Sales Trend and ASP'
	                },
	                scales: {
	                    yAxes: [{
	                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
	                        display: true,
	                        position: "left",
	                        id: "y-axis-1",
	                    }, {
	                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
	                        display: true,
	                        position: "right",
	                        id: "y-axis-2",

	                        // grid line settings
	                        gridLines: {
	                            drawOnChartArea: false, // only want the grid lines for one axis to show up
	                        },
	                    }],
	                }
	            }
	        });
	


	    
	    
	   