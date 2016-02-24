$(document).ready(function(){

	var cliente = "";

	$('#cliente').keyup(function(){

		var vall = $(this).val();

		$.ajax({

			type:'POST',
			url:'components/verifica-cliente.php',
			data:"cliente="+vall,
			success:function(msg){

				$("#info-cliente").html(msg);

			}

		});

	});

});