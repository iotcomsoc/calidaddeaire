@extends('layouts.login')

@section('contenido')

<body class="hold-transition login-page">
	<div class="login-box">
	  <div class="login-logo">
	    <a href="../../index2.html"><b>Sistema IoT</b></a>
	  </div><!-- /.login-logo -->

	  <div class="login-box-body">
	    <p class="login-box-msg">Ingrese sus datos de Acceso</p>
	    {{ Form::open(array('url' => '/login')) }}
	      <div class="form-group has-feedback">
	        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
	        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      <div class="form-group has-feedback">
	        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      <div class="row">
	        <div class="col-xs-8">
	          <div class="checkbox icheck">
	            <label>
	              <input type="checkbox"> Recordar
	            </label>
	          </div>
	        </div><!-- /.col -->
	        <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
	        </div><!-- /.col -->
	      </div>
	    {{ Form::close() }}
	    <a href="#">Olvidé mi password</a><br>
	  </div><!-- /.login-box-body -->

	</div><!-- /.login-box -->
</body>

@endsection