@extends('layouts/admin')

@section('contenido')
<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Sistema de Ventas</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
        	<div class="row">
	          	<div class="col-md-12">
	                <!--Contenido-->
	                <h2 align="center">Listado de Usuarios</h2>
	                <button class="btn btn-success" type="button" name="agregar" id="agregar" data-toggle="collapse" data-target="#user_collapse">Agregar</button><br><br>
	                <div id="user_collapse" class="collapse">
	                	{!! Form::open(array('id'=>'user_form')) !!}
	                		<div class="form-group">
			                	<label for="" class="col-sm-2 col-form-label">Nombres</label>
				                <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese sus nombres">		
	                		</div>
							<div class="form-group">
		                		<label for="" class="col-sm-2 col-form-label">Apellidos</label>
		                		<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ingrese sus apellidos">
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 col-form-label">Correo</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su correo">
							</div>
							<div class="form-group">
								<label for="" class="col-sm-2 col-form-label">Usuario</label>
								<input type="text" name="login" id="login" class="form-control" placeholder="Ingrese su login">
							</div>		
							<div class="form-group">
								<label for="" class="col-sm-2 col-form-label">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su login">
								<input type="hidden" name="hidden_password" id="hidden_password">
							</div>													
							<div class="form-group">
								<label for="" class="col-sm-2 col-form-label">Imagen</label>
								<input type="file" name="image" id="image" class="form-control-file" placeholder="Suba un archivo">	
								<input type="hidden" name="hidden_image" id="hidden_image">
								<span id="upload_image"></span>
							</div>
							<div class="form-group" align="center">
								<input type="hidden" name="id" id="id">
								<input type="submit" class="btn btn-success" value="Grabar">	
							</div>
	                	{!! Form::close() !!}
	                	<br>
	                </div>
	                <div id="user_table" class="table-responsive">
		                <table class="table table-bordered table-striped">
		                	<thead>
		                		<th width="10%">Imagen</th>
		                		<th width="30%">Nombres</th>
		                		<th width="30%">Apellidos</th>
		                		<th width="10%">Correo</th>
		                		<th width="20%" colspan="2">Acciones</th>
		                	</thead>
		                	<tbody></tbody>
		                </table>
	                </div>

	                <!--Fin Contenido-->
	            </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /.box-body -->
    </div><!-- /.box -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection

@section('scripts')
	{!! Html::script('js/usuario.js') !!}
@endsection

<meta name="csrf-token" content="{{ csrf_token() }}">
