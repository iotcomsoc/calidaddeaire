var chart;

function requestData(){
	$.ajax({
		type:"GET",
		dataType:"json",
		url:"/mediciones/rpt_temperatura_serve",
		success:function(point){
			var series = chart.series[0],
				shift = series.data.length>20;
			chart.series[0].addPoint(point,true.shift);
			setTimeout(requestData,1000);
		},
		cache:false
	},);
}	
	
$(function(){
	chart = new Highcharts.Chart({
		chart:{
			renderTo:'container',
			defaultSeriesType:'spline',
			events:{
				load:requestData
			}
		},
		title:{
			text:'Live random data'
		},
		xAxis:{
			type:'datetime',
			tickPixelInterval:150,
			maxZoom:20*1000
		},
		yAxis:{
			minPadding:0.2,
			maxPadding:0.2,
			title:{
				text:'value',
				margin:80
			}
		},
		series:[{
			name:'Random data',
			data:[]
		}]
	});
});	
