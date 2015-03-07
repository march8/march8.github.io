$(function(){

	$('#playButton').on('click', function(){

		$(this).off('click').css('cursor', 'default');
		$('#initial').fadeOut('slow');
		playMusic();
		playAnimation();

	});

	function playMusic(){
		document.getElementById('audio').play();
	}

	function playAnimation(){
		setTimeout(function(){
			$('#title').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 6000);

		setTimeout(function(){
			$('#title').fadeOut(3000);
		}, 15000);

		setTimeout(function(){
			$('#gif1').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 19000);

		setTimeout(function(){
			$('#gif1').fadeOut(5000);
			$('#gif2').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 47000);

		setTimeout(function(){
			$('#gif2').fadeOut(5000);
			$('#gif3').css('visibility', 'visible').animate({
				opacity	: 1
			}, 3000);
		}, 79000);

		setTimeout(function(){
			$('#gif3').fadeOut(5000);
			$('#gif4').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 107500);

		setTimeout(function(){
			$('#gif4').fadeOut(5000);
			$('#gif5').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 134000);

		setTimeout(function(){
			$('#gif5').fadeOut(5000);
			$('#gif6').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 151000);

		setTimeout(function(){
			$('#gif6').fadeOut(5000);
			$('#gif7').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 178000);

		setTimeout(function(){
			$('#gif7').fadeOut(9000);
		}, 205000);

		setTimeout(function(){
			$('#iLoveYou').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 213000);

		setTimeout(function(){
			// $('#iLoveYou').fadeOut(5000);
			$('#happyBirthday').css('visibility', 'visible').animate({
				opacity	: 1
			}, 5000);
		}, 229000);
	}
});