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
								<h2 align="center">Reporte de temperatura live vs tiempo</h2>
								<div id="container" style="min-width:310px;height: 400px;margin: 0 auto;"></div>
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
	{!! Html::script('js/reportes_live.js') !!}
	{!! Html::script('plugins/highcharts/highcharts.js') !!}
	{!! Html::script('plugins/highcharts/modules/data.js') !!}
	{!! Html::script('plugins/highcharts/modules/series-label.js') !!}
	{!! Html::script('plugins/highcharts/modules/exporting.js') !!}
	{!! Html::script('plugins/highcharts/modules/export-data.js') !!}
@endsection

@section('styles')
	{!! Html::style('css/_all-skins.min.css') !!}
@endsection