<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/')}}/logo/favicon.png">

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700,800,900|Poppins:400%2C300%2C600%2C500" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/style.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/front-end/')}}/include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('public/front-end/')}}/include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/front-end/')}}/include/rs-plugin/css/navigation.css">

	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/custom.css" type="text/css" />
	<link rel="stylesheet" href="{{ asset('public/front-end/')}}/css/responsiveness.css" type="text/css" />
	<script src="{{ asset('public/front-end/')}}/typed-js/lib/typed.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/typed-js/typed.js"></script>

	<!-- Document Title
	============================================= -->
	<title>XCELL</title>
    @stack('meta_tags')

	<style>

		

		#rev_slider_17_1_wrapper .tp-loader.spinner3 { background-color: #333333 !important; }
		.blurslider-gradient { background:-webkit-linear-gradient(left,#AA0C0D 0%,#AA0C0D 40%,#ffffff 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent; }
		.blurslider-line{background:-webkit-linear-gradient(left,#AA0C0D 0%,#AA0C0D 40%,#ffffff 100%) !important; }
		#rev_slider_17_1 .uranus.tparrows { width:50px; height:50px; background:rgba(255,255,255,0); }
		#rev_slider_17_1 .uranus.tparrows:before { width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s; }
		#rev_slider_17_1 .uranus.tparrows:hover:before { opacity:0.75; }


	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{URL::to('/') }}" class="standard-logo" data-dark-logo="{{ asset('public/')}}/logo/logo-dark.png"><img src="{{ asset('public/')}}/logo/logo-dark.png" alt="Canvas Logo"></a>
						<a href="{{URL::to('/') }}" class="retina-logo" data-dark-logo="{{ asset('public/')}}/logo/stiky-logo.png"><img src="{{ asset('public/')}}/logo/stiky-logo.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul  class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="{{URL::to('/')}}"><div>Home</div></a>
								
							</li>
                            <li><a href="{{URL::to('/')}}#about" ><div>About us</div></a>
								
                                </li>
                            <li><a href="{{URL::to('/')}}#plan"><div> Packages</div></a>
								
                                </li>
                            <li><a href="{{URL::to('/')}}#blogs"><div> Blog</div></a>
								
                                </li>
                              
                                <li><a href="{{URL::to('/')}}#footer" ><div> Contact Us</div></a>
								
                                </li>
						</ul>
                       
					

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->


        @yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						<div class="widget clearfix">

						<div class="heading-block topmargin text-white">
							<h2 class="text-white">{{$contact->title}}</h2>
							<span class="text-white">{{$contact->description}}</span>
							<a href="#" class="button button-border button-rounded button-large noleftmargin topmargin-sm">
							<i class="icon-call"></i>
						{{$contact->phone}}</a>
						</div>


						

						</div>

					</div>

					<div class="col_one_third">

						<div class="widget clearfix">


						<ul class="iconlist nobottommargin">
								<li><i class="icon-location"></i>{{$contact->address}}</li>
								<li><i class="icon-mobile-alt"></i> <strong>{{$contact->phone}}</strong></li>
								<li><i class="icon-time"></i> {{$contact->time_one}}</li>
								<li> {{$contact->time_two}}</li>
								<li> {{$contact->time_three}}</li>
								<li><i class="icon-email3"></i>{{$contact->email}}</li>
							</ul>
							
						</div>

					</div>

				
					<div class="col_one_third col_last">

						<div class="widget quick-contact-widget form-widget clearfix">

						<div style="width: 100%; height: 400px;">
						<iframe src="{{$contact->google_map_address}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>


						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			

		</footer><!-- #footer end -->
		<!-- Footer
		============================================= -->
		

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('public/front-end/')}}/js/jquery.js"></script>
	<script src="{{ asset('public/front-end/')}}/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('public/front-end/')}}/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="{{ asset('public/front-end/')}}/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<!-- ADD-ONS JS FILES -->

	<script>
		var tpj=jQuery;

		var revapi17;
		tpj(document).ready(function() {
			if(tpj("#rev_slider_17_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_17_1");
			}else{
				revapi17 = tpj("#rev_slider_17_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "vertical",
						mouseScrollNavigation:"off",
						 mouseScrollReverse:"default",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:false,
							hide_over:479,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:0,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:0,
								v_offset:0
							}
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					scrolleffect: {
						blur:"on",
						maxblur:"20",
						on_slidebg:"on",
						direction:"top",
						multiplicator:"2",
						multiplicator_layers:"2",
						tilt:"10",
						disable_on_mobile:"off",
					},
					parallax: {
						type:"scroll",
						origo:"slidercenter",
						speed:400,
						levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
					},
					shadow:0,
					spinner:"spinner3",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}
		});	/*ready*/
	</script>

</body>
</html>

	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCzkxzbEni5vR_Ugt1De8gBzrLX3236bnA"></script>
	<script src="{{ asset('public/front-end/')}}/js/jquery.gmap.js"></script>

	<script>

		jQuery('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>