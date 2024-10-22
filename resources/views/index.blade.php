<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Designs Ninja">
  <meta name="description" content="Creative portfolio template. Fully responsive in all devices">
  <meta name="keywords"
    content="agency, bootstrap, business, company, corporate, creative, onepage, clean, modern, multipurpose, personal, portfolio, responsive, professional, minimal">
  <title>Laravel Crud Operation</title>
  {{-- <link rel="shortcut icon" href="{{asset('/home/assets/images/favicon.ico')}}"> --}}

  <!-- Core Style Sheets -->
  <link rel="stylesheet" href="{{asset('/home/assets/css/master.css')}}">
  <!-- Responsive Style Sheets -->
  <link rel="stylesheet" href="{{asset('/home/assets/css/responsive.css')}}">
  <!-- Revolution Style Sheets -->
  <link rel="stylesheet" type="text/css" href="{{asset('/home/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/home/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/home/revolution/css/navigation.css')}}">

</head>

<body>

  <!--== Loader Start ==-->
   <div id="loader-overlay">
    <div class="loader">
      <div class="spinner-double-dot-in"></div>
    </div>
  </div> 
  <!--== Loader End ==-->

  <!--== Wrapper Start ==-->
  <div class="wrapper">

    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border studio">
      <div class="container">
        <!--== Start Atribute Navigation ==-->
        <div class="attr-nav hidden-xs sm-display-none">
          <ul>
            <li class="side-menu"><a href="{{asset('/home/assets/index4.html#')}}"><i class="icofont icofont-navigation-menu"></i></a></li>
          </ul>
        </div>
        <!--== End Atribute Navigation ==-->

        <!--== Start Header Navigation ==-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
              class="tr-icon ion-android-menu"></i> </button>
          {{-- <div class="logo"> <a href="{{asset('/home/assets/index.html')}}"><img class="logo logo-display" src="{{asset('home/assets/images/logo-white.png')}}" --}}
                {{-- alt=""> <img class="logo logo-scrolled" src="{{asset('home/assets/images/logo-black.png')}}" alt=""> </a> </div> --}}
        </div>
        <!--== End Header Navigation ==-->

        <!--== Collect the nav links, forms, and other content for toggling ==-->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-center" data-in="fadeIn" data-out="fadeOut">
            <li><a class="page-scroll" href="index4.html#home">Home</a></li>
            <li><a class="page-scroll" href="index4.html#feature">Features</a></li>
            <li><a class="page-scroll" href="index4.html#about">About</a></li>
            <li><a class="page-scroll" href="index4.html#team">Team</a></li>
            <li><a class="page-scroll" href="index4.html#work">Work</a></li>
            <li><a class="page-scroll" href="index4.html#pricing">Pricing</a></li>
            <li><a class="page-scroll" href="index4.html#blog">Blog</a></li>
            <li><a class="page-scroll" href="index4.html#contact">Contact</a></li>
          </ul>
        </div>
        <!--== /.navbar-collapse ==-->
      </div>

      <!-- Start Side Menu -->
      <div class="side dark-bg">
        <a href="index.html" class="logo-side"><img src="{{asset('/home/assets/images/logo-white.png')}}" alt="side-logo" /></a>
        <a href="index4.html#" class="close-side"><i class="icofont icofont-close"></i></a>
        <div class="widget mt-120">
          <ul class="link">
            <li class="link-item"><a class="page-scroll" href="index4.html#home">Home</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#feature">Features</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#about">About</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#team">Team</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#work">Work</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#pricing">Pricing</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#blog">Blog</a></li>
            <li class="link-item"><a class="page-scroll" href="index4.html#contact">Contact</a></li>
          </ul>
        </div>
        <ul class="social-media">
          <li><a href="{{asset('/home/index4.html#')}}" class="icofont icofont-facebook"></a></li>
          <li><a href="{{asset('/home/index4.html#')}}" class="icofont icofont-twitter"></a></li>
          <li><a href="{{asset('/home/index4.html#')}}" class="icofont icofont-behance"></a></li>
          <li><a href="{{asset('/home/index4.html#')}}" class="icofont icofont-social-dribble"></a></li>
          <li><a href="{{asset('/home/index4.html#')}}" class="icofont icofont-linkedin"></a></li>
        </ul>
      </div>
      <!-- End Side Menu -->

    </nav>
    <!--== Header End ==-->

    <!--== Hero Slider Start ==-->
    <div class="remove-padding transition-none" id="home">
      <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="particle-effect-two5"
        data-source="gallery" style="background:#7b8f9a;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_6_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul> <!-- SLIDE  -->
            <li data-index="rs-14" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut"
              data-masterspeed="3000" data-thumb="{{asset('/home/assets/images/slides/home-bg-4-100x50.jpg')}}" data-rotate="0"
              data-saveperformance="off" data-title="Example One" data-param1="" data-param2="" data-param3=""
              data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
              data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{asset('/home/assets/images/slides/home-bg-4.jpg')}}" alt="" data-bgposition="center-top"  data-kenburns="on"
                data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130"
                data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0"
                data-offsetend="0 500" data-bgparallax="4" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper " id="slide-14-layer-12"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                data-blendmode="screen" style="z-index: 5;background-color:rgba(0,38,59,1);"> </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption   tp-resizeme" id="slide-14-layer-6" data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                data-voffset="['-70','-90','-100','-100']" data-fontsize="['60','60','40','40']"
                data-lineheight="['80','80','60','60']" data-width="none" data-height="none" data-whitespace="nowrap"
                data-type="text" data-responsive_offset="on" data-wrapper_class="tp-nopointer"
                data-frames='[{"delay":500,"split":"chars","splitdelay":0.02,"speed":500,"frame":"0","from":"x:-100px;sX:1;sY:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                data-blendmode="overlay"
                style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 800; color: rgba(255,255,255,1);font-family: 'Raleway', sans-serif;letter-spacing:15px;text-transform:uppercase;">
                A Laravel Crud <br/>Practices</div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme" id="slide-14-layer-8" data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                data-voffset="['80','60','30','30']" data-width="['none','none','361','330']" data-height="none"
                data-whitespace="['nowrap','nowrap','normal','normal']" data-type="text" data-responsive_offset="on"
                data-wrapper_class="tp-nopointer"
                data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:20px;sX:1;sY:1;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                data-blendmode="overlay"
                style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 800; color: rgba(255,255,255,1);font-family:Poppins;letter-spacing:10px;text-transform:uppercase;font-family: 'Raleway', sans-serif;">
                with Email verification</div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption rev-btn  tp-resizeme" id="slide-14-layer-10"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['160','140','120','110']"
                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"300","ease":"Linear.easeNone"}]'
                data-responsive_offset="on"
                data-frames='[{"delay":1600,"speed":1000,"frame":"0","from":"y:20px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(255,255,255,1);bg:rgba(0,0,0,1);bc:transparent;"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[50,50,50,50]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"
                data-blendmode="overlay"
                style="z-index: 8; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(0,0,0,1);font-family: 'Raleway', sans-serif;background-color:rgba(255,255,255,1);border-radius:4px 4px 4px 4px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <a href="{{route('register')}}">  Get Started! <i class="icofont icofont-arrow-down"></i></a>  </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTxION SLIDER -->
    </div>
    <!--== Hero Slider End ==-->

    


    <!--== Go to Top  ==-->
    <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
    <!--== Go to Top End ==-->

  </div>
  <!--== Wrapper End ==-->

  <!--== Javascript Plugins ==-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
  <script src="{{asset('/home/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('/home/assets/js/smoothscroll.js')}}"></script>
  <script src="{{asset('/home/assets/js/plugins.js')}}"></script>
  <script src="{{asset('/home/assets/js/master.js')}}"></script>

  <!-- Paricle Add-On Files -->
  <link rel='stylesheet' href="{{asset('/home/revolution/css/revolution.addon.particles.css@ver=1.0.3.css')}}" />
  <script src="{{asset('/home/revolution/js/revolution.addon.particles.min.js@ver=1.0.3')}}"></script>

  <script>

    var tpj = jQuery;
    var revapi6;
    tpj(document).ready(function () {
      if (tpj("#rev_slider_6_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_6_1");
      } else {
        revapi6 = tpj("#rev_slider_6_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: 'home/revolution/js/',
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          particles: {
            startSlide: "first", endSlide: "last", zIndex: "1",
            particles: {
              number: { value: 100 }, color: { value: "#ffffff" },
              shape: {
                type: "triangle", stroke: { width: 0, color: "#ffffff", opacity: 1 },
                image: { src: "" }
              },
              opacity: { value: 0.3, random: true, min: 0.1, anim: { enable: false, speed: 1, opacity_min: 0, sync: false } },
              size: { value: 10, random: true, min: 0.5, anim: { enable: false, speed: 40, size_min: 1, sync: false } },
              line_linked: { enable: false, distance: 200, color: "#000000", opacity: 0.2, width: 1 },
              move: { enable: true, speed: 1, direction: "top", random: true, min_speed: 3, straight: false, out_mode: "out" }
            },
            interactivity: {
              events: { onhover: { enable: true, mode: "bubble" }, onclick: { enable: true, mode: "repulse" } },
              modes: { grab: { distance: 400, line_linked: { opacity: 0.5 } }, bubble: { distance: 400, size: 0, opacity: 0.05 }, repulse: { distance: 500 } }
            }
          },
          navigation: {
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 960, 720],
          lazyType: "none",
          parallax: {
            type: "scroll",
            origo: "slidercenter",
            speed: 400,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 0, 55],
          },
          shadow: 0,
          spinner: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "60px",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
      }

      RsParticlesAddOn(revapi6);
    });	/*ready*/
  </script>

  <!-- Revolution js Files -->
  <script src="{{asset('/home/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.actions.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.carousel.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.kenburn.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.migration.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.navigation.min.jsx')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.parallax.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.slideanims.min.js')}}"></script>
  <script src="{{asset('/home/revolution/js/revolution.extension.video.min.js')}}"></script>
  <!--== Javascript Plugins End ==-->

</body>

</html>