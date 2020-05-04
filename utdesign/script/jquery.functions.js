$(function(){
		
		
	/*============================================================
		Responsive Image Resizing
	------------------------------------------------------------*/
	$(".responsive img").each(function() {  
		var imgsrc = new Image(); 
		imgsrc.src = this.src;
		$(this).css({"maxWidth": imgsrc.width}); 
	}); 
	

	
	/*
		Toggles
	------------------------------------------------------------*/
	$('.quickclick').click(function(){ 
		$('#spotlight').toggleClass("open");
		$('#overlay').toggleClass("open");
	});
	
	$('#searcher').click(function(){ 
		$('#search').slideToggle();
	});
	
	$('#trigger').click(function(){ 
		$('#mobile-menu').slideToggle();
	});
	
	//$('#staffcontact').click(function(){ 
		//$('#facultycontact').slideToggle();
	//});
	
	
	
	/*
		Jumper
	------------------------------------------------------------*/
	$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      	}
       }
  	});
	
		
  	/*
		Video
	-------------------*/
	
	$('div.video-container').each(function(){
		$(this).find('div.playme').click(function(){
			$(this).parent().addClass('video-container-active');
			var src = $(this).parent().find('div.embed iframe').attr('src');
			$(this).parent().find('div.embed iframe').attr('src', src+'?autoplay=1&showinfo=0&controls=1&rel=0');
		});
	});
		
	
	/*
		Owl Carousel
	------------------------------------------------------------*/
	$("#sponsors").owlCarousel({
		    loop:true,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:2000,
		    autoplaySpeed:1000,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            loop:true,
		            autoplay:true
		        },
		        400:{
		            items:3,
		            loop:true,
		            autoplay:true		        
		        },
		        800:{
		            items:4,
		            loop:true,
		            autoplay:true
		        },
		        1200:{
		            items:6,
		            loop:true,
		            autoplay:true
		        }
		    }
		})
		
		
});

jQuery(document).ready(function ($) {
	console.log('Countering');
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});