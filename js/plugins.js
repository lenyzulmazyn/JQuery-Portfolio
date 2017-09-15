$(document).ready(function(){
	var wh = window.innerHeight;
	    wh = wh-55;
	$('#toggleBox').css({'height': (wh)});
	var menusize = $('.page-settings').actual('innerHeight');

	var msH = 0, totalsize = 0;
	$.each($('.subsection'), function() {
	   msH += $(this).actual('innerHeight');
	});
	if (wh < msH) {
			totalsize = menusize + msH;
	}
	if (wh < menusize) {
		$('.toggle-box').addClass('scroll');
	};

	$('.progress-percent').each(function(index, obj) {
		var pw = $(this).width();
		$(this).children('span').html(pw + "%");

		if (pw == '100') {
			$(this).parent('.progress-bar').siblings('.achieve-btn').unbind('click',false);
			$(this).parent('.progress-bar').siblings('.achieve-btn').css({
				"cursor": "pointer",
				"background": "#000",
				"color": "#fff",
				"pointer-events": "visible"
			});
		}
	});



	// var x=[];
	// $(document).each(function(index, obj) {
	// 	x.push($(this).text());
	// });
	//console.log(x);

	//$('.st-btn.st-last.st-remove-label').append('<img src="images/icon_dots2.png" alt="" style="width:16px; height: 16px;" />');
	//console.log("pagesettings:" + menusize + " submenus height:" + submenusize);
	//console.log("window height:" + wh + " togglebox height:" + totalsize);
	//console.log(totalsize);

	/**********************************************/
	var pf = $('.profile-header .profile-featured').innerWidth();
	$('.profile-header .profile-featured').css({'height': pf});

	$('#menu-toggle').click(function(){
		$(this).toggleClass('open');
		$( '.toggle-box' ).slideToggle( 'slow' );
		$('#pageHeader').toggleClass('active');
		$('#pageHeader').toggleClass('sp_active');
	});
	$('.follow-btn').click(function(){
		$(this).toggleClass('clicked');
	});
	$('.laugh').click(function(){
		$(this).toggleClass('active');
		$(this).removeClass('inactive');
		$(this).siblings('.smirk').toggleClass('inactive');
		$(this).siblings('.smirk').removeClass('active');
		$(this).siblings('.smirk').off('click');
		$(this).off('click');
	});
	$('.smirk').click(function(){
		$(this).toggleClass('active');
		$(this).removeClass('inactive');
		$(this).siblings('.laugh').toggleClass('inactive');
		$(this).siblings('.laugh').removeClass('active');
		$(this).siblings('.laugh').off('click');
		$(this).off('click');
	});
	$('.ttm').click(function(){
		$(this).toggleClass('active');
		$(this).parents('.post-setting').siblings().children('.share-box').hide();
		$(this).siblings('.rofl').removeClass('active');
		$(this).parents().siblings('.comment-box').toggle();
	});
	$('.rofl').click(function(){
		$(this).toggleClass('active');
		$(this).parents().siblings('.comment-box').hide();
		$(this).siblings('.ttm').removeClass('active');
		$(this).parents('.post-setting').siblings().children('.share-box').toggle();
		$(".st-btn.st-last").html("<img src='images/icon_dots2.png' alt='' />");
	});


	$('.share-close').click(function(){
		$(this).parents('.post-img').siblings('.post-setting').children('ul.cfix').children('li.rofl').removeClass('active');
		$(this).parents('.share-box').hide();
	});
	$('.comment-close').click(function(){;
		$(this).parents('.comment-box').siblings('ul.cfix').children('li.ttm').removeClass('active');
		$(this).parents('.comment-box').hide();
	});


	$('.menu-settings li.parent').click(function(){
		if (wh < totalsize) {
			$('.toggle-box').addClass('scroll');
		};
		$(this).toggleClass('active');
		$(this).children('.submenus').slideToggle('slow');
	});

	$(window).on("resize",function(){
		$('#menu-toggle').removeClass('open');
		$('.toggle-box').hide();
		$('#pageHeader').removeClass('active');
		$('#pageHeader').removeClass('sp_active');
		// $('.toggle-box').removeClass('scroll');
		$('.profile-header .profile-featured').css({'height': 'auto'});

		var wh = window.innerHeight;
		    wh = wh-55;
		$('#toggleBox').css({'height': (wh)});
		var menusize = $('.page-settings').actual('innerHeight');
		var msH = 0, totalsize = 0;
		$.each($('.subsection'), function() {
		   msH += $(this).actual('innerHeight');
		});
		if (wh < msH) {
				totalsize = menusize + msH;
		}
		if (wh < menusize) {
			$('.toggle-box').addClass('scroll');
		};

		var pf = $('.profile-header .profile-featured').innerWidth();
		$('.profile-header .profile-featured').css({'height': pf});
	});

	$('.comment-item > li.reply').click(function(){
		$('form.reply').hide();
		var p = $(this).parents('.comment-item');
		var usern = p.siblings('.comment-header').find('strong').text();
		p.siblings('form.reply').find('input').val('@'+usern+' ');
		p.siblings('form.reply').show();
		p.siblings('form.reply').find('input').focus();
	});
	$('.sub-comment-lists li.reply').click(function(){
		$('form.reply').hide();
		var p2 = $(this).parents('.comment-item').parents('.sub-comment-lists');
		var usern2 = $(this).parents('.comment-item').siblings('.comment-header').find('strong').text();
		p2.siblings('form.reply').find('input').val('@'+usern2+' ');
		p2.siblings('form.reply').show();
		p2.siblings('form.reply').find('input').focus();
	});

	$('.upload-btn').click(function(){
		$('#uploadOptions').css({'display': "block"});
	});
	$('.upload-options ul li.cancel').click(function(){
		$('#uploadOptions').css({'display': "none"});
	});
	$('.change-btn').click(function(){
		$('#profileOptions').css({'display': "block"});
	});
	$('.profile-options ul li.cancel').click(function(){
		$('#profileOptions').css({'display': "none"});
	});

	$('.post-item-setting').click(function(){
		$('#postSettings').css({'display': "block"});
	});
	$('.post-setting-wrap ul.set-01 li.cancel').click(function(){
		$('.post-item').removeClass('active');
		$('#postSettings').css({'display': "none"});
	});
	$('.post-setting-wrap ul.set-02 li.cancel').click(function(){
		$('.set-01').css({'display': "block"});
		$('.set-02').css({'display': "none"});
	});
	$('.post-setting-wrap ul.set-03 li.cancel').click(function(){
		$('.set-01').css({'display': "block"});
		$('.set-03').css({'display': "none"});
		$('.post-item').removeClass('active');
		$('#postSettings').css({'display': "none"});
	});



	$('.set-01 li.report').click(function(){
		$('.set-02').show();
		$('.set-01').hide();
	});
	$('.set-01 li.delete').click(function(){
		$('.set-03').show();
		$('.set-01').hide();
	});

	$('.follow-btn1').click(function(){
		$('.follow-btn2').show();
		$('.follow-btn1').hide();
	});
	$('.follow-btn2').click(function(){
		$('.follow-btn1').show();
		$('.follow-btn2').hide();
	});
	$('.set-01 li.embed').click(function(){
		$('.set-embed').show();
		$('.set-01').hide();
	});
	$('.set-embed li.cancel').click(function(){
		$('.set-embed').hide();
		$('.set-01').show();
		$('#postSettings').css({'display': "none"});
	});


	$('img.user-settings').click(function(){
		$('#userSettings').css({'display': "block"});
	});
	$('.user-setting-wrap ul li.cancel').click(function(){
		$('#userSettings').css({'display': "none"});
	});

	$('.set-block li.block').click(function(){
		$('.set-block li.block').hide();
		$('.set-block li.unblock').show();
		$('#userSettings').css({'display': "none"});
	});
	$('.set-block li.unblock').click(function(){
		$('.set-block li.unblock').hide();
		$('.set-block li.block').show();
		$('#userSettings').css({'display': "none"});
	});

	$('.category-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.category-lists').toggleClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.category-lists').siblings().removeClass('active');
	});
	$('.tag-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.tag-lists').toggleClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.tag-lists').siblings().removeClass('active');
	});
	$('.user-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.user-lists').toggleClass('active');
		$(this).parents('.search-tab-header').siblings('.search-item-list').children('.user-lists').siblings().removeClass('active');
	});


	$('.achieve-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.achieve-box').toggleClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.achieve-box').siblings().removeClass('active');
	});
	$('.badge-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.badge-box').toggleClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.badge-box').siblings().removeClass('active');
	});
	$('.reward-tab').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.reward-box').toggleClass('active');
		$(this).parents('.rewards-tab-header').siblings('.rewards-boxes').children('.reward-box').siblings().removeClass('active');
	});



	$('.achieve-btn').click(function(){
		$('.badge-tab').toggleClass('active');
		$('.achieve-tab').removeClass('active');
		$('.reward-tab').removeClass('active');
		$(this).parents('.achieve-items').parents('.achieve-box').removeClass('active');
		$(this).parents('.achieve-items').parents('.achieve-box').siblings('.badge-box').toggleClass('active');
		// ('.badge-box').toggleClass('active');
		// ('.achieve-box').removeClass('active');
		// ('.badge-box').siblings().removeClass('active');
	});




	$('span.fbtn.follow').click(function(){
		$(this).hide();
		$(this).siblings('span.fbtn.following').show();
	});
	$('span.fbtn.following').click(function(){
		$(this).hide();
		$(this).siblings('span.fbtn.follow').show();
	});

	$('.post-item-setting').click(function(){
		$(this).parents('.post-item').toggleClass('active');
	});
	$('ul.set-03 li.delete').click(function(){
		$('.post-item.active').hide();
		$('ul.set-03').hide();

		$('ul.set-01').show('',function(){alert ("The post has been deleted.");});
		$('#postSettings').css({'display': "none"});
	});
	$('.menu-box ul li.settings-button').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$('.settings-toggle').slideToggle();
		$('.search-page').hide();
		$('.rewards-wrapper').hide();
	});
	$('.menu-box ul li.badge-button').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$('.rewards-wrapper').slideToggle();
		$('.search-page').hide();
		$('.settings-toggle').hide();
	});
	$('.menu-box ul li.search-button').click(function(){
		$(this).toggleClass('active');
		$(this).siblings().removeClass('active');
		$('.search-page').slideToggle();
		$('.settings-toggle').hide();
		$('.rewards-wrapper').hide();
	});
	$('.follow-page ul.follow-lists li').click(function(){
		$(this).children('span').toggleClass('clicked');
	});





	/******* EDIT POST FUNCTION ********/

	$(function(){
	    $("#profile-submit").bind("click", function(){
	        var user = $(".user").val(),
							loc = $(".loc").val();
	        $(".user-value").html(user);
					$(".loc-value").html(loc);
					$(this).siblings(".edit-form").children(".edit-tbl").find("td .field-text").show();
					$(this).siblings(".edit-form").children(".edit-tbl").find("td .edit-field").hide();
					$(this).siblings(".edit-form").children(".edit-tbl").find("td:first-child").css({"color":""});
					$(this).attr("disabled","disabled");
					$(this).siblings(".success-msg").show().delay(3000).fadeOut();
	    });
	});
	$(function(){
	    $("#account-submit").bind("click", function(){
	        var email = $(".email").val(),
							pass = $(".pass-new").val();
							mob = $(".mobile").val();
	        $(".email-value").html(email);
					//$(".pass-value").html(pass);
					$(".mobile-value").html(mob);
					$(this).siblings(".edit-form").children(".edit-tbl").find("td .field-text").show();
					$(this).siblings(".edit-form").children(".edit-tbl").find("td .edit-field").hide();
					$(this).siblings(".edit-form").children(".edit-tbl").find("td:first-child").css({"color":""});
					$(this).attr("disabled","disabled");
					$(this).siblings(".success-msg").show().delay(3000).fadeOut();
	    });
	});
	$("img.edit-btn").click(function(){
		$(this).parents("td").siblings("td").children(".field-text").hide();
		$(this).parents("td").siblings("td").children(".edit-field").show();
		$(this).parents("td").siblings("td:first-child").css({"color":"#000"});
		$(this).parents(".edit-form").siblings(".submit-btn").removeAttr("disabled");
	});
	$('.switch .slider').click(function(){
		$(this).parents('.social-btn').toggleClass('active');
		$(this).parents('.social-btn').parents('td').siblings('td:first-child').css({"color":""});
		$(this).parents('.social-btn.active').parents('td').siblings('td:first-child').css({"color":"#000"});
		$(this).parents(".edit-form").siblings(".submit-btn").removeAttr("disabled");
	});



});
