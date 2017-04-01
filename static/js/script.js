jQuery(document).ready(function($) {

	"use strict";
	
	$(document).ready(function(){
		// Sticky Sidebar
		$('#area-side.smart-scroll').theiaStickySidebar({
			additionalMarginTop:70
		});

		// Search Overlay
		$('.toggle-search').on( 'click', function(){
			$('#search-overlay').addClass('show');
			$('#search-overlay input').focus();
		});
		$('.close-search').on( 'click', function(){
			$('#search-overlay').removeClass('show');
		});
		$(document).keyup(function(e){
			if(e.keyCode === 27)
			$('#search-overlay').removeClass('show');
		});

		// Fitvids
		$(".container").fitVids();

		// Featured slider
		$(".maha-slider.bxslider").bxSlider({
			auto:true,
			pause:6000,
			pager:false,
			nextText:"<i class='mf-chevron-right'></i>",
			prevText:"<i class='mf-chevron-left'></i>",
			onSliderLoad: function(){
				$(".maha-featured").css("visibility", "visible");
			}
		});

		// Gallery slider
		$(".maha-gallery.bxslider").bxSlider({
			captions:true,
			auto:true,
			pause:6000,
			pager:false,
			adaptiveHeight: true,
			nextText:"<i class='mf-chevron-right'></i>",
			prevText:"<i class='mf-chevron-left'></i>",
			onSliderLoad: function(){
				console.log('yay');
				$(".maha-gallery").css("visibility", "visible");
			}
		});

		// Mobile Menu
		$('.top-menu .menu').slicknav({
			prependTo:'.mobile-nav',
			label:'',
			allowParentLinks: true
		});
	});

});