<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema IoT</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->

	{!! Html::style('css/bootstrap.min.css') !!}
	<!-- Font Awesome -->
	{!! Html::style('css/font-awesome.css') !!}
	<!-- Theme style -->
	{!! Html::style('css/AdminLTE.min.css') !!}

	{!! Html::style('css/_all-skins.min.css') !!}

	@section('styles')     
    @show

    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- jQuery 2.1.4 -->
	{!! Html::script('js/jQuery-2.1.4.min.js') !!}
	<!-- Bootstrap 3.3.5 -->
	{!! Html::script('js/bootstrap.min.js') !!}
	<!-- iCheck -->
	{!! Html::script('js/icheck.min.js') !!}

	{!! Html::script('js/app.min.js') !!}

	@section('scripts')     
    @show
	
	<script>
	  $(function () {
	    $('input').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' // optional
	    });
	  });
	</script>
</head>