$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: 'May',
        sales:8465159.7,
        asp:34134

	          
        }, {
            period: 'June',
            sales:5874059.64,
            asp:34553

        }, {
            period: 'July',
            sales:8106989.6,
            asp:38061
        }, {
            period: 'August',
            sales:8471787.81,
            asp:27776
        }, {
            period: 'September',
            sales:9478120.94,
            asp:38845
        }, {
            period: 'October',
            sales:9857861.02,
            asp:33080
        }, {
            period: 'November',
            sales:7278475.64,
            asp:33080
        }],
        xkey: 'period',
        ykeys: ['sales', 'asp'],
        labels: ['May', 'June', 'July','August','September','October','November'],
    
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
