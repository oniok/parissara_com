<?php /*%%SmartyHeaderCode:2408057e8dd4805e3f5-70807787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32641cec652b1d540e8a4444c07bb729d9593411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\parissara_com\\modules\\appagebuilder\\views\\templates\\hook\\appagebuilder.tpl',
      1 => 1474858294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2408057e8dd4805e3f5-70807787',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e8ec166aa411_24191115',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e8ec166aa411_24191115')) {function content_57e8ec166aa411_24191115($_smarty_tpl) {?><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    <div        class="row ApRow "
	                        style=""        >
        
                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "
		    >
                <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<div id="slideshow-form_6227209338868362" class="ApSlideShow">
			<div class="bannercontainer banner-fullwidth" style="padding: 0px;margin: 0px;">
	<div class="iview iview-group-1">
					
									
					<!-- SLIDE IMAGE BEGIN -->
					<div class="slide_config "
						 data-leo_image="/parissara_com/themes/leo_mode/img/modules/leoslideshow/home_12.jpg"												
						
						data-leo_pausetime="0"
						data-leo_thumbnail="/parissara_com/themes/leo_mode/img/modules/leoslideshow/home_12.jpg"
						data-leo_background="image"
						
												
						
						>
						
						
																					
								<div class="tp-caption  very_large_text cus_black" 
									 data-x="651"
									 data-y="304"
									 data-transition="fade"
									 									 									 >
									
									<!-- LAYER TEXT BEGIN -->
										Coming  soon
									<!-- LAYER TEXT END -->


									<!-- LAYER IMAGE END -->


									<!-- LAYER VIDEO END -->
									
									
								</div>
																			
				</div><!-- SLIDE IMAGE END -->
				
						</div>
</div>



<script type="text/javascript">
$( document ).ready(function() {

	jQuery(".iview-group-1").iView({
		// COMMON
		pauseTime:9000, // delay
		startSlide:0,
		autoAdvance: 0,	// enable timer thá»�i gian auto next slide
		pauseOnHover: 1,
		randomStart: 0, // Ramdom slide when start

		// TIMER
		timer: "360Bar",
		timerPosition: "top-right", // Top-right, top left ....
		timerX: 10,
		timerY: 10,
		timerOpacity: 0.5,
		timerBg: "#000",
		timerColor: "#EEE",
		timerDiameter: 30,
		timerPadding: 4,
		timerStroke: 3,
		timerBarStroke: 1,
		timerBarStrokeColor: "#EEE",
		timerBarStrokeStyle: "solid",
		playLabel: "Play",
		pauseLabel: "Pause",
		closeLabel: "Close", // Muli language

		// NAVIGATOR controlNav
		controlNav: 1, // true : enable navigate - default:'false'
		keyboardNav: 1, // true : enable keybroad
		controlNavThumbs: 0, // true show thumbnail, false show number ( bullet )
		controlNavTooltip: 0, // true : hover to bullet show thumnail
		tooltipX: 5,
		tooltipY: -5,
		controlNavHoverOpacity: 0.6, // opacity navigator

		// DIRECTION
		controlNavNextPrev: false, // false dont show direction at navigator
		directionNav: 1, // true  show direction at image ( in this case : enable direction )
		directionNavHoverOpacity: 0.6, // direction opacity at image
		nextLabel: "Next",				// Muli language
		previousLabel: "Previous", // Muli language

		// ANIMATION 
		fx: 'random', // Animation
		animationSpeed: 500, // time to change slide
//		strips: 20,
		strips: 1, // set value is 1 -> fix animation full background
		blockCols: 10, // number of columns
		blockRows: 5, // number of rows

		captionSpeed: 500, // speed to show caption
		captionOpacity: 1, // caption opacity
		captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
		customWidth: 1170,
		customHtmlBullet: false,
		rtl: false,
		height:640,
		timer_show : 2,

		//onBeforeChange: function(){}, // Triggers before a slide transition
		//onAfterChange: function(){}, // Triggers after a slide transition
		//onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		//onLastSlide: function(){}, // Triggers when last slide is shown
		//onPause: function(){}, // Triggers when slider has paused
		//onPlay: function(){} // Triggers when slider has played

		onAfterLoad: function() 
		{
			// THUMBNAIL
						
			// BULLET
						
			// Display timer
								$('.iview-group-1 .iview-timer').hide();
					},

	});
});

$( document ).ready(function(){
	$(".img_disable_drag").bind('dragstart', function() {
		return false;
	});
});

// Fix : Slide link, image cant swipe
$( document ).ready(function(){
	// step 1
	var link_event = 'click';

	// step 3
	$(".iview-group-1 .slide_config").on("click",function(){
		
		if(link_event !== 'click'){
			link_event = 'click';
			return;
		}

		if($(this).data('link') != undefined && $(this).data('link') != '') {
			window.open($(this).data('link'),$(this).data('target'));
		}
		
	});

	// step 2
	$(".iview-group-1 .slide_config").on('swipe',function(){
		link_event = 'swiped';	// do not click event
	});
});
				 
</script>

	</div>

    </div>
            </div>
<?php }} ?>
