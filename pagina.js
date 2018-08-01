$(document).ready(function(){	//DOM carregado com sucesso

	$('#titulo_1').click(function(){

		$('#tab_1').show();
		$('#tab_2').hide();
		$('#tab_3').hide();
		$('#tab_4').hide();

	});

	$('#titulo_2').click(function(){

		$('#tab_1').hide();
		$('#tab_2').show();
		$('#tab_3').hide();
		$('#tab_4').hide();

	});

	$('#titulo_3').click(function(){

		$('#tab_1').hide();
		$('#tab_2').hide();
		$('#tab_3').show();
		$('#tab_4').hide();

	});

	$('#titulo_4').click(function(){

		$('#tab_1').hide();
		$('#tab_2').hide();
		$('#tab_3').hide();
		$('#tab_4').show();

	});

});