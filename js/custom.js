$(document).ready(function(){
	$('.arrow_left').click(function(){
		$('.arrow_left').hide();
		$('#toggle_editor').animate({
			width: '280px'
		});
		$('.arrow_right').show();
	});

	$('.arrow_right').click(function(){
		$('.arrow_right').hide();
		$('#toggle_editor').animate({
			width: '200px'
		});
		$('.arrow_left').show();
	});

	$('.cog').click(function(){
		//$('#toggle_editor').hide();
		$('#editor').slideDown();
	});

	$('.close').click(function(){
		$('#editor').slideUp();
		//$('#toggle_editor').show();
	});

	var themes = ['red', 'blue', 'orange'];

	$.each(themes, function(i, val){
		switch(val) {
			case 'red':
				var color = '114, 34, 61';
				var trigger_point = 1300;
				break;
			case 'blue':
				var color = '62, 79, 129';
				var trigger_point = 1100;
				break;
			case 'orange':
				var color = '249, 115, 62';
				var trigger_point = 1500;
				break;
		}
		var end_point = trigger_point + 200; 
		$('.themes ul').append('<li class="theme" id="'+val+'">'+val+'</li>');
		$('#'+val).click(function(){
			$('body').css('background', 'linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba('+color+', 0.65) '+trigger_point+'px, rgba('+color+', 1) '+end_point+'px), url("img/background_'+val+'.jpg") no-repeat').css('background-size', 'contain');
			$('.button').css('background-color', 'rgb('+color+')');
			$('footer a').css('color', 'rgb('+color+')');
		});
	});

	$('#default').click(function(){
		$('body').css('background', 'linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(165, 126, 80, 0.65) 1300px, rgba(165, 126, 80, 1) 1500px), url("img/background.jpg") no-repeat').css('background-size', 'contain');
		$('.button').css('background-color', '#a57e50');
		$('footer a').css('color', '#a57e50');
	});
});

