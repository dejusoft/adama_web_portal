/**Custom made scripts
 * 
 */




$(document).ready(function() {



$("#Service_Li > ul").append("<li> <a href='http://score.kerala.gov.in/' target='_blank'>CR Submission</a> </li>");

$("a[href='/kerala-app-store']").attr('href', 'http://www.appstore.kerala.gov.in/').attr('target','_blank');


	
$("a[href='http://prd.kerala.gov.in/']").attr('title', 'External site that opens in a new window');



$("a[href='http://www.itmission.kerala.gov.in/']").attr('title', 'External site that opens in a new window');


$("a[href='https://www.tcs.com/']").attr('title', 'Non Government site that opens in a new window');


	
	
	if (matchMedia) {
		  var mq = window.matchMedia("(min-width: 701px)");
		  mq.addListener(WidthChange);
		  WidthChange(mq);
		}

		// media query change
		function WidthChange(mq) {
		  if (mq.matches) {
		    // window width is at least 701px
			  
			$("#About_Li").hover(function(){
				/*  	$("#About_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/About-yellow.png')"); */
				    $("#About_img").css("transform", "scale(1.2)");
				    
				    $("#About_img").css("transition", "all 0.25s");
				    
				    
				          }, function(){
				        	  /*   $("#About_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/About.png')"); */
				        $("#About_img").css("transform", "scale(1)");
				        
				        $("#About_img").css("transition", "all 0.25s");
				    });
				
				
			$("#Gov_Li").hover(function(){
				/*	$("#Gov_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Government-yellow.png')");*/
			    $("#Gov_img").css("transform", "scale(1.2)");
			    
			    $("#Gov_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			     /*  $("#Gov_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Government.png')");*/
			        $("#Gov_img").css("transform", "scale(1)");
			        
			        $("#Gov_img").css("transition", "all 0.25s");
			    });


			$("#Service_Li").hover(function(){
				 /* $("#Service_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Services-yellow.png')");*/
			    $("#Service_img").css("transform", "scale(1.2)");
			    
			    $("#Service_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*   $("#Service_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Services.png')");*/
			        $("#Service_img").css("transform", "scale(1)");
			        
			        $("#Service_img").css("transition", "all 0.25s");
			    });


			$("#Mission_Li").hover(function(){
				 /*	$("#Mission_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Mission-yellow.png')");*/
			    $("#Mission_img").css("transform", "scale(1.2)");
			    
			    $("#Mission_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*    $("#Mission_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Mission.png')");*/
			        $("#Mission_img").css("transform", "scale(1)");
			        
			        $("#Mission_img").css("transition", "all 0.25s");
			    });

			$("#People_Li").hover(function(){
				 /*	$("#People_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/People-yellow.png')");*/
			    $("#People_img").css("transform", "scale(1.2)");
			    
			    $("#People_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*    $("#People_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/People.png')");*/
			        $("#People_img").css("transform", "scale(1)");
			        
			        $("#People_img").css("transition", "all 0.25s");
			    });

			$("#Business_Li").hover(function(){
				 /*	$("#Bussiness_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Business-yellow.png')");*/
			    $("#Bussiness_img").css("transform", "scale(1.2)");
			    
			    $("#Bussiness_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*    $("#Bussiness_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Business.png')");*/
			        $("#Bussiness_img").css("transform", "scale(1)");
			        
			        $("#Bussiness_img").css("transition", "all 0.25s");
			    });


			$("#Tourism_Li").hover(function(){
				 /*	$("#Tourism_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Tourism-yellow.png')");*/
			    $("#Tourism_img").css("transform", "scale(1.2)");
			    
			    $("#Tourism_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*    $("#Tourism_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Tourism.png')");*/
			        $("#Tourism_img").css("transform", "scale(1)");
			        
			        $("#Tourism_img").css("transition", "all 0.25s");
			    });

			$("#Schemes_Li").hover(function(){
				 /*	$("#Schemes_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/Schemes-yellow.png')");*/
			    $("#Schemes_img").css("transform", "scale(1.2)");
			    
			    $("#Schemes_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*     $("#Schemes_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/Schemes.png')");*/
			        $("#Schemes_img").css("transform", "scale(1)");
			        
			        $("#Schemes_img").css("transition", "all 0.25s");
			    });

			$("#Contact_Li").hover(function(){
				 /*	$("#Contact_img").css("content", "url('/KeralaLatest-theme/images/kerala/MenuIconHover/ContactUs-yellow.png')");*/
			    $("#Contact_img").css("transform", "scale(1.2)");
			    
			    $("#Contact_img").css("transition", "all 0.25s");
			    
			    
			          }, function(){
			        	  /*      $("#Contact_img").css("content", "url('/KeralaLatest-theme/images/kerala/menuIcon/ContactUs.png')");*/
			        $("#Contact_img").css("transform", "scale(1)");
			        
			        $("#Contact_img").css("transition", "all 0.25s");
			    });


		  }
			  
			  
			  
			  
		  else {
		    // window width is less than 701px
			  
			 
			
		  		}
		}

});






		/*

			$(window).bind('scroll', function () {
			    if ($(window).scrollTop() > 50) {
			        $('.cssmenu').addClass('fixedMenuCss');
			        
			    } else {
			        $('.cssmenu').removeClass('fixedMenuCss');
			       
			    }
	        });
	        
	        */

			/*

			$(function(){
			    // Check the initial Poistion of the Sticky Header
			    var stickyHeaderTop = $('#cssmenu').offset().top;

			    $(window).scroll(function(){
			            if( $(window).scrollTop() > stickyHeaderTop ) {
			                  $('#cssmenu').css({position: 'fixed', top: '0px'});
			            	  
			                    $('#webHeader').css('display', 'none');
			                    $('#webStrip').css('display', 'none');
			                    
			            } else {
			            	   
			                    $('#webHeader').css('display', 'block');
			                    $('#webStrip').css('display', 'block');
			                    
			            }
			    });
			});

			  
			  
			  
			  
			  
			  
			  
		  }

		}
	
	
	
	
	
	

	
*/
