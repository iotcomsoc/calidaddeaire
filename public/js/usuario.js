$(function(){
	cargar();

	//Lista los usuasrios
	function cargar(){
		fila = "";
		$.ajax({
			url:"/usuarios",
			method:"GET",
			success:function(response){
				$(response).each(function(key,value){
					foto = value.image;
					if(foto==null)  foto='foto.gif';
					fila += "<tr>";
					fila += "<td><img src='img/"+foto+"' name='image_user' class='img-thumbnail' width='50' height='35'></td>";
					fila += "<td>" + value.name + "</td>";
					fila += "<td>" + value.last_name + "</td>";
					fila += "<td>" + value.email + "</td>";
					fila += "<td><button type='button' name='update' id='"+value.id+"' class='btn btn-success btn-xs update'>Actualizar</button></td>";
					fila += "<td><button typ='button' name='delete' id='"+value.id+"' class='btn btn-danger btn-xs delete'>Eliminar</button></td>";
					fila += "</tr>";
				});
				$("#user_table tbody").html(fila);
			}
		});
	}

	$("#agregar").click(function(){
		$("#user_form")[0].reset();
		$("#upload_image").html("");
	});

	//Envia el formulario
	$("#user_form").on('submit',function(event){
		event.preventDefault();
		name  = $("#name").val();
		email = $("#email").val();
		login = $("#login").val();
		password = $("#password").val();
		id = $("#id").val();
		hidden_password = $("#hidden_password").val();
		extension = $("#image").val().split(".").pop().toLowerCase();
		action = $("input[type='submit']").val();
		if(extension!=''){
			if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1){
				$("#image").val('');
				alert('Formato de imagen invalido');
				return false;
			}
		}
		if(name!="" && email!="" && login!=""){
			if(action=="Grabar"){
				$.ajax({
					url:"/usuario",
					method:"POST",
					dataType:'json',
					data:new FormData(this),
					contentType:false,
					processData:false,
					success:function(response){
						$("#user_form")[0].reset();
						$("#user_collapse").collapse('hide');
						cargar();
						alert(response.mensaje);
					}
				});
			}
			else if(action=="Actualizar"){
				$.ajax({
					url:"/usuario/"+id+"",
					type:"PUT",
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					dataType:'json',
					data:{name:name},
					contentType:false,
					processData:false,
					success:function(response){
						alert(response);
						$("#user_form")[0].reset();
						$("input[type='submit']").val("Grabar");
					}
				});
			}
		}
		else if(name==""){
			alert("Debe ingresar un nombre");
		}
		else if(email==""){
			alert("Debe ingresar un correo");
		}
		else if(login==""){
			alert("Debe ingresar un login");
		}
		else if(password==""){
			if(hidden_password==""){
				alert("Debe ingresar un password");
			}
		}
	});

	//Recupera un usuario y lo muestra en el formulario
	$(document).on('click','.update',function(){
		var user_id = $(this).attr('id');
		var url = "usuario/"+user_id+"/edit";
		$.ajax({
			url:url,
			method:"get",
			success:function(response){
				foto = response.image;
				if(foto==null)  foto='foto.gif';
				$(".collapse").collapse("show");
				$("#name").val(response.name);
				$("#last_name").val(response.last_name);
				$("#email").val(response.email);
				$("#login").val(response.login);
				$("#hidden_password").val(response.password);
				$("#hidden_image").val(response.image);
				$("#id").val(response.id);
				$("#upload_image").html("<img src='img/"+foto+"' class='' width='30' height='30'>");
				$("input[type='submit']").val("Actualizar");
			}
		});
	});
});