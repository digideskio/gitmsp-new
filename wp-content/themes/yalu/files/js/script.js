/*-----------------------------------------------------------------------------------

 	Script - All Custom frontend jQuery scripts & functions
 
-----------------------------------------------------------------------------------*/

jQuery(window).load(function($) {	
	

	
	if( jQuery().isotope ) {
		/*---------------------------------------------- 
					  C A L L   I S O T O P E   
		------------------------------------------------*/	
		var $container = jQuery('.masonry');
		
		$container.imagesLoaded( function(){
			$container.isotope({
				itemSelector : '.masonry-item',
				transformsEnabled: true			// Important for videos
			});	
		});
			
		
		/*---------------------------------------------- 
					 I S O T O P E : Filter
		------------------------------------------------*/
		jQuery('.masonryfilter li a').click(function(){
			
			jQuery('.masonryfilter li a').removeClass('active');
			jQuery(this).addClass('active');
			
			var selector = jQuery(this).attr('data-option-value');
			$container.isotope({ filter: selector });
			
			return(false);
		});
		
		
		/*---------------------------------------------- 
				 I S O T O P E : Load More
		------------------------------------------------*/	
		var load_more = jQuery('#load-more a'),
						origtext = load_more.text(),
						maxnumpage = jQuery('#load-more a').data('maxnumpage'),
						type = jQuery('#load-more a').data('type'),
						tax = jQuery('#load-more a').data('tax'),
						page = 1;

		load_more.click(function(){
			page++;
			//jQuery('#load-more a').find('.icon').fadeOut(300);
			jQuery('#load-more a').find('.loading-action').fadeIn(300);
			
			jQuery.ajax({type:'POST', url:srvars.ajaxurl, data: { action:'sr_load_more', page:page, type:type, tax:tax }, success: function(response) {
				$content = jQuery(response);
				$content.hide();
				
								
				jQuery($content).imagesLoaded(function() {
					jQuery('.masonry').append( $content );
					//jQuery('#load-more a').find('.icon').delay(800).fadeIn(300);
					jQuery('#load-more a').find('.loading-action').delay(800).fadeOut(300, function () {
						$content.show();
						jQuery('.masonry').isotope( 'appended', $content, function() {
							if(page >= maxnumpage) jQuery('#load-more').slideUp(500);
						});									  
					});
				});
	
			}});
			return false;
		});
		
		
	} /* END if isotope */
	
	
	
	
	/*---------------------------------------------- 
			T O G G L E  &  A C C O R D I O N
	------------------------------------------------*/		
	jQuery(".toggle").each(function(i) {
		jQuery(this).find('.toggle-active').siblings('.toggle-inner').slideDown(300);							
	});
	
	jQuery(".toggle").on("click", ".toggle-title", function() { 
				
		var parentdiv = jQuery(this).parent('div').parent('div');
		var active = jQuery(this).parent('div').find('.toggle-inner').css('display');
		
		if (jQuery(parentdiv).attr('class') == 'accordion') {
			if (active !== 'none' ) { 
				jQuery(parentdiv).find('.toggle .toggle-inner').slideUp(300);
				jQuery(this).toggleClass('toggle-active');
			} else {
				jQuery(parentdiv).find('.toggle .toggle-inner').slideUp(300);
				jQuery(parentdiv).find('.toggle .toggle-title').removeClass('toggle-active');
				
				jQuery(this).toggleClass('toggle-active');
				jQuery(this).siblings('.toggle-inner').slideDown(300);
			}
		} else {
			jQuery(this).toggleClass('toggle-active');
			jQuery(this).siblings('.toggle-inner').slideToggle(300);
		}
		
		return(false);
	});
	
	
	/*---------------------------------------------- 
				        T A B S 
	------------------------------------------------*/	
	jQuery(".tabs").each(function(i) {
		jQuery(this).find('.tab_content').removeClass('active');
		var rel = jQuery(this).find('.active').attr('href');
		jQuery(this).find('.'+rel).addClass('active');
	});
	
	jQuery(".tab_nav").on("click", "a", function() { 
		
		var parentdiv = jQuery(this).parent('li').parent('ul').parent('div');
		var rel = jQuery(this).attr('href');
		
		jQuery(parentdiv).find(".tab_nav a").removeClass("active");
		jQuery(this).addClass("active");
		
		jQuery(parentdiv).find(".tab_container .tab_content").hide().removeClass('active');
		jQuery(parentdiv).find(".tab_container ."+rel).fadeIn(500).addClass('active');
		
		return(false);
		
	});
	
	
	
	/*---------------------------------------------- 
			 D R O P   D O W N   N A  V I
	------------------------------------------------*/
	// MAiN
	var timer;
	jQuery("nav li").each(function() {  
        if (jQuery(this).find("ul").length > 0) {  
            var element = jQuery(this);
            //show subnav on hover  
            jQuery(this).mouseenter(function() {  
				if(timer) {
                	clearTimeout(timer);
                	timer = null;
                }
                timer = setTimeout(function() {
                	jQuery(element).children('ul').slideDown(200);
                }, 100)
            });  
            //hide submenus on exit  
            jQuery(this).mouseleave(function() {  
				clearTimeout(timer);							 
                jQuery(this).children('ul').slideUp(200);
            });  
        }  
    });
	
	
	/*---------------------------------------------- 
				 C L O S E   A L E R T
	------------------------------------------------*/
	jQuery('body').on("click", ".alert-close", function() { 
		jQuery(this).parent('.alert').fadeOut(300);
		return false;
	});
	
	
	
	/*---------------------------------------------- 
				   F A N C Y B O X
	------------------------------------------------*/
	if(jQuery().fancybox) {
		jQuery('.openfancybox').fancybox();
	}
	
	
		
	
	/*---------------------------------------------- 
				   F L E X S L I D E R
	------------------------------------------------*/
	jQuery('.flexslider-container').each(function(index){
		var thisid = jQuery(this).attr('id');	
			jQuery("#"+thisid+" .flexslider").flexslider({
			controlsContainer: "#"+thisid,
			animation: "fade",
			slideshowSpeed: 7000,
			animationDuration: 600,
			slideshow: false,
			directionNav: true,
			controlNav: true,
			smoothHeight: true,
			touch: true,
			video: true,
			randomize: false
		}); //end flexslider
	});

	
	
	
	/*---------------------------------------------- 
			I M G   O V E R L A Y   H O V E R
	------------------------------------------------*/
	var hoverFade = 300;	
	jQuery('body').on("mouseenter", ".imgoverlay", function(){
		jQuery(this).find('.overlay').animate({ opacity: 0.7 }, hoverFade);
	}).on("mouseleave", ".imgoverlay", function () {
		jQuery(this).find('.overlay').animate({ opacity: 0 }, hoverFade);
	});
	
	
	
	/*---------------------------------------------- 
	B R E A D C R U M B / P A G I N T A I O N   P A D D I N G
	------------------------------------------------*/
	if (jQuery(window).width() > 680) {
		var BcHeight = jQuery('.breadcrumb').height();
		var BcParentHeight = jQuery('.breadcrumb').parent('.wrapper').height();
		var BcPadding = Math.ceil((BcParentHeight - BcHeight) / 2);
		jQuery('.breadcrumb').css({'paddingTop': BcPadding+'px'});
		
		var PagHeight = jQuery('#single-pagination').height();
		var PagParentHeight = jQuery('#single-pagination').parent('.wrapper').height();
		var PagPadding = Math.ceil((PagParentHeight - PagHeight) / 2);
		jQuery('#single-pagination').css({'paddingTop': PagPadding+'px'});
		
		var VlHeight = jQuery('#views-likes').height();
		var VlParentHeight = jQuery('#views-likes').parent('.wrapper').height();
		var VlPadding = Math.ceil((VlParentHeight - VlHeight) / 2);
		jQuery('#views-likes').css({'paddingTop': VlPadding+'px'});
	}
	
	
	/*---------------------------------------------- 
				R E S P ON S I V E   N A V 
	------------------------------------------------*/
	jQuery('<a class="open-responsive-nav" href="">open</a>').appendTo(".menu");
	jQuery('<div class="menu-responsive"><div class="wrapper"><nav id="responsive-nav"><ul class="clearfix"></ul></nav></div></div>').appendTo("header");
	
	var mainnav = jQuery("nav#main-nav > ul").html();
	jQuery("nav#responsive-nav > ul").html(mainnav);
	
	
	jQuery('body').on("click", ".open-responsive-nav", function() { 
		jQuery('.menu-responsive').slideToggle(300);
		return false;
	});
	
	jQuery('nav#responsive-nav').on("click", "a", function() {
		if (jQuery(this).parent().children('ul').length > 0) {
			jQuery(this).parent().children('ul').slideToggle(300);
			return false;
		} else {
			return true;
		}
	});
	
	
	
	/*---------------------------------------------- 
				 L I K E S   C O U N T S
	------------------------------------------------*/
	jQuery('.entry-likes').on("click", "a", function(){
		var id = jQuery(this).data('id');
		thislink = jQuery(this).attr('href');
		var values = "countlikes=1";
		
		jQuery.ajax({type:'POST', url:srvars.ajaxurl, data: { action:'sr_like', id:id }, success: function(response) { 
				if (response !== 'cookieset') {
					jQuery('.entry-likes a .likes-value').html(response);
					jQuery('.entry-likes a').addClass('likesactive');
				}
			}
		});
		
		return false;
	});
	
	
	
	/*---------------------------------------------- 
				   B A C K   T O P   T O P
	------------------------------------------------*/
	jQuery('#totop').click(function(){
		jQuery('html, body').animate({scrollTop: 0}, 600);
		return false;						   
	});
	
	jQuery(window).scroll(function() {
		var position = jQuery(window).scrollTop();
		if (jQuery(window).width() > 768) {
			if ( position > 500 )  {
				jQuery( '#totop' ).fadeIn( 300 );
			} else { 
				jQuery( '#totop' ).fadeOut( 300 );
			}
		} else {
				jQuery( '#totop' ).fadeOut( 300 );
		}
	});

	
	
	
	initialise();
	
});  // END jQuery(window).load(function($) {




jQuery(window).resize(function($) {	
	initialise();
	
	if( jQuery().isotope ) {
		var $container = jQuery('.masonry');
		$container.isotope( 'reLayout');
	}
}); // END jQuery(window).resize(function($) {
	
	
	


/* functions which need to be reinitialised when resizing window */
function initialise(content) { 
	
	
	/*---------------------------------------------- 
			  S T I C K Y   F O O T E R   
	------------------------------------------------*/
	var topHeight = jQuery('#top').height();
	var headerHeight = jQuery('header').height();
	var footerHeight = jQuery('footer').height();
	var windowHeight = jQuery(window).height();
	var minHeight = windowHeight - footerHeight - headerHeight - topHeight;
	if (minHeight > 0) { jQuery('#main').css({'minHeight': minHeight+'px'}); }
	
	
	
	/*---------------------------------------------- 
		R E S P O N S I V E   J P L A Y E R
	------------------------------------------------*/
	if(jQuery().jPlayer && jQuery('.jp-interface').length){
		jQuery('.jp-interface').each(function(){ 
			var playerwidth = jQuery(this).width();	
			var newwidth = playerwidth - 145;
			jQuery(this).find('.jp-progress-container').css({ width: newwidth+'px' });
		});
		
	}
	
	
	
	/*---------------------------------------------- 
			E L E G A N T   C A R O U S E L
	------------------------------------------------*/
	if(jQuery().elegantcarousel) {
		jQuery('#carousel').elegantcarousel({
			delay:100,
			fade:200,
			slide:400,
			effect:'fade',		  			//  fade, slide			  
			orientation:'horizontal',		//	horizontal, vertical
			captionFade: 150,
			loop: true,					//	false, true
			autoplay: false,					// 	false, true
			time: 6000,
			stopAutoplay: false,
			shownavonhover: true
		});
	}
	
	
	
	/*---------------------------------------------- 
		R E S P O N S I V E   B A C K G R O U N D   
	------------------------------------------------*/
	if ( jQuery('.pagetitle-background').length > 0) {
				
		var imgwidth = jQuery('.pagetitle-background img').width();
		var imgheight = jQuery('.pagetitle-background img').height();
		var imgratio = imgwidth / imgheight;
		
		var containerwidth = jQuery('#page-title').width();
		var containerheight = jQuery('#page-title').height();
		var containerpaddingtop = parseInt(jQuery('#page-title').css('paddingTop'));
		var containerpaddingbottom = parseInt(jQuery('#page-title').css('paddingBottom'));
		var containerratio = containerwidth / (containerheight+containerpaddingtop+containerpaddingbottom);
			
		if (imgratio > containerratio) {
			jQuery('.pagetitle-background img').css({ 'height': (containerheight+containerpaddingtop+containerpaddingbottom)+'px', 'width': 'auto', 'maxWidth': 'inherit'});
			var margin =  Math.ceil(parseInt(jQuery('.pagetitle-background img').width() - jQuery('#page-title ').width()) / 2);
			jQuery('.pagetitle-background img').css({ 'marginLeft': '-'+margin+'px', 'marginTop': '0'});
		} else {
			jQuery('.pagetitle-background img').css({ 'width': '100%', 'height': 'auto', 'maxHeight': 'inherit'});
			var margin =  Math.ceil(parseInt(jQuery('.pagetitle-background img').height() - (containerheight+containerpaddingtop+containerpaddingbottom)) / 2);
			jQuery('.pagetitle-background img').css({ 'marginTop': '-'+margin+'px', 'marginLeft': '0'});
		}
		
	}

	
	
}
