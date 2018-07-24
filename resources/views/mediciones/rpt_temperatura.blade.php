@extends('layouts.admin')

@section('contenido')
	
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">

			            <div class="box-tools pull-right">
			              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			              
			              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			            </div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<!--Reporte de temperatura por dia-->
								<h2 align="center">Reporte de temperatura vs tiempo</h2>
								<div id="container" style="min-width:310px;height: 400px;margin: 0 auto;"></div>
								<script>
								Highcharts.chart('container',{
									chart:{
										type:'line'
									},
									title:{
										text:'Monthly Average Temperature'
									},
									subtitle:{
										text:'Source: WorldClimate.com'
									},
									xAxis:{
										categories:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
									},
									yAxis:{
										title:{
											text:'Temperature (ªC)'
										}
									},
									plopOptions:{
										line:{
											dataLabels:{
												enabled:true
											},
											enableMouseTracking:false
										}
									},
									series:[{
										name:'Tokyo',
										data:[7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
									},{
										name:'London',
										data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
									}]
								});	
								</script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection

@section('scripts')
	{!! Html::script('js/reportes.js') !!}
	{!! Html::script('plugins/highcharts/highcharts.js') !!}
	{!! Html::script('plugins/highcharts/modules/data.js') !!}
	{!! Html::script('plugins/highcharts/modules/series-label.js') !!}
	{!! Html::script('plugins/highcharts/modules/exporting.js') !!}
	{!! Html::script('plugins/highcharts/modules/export-data.js') !!}
@endsection

@section('styles')
	{!! Html::style('css/_all-skins.min.css') !!}
@endsection