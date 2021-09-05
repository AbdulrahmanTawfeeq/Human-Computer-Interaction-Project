
$(document).ready(function(){

  

  $("#lightbutton").click(function(){
  $('.bg-dark').removeClass('bg-dark').addClass('bg-light');
	$('.text-light').removeClass('text-light').addClass('text-dark');
	$('.text-white').removeClass('text-white').addClass('text-dark');
	$('.btn-outline-light').removeClass('btn-outline-light').addClass('btn-outline-dark');
  });

   $("#darkbutton").click(function(){
    $('.bg-light').removeClass('bg-light').addClass('bg-dark');
	$('.text-dark').removeClass('text-dark').addClass('text-light');
	$('.btn-outline-dark').removeClass('btn-outline-dark').addClass('btn-outline-light');
    //alert('Swithch dark');
  });


// Font manupulation

  $("#defaultfont").click(function(){
  $('#control1').attr('class', '').addClass('bg-secondary');
  $('#control2').attr('class', '');
  //Remove the previous classes for resizing
  $('#searchinput').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  $('#searchbutton').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  //Add new class
  $('#searchinput').addClass('py-1');
  $('#searchbutton').addClass('py-1');
  //alert('Swithch default');
  });

  $("#medfont").click(function(){
  $('#control1').attr('class', '').addClass('h5').addClass('bg-secondary');
  $('#control2').attr('class', '').addClass('h5');
  //Remove the previous classes for resizing
  $('#searchinput').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  $('#searchbutton').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  //Add new class
  $('#searchinput').addClass('py-2');
  $('#searchbutton').addClass('py-2');
  //alert('Swithch large');
  });

  $("#largefont").click(function(){
  $('#control1').attr('class', '').addClass('h4').addClass('bg-secondary');
  $('#control2').attr('class', '').addClass('h4');
  //Remove the previous classes for resizing
  $('#searchinput').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  $('#searchbutton').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  //Add new class
  $('#searchinput').addClass('py-3');
  $('#searchbutton').addClass('py-3');
  //alert('Swithch large');
  });

  $("#xlargefont").click(function(){
  $('#control1').attr('class', '').addClass('h3').addClass('bg-secondary');
  $('#control2').attr('class', '').addClass('h3');
  //Remove the previous classes for resizing
  $('#searchinput').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  $('#searchbutton').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  //Add new class
  $('#searchinput').addClass('py-4');
  $('#searchbutton').addClass('py-4');
  //alert('Swithch large');
  });

  $("#xxlargefont").click(function(){
  $('#control1').attr('class', '').addClass('h2').addClass('bg-secondary');
  $('#control2').attr('class', '').addClass('h2');
  //Remove the previous classes for resizing
  $('#searchinput').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  $('#searchbutton').removeClass("py-1").removeClass("py-2").removeClass("py-3").removeClass("py-4").removeClass("py-5");
  //Add new class
  $('#searchinput').addClass('py-5');
  $('#searchbutton').addClass('py-5');
  //alert('Swithch large');
  });

});

