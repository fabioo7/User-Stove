<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Rio Experiência – Um jeito original de conhecer o Rio</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Fabio Rangel e Luiz Guilherme Paulino">
<meta name="generator" content="Bootstrap" /> 
<meta name="robots" content="index,follow">
<meta name="rating" content="general" />

@foreach ($post as $p)
<meta name="keywords" content="turismo cultural, tour cultural rio de janeiro, turismo de experiência, walking tour rio de janeiro, tour copacabana, tour urca, tour jardim botânico, tour centro rio de janeiro, rio experiência, experiência no rio de janeiro, cinema carioca, jardim botânico, urca, copacabana"/>


<meta property="og:image" content="https://admintravel.ml/public/img/fotos/fotos_blog/{{$p->video}}" />
<meta property="og:site_name" content="Rio Experiência" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$p->titulo}}" />
<meta property="og:description" content="{!!$p->texto!!}" />
<meta property="og:url" content="{{ url(Request::url()) }}" />



<!-- / Yoast SEO plugin. -->
<meta property="article:publisher" content="https://www.instagram.com/rioxpoficial" />
<meta name = "twitter:title" content = "O Rio de Janeiro através das melhores experiências culturais" />
<meta name = "twitter:card" content = "summary" />
<meta name = "twitter:description" content = "{{$p->texto}}" />
<meta name = "twitter:site" content = "https://www.rioexperiencia.com.br" />
<meta name = "twitter:creator" content = "@acessy" />
<meta name = "twitter:image" content = "https://www.rioexperiencia.com.br/public/img/4x4-3.jpg" />
@endforeach


<link rel="canonical" href="{{ url(Request::url()) }}" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"href="img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"rel="stylesheet">




    <!-- BASE CSS -->
    <link href="https://www.rioexperiencia.com.br/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.rioexperiencia.com.br/public/css/style2.css" rel="stylesheet">
    <link href="https://www.rioexperiencia.com.br/public/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="https://www.rioexperiencia.com.br/public/css/custom.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="https://www.rioexperiencia.com.br/public/js/modernizr.js"></script>

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Feed para  &raquo;" href="https://www.rioexperiencia.com.br/feed/" />
<link rel="alternate" type="application/rss+xml" title="Feed de comentários para  &raquo;" href="https://www.rioexperiencia.com.br/comments/feed/" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

    
      <link rel="shortcut icon" href="https://www.rioexperiencia.com.br/public/img/fav.png" type="image/x-icon">
      <link type="image/x-icon" rel="shortcut icon" href="https://www.rioexperiencia.com.br/public/img/fav.png"/>
      <link rel="icon" sizes="32x32" href="https://www.rioexperiencia.com.br/public/img/favicon-32x32.png"/>
      <link rel="icon" sizes="192x192" href="https://www.rioexperiencia.com.br/public/img/favicon-192x192.png"/>
      <link rel="apple-touch-icon" href="https://www.rioexperiencia.com.br/public/img/favicon-32x32.png"/>
      <link rel="apple-touch-icon" sizes="76x76" href="https://www.rioexperiencia.com.br/public/img/favicon-76x76.png"/>
      <link rel="apple-touch-icon" sizes="120x120" href="https://www.rioexperiencia.com.br/public/img/favicon-120x120.png"/>
      <link rel="apple-touch-icon" sizes="152x152" href="https://www.rioexperiencia.com.br/public/img/favicon-152x152.png"/>
      <link rel="apple-touch-icon" sizes="180x180" href="https://www.rioexperiencia.com.br/public/img/favicon-180x180.png"/>
      


      <link rel="stylesheet" type="text/css" href="revolution-slider/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="revolution-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution-slider/css/navigation.css">



    <script src="https://kit.fontawesome.com/0ade474693.js" crossorigin="anonymous"></script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://google.com/article"
      },
      "headline": "Article headline",
      "image": [
        "https://www.rioexperiencia.com.br/public/img/4x4-3.jpg"
       ],
      "datePublished": "2015-02-05T08:00:00+08:00",
      "dateModified": "2015-02-05T09:20:00+08:00",
      "author": {
        "@type": "Person",
        "name": "Rio Experience"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Rio Experience",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.rioexperiencia.com.br/public/img/4x4-3.jpg"
        }
      }
    }
    </script>


    <script type="application/ld+json">
{
  "@context" : "https://schema.org",
  "@type" : "Organization",
  "name" : "Example",
 "url" : "https://www.rioexperiencia.com.br",
 "sameAs" : [
   "https://twitter.com/triplemglobal",
   "https://www.facebook.com/globaltriplem",
   "https://www.linkedin.com/in/triplemglobal/",
   "https://www.instagram.com/rioxpoficial/"
   ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Rio de Janeiro",
    "addressRegion": "CA",
    "postalCode": "94040",
    "addressCountry": "BR"
  }
}
</script>





    <!--Google Search console-->
    <meta name="google-site-verification" content="3aYvpLh9G4U0fQvGmDveAJsl-s-vCX5Ny6YXO1HEKH8" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1NPVJVN7G5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1NPVJVN7G5');
</script>

<!-- Favicons-->
  
  



<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '815638759027279');
  fbq('track', 'PageView');
  fbq('track', 'ViewContent');
    
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=815638759027279&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

<!---Alert cookies--->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

</head>



<body>



<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
		<div id="logo">
			<a href="index.html">
				<img src="https://www.rioexperiencia.com.br/public/img/logo2.png" width="150" alt="" class="logo_normal">
				<img src="https://www.rioexperiencia.com.br/public/img/logo2.png" width="150"  alt="" class="logo_sticky">
			</a>
		</div>
		
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
      <li><span><a href="https://www.rioexperiencia.com.br/teste">HOME</a></span></li>
			<li><span><a href="https://www.rioexperiencia.com.br/quem-somos">QUEM SOMOS</a></span></li>
			<li><span><a href="https://www.rioexperiencia.com.br/midia">MÍDIA</a></span></li>
			<li><span><a href="https://www.rioexperiencia.com.br/dicas-de-leitura">DICAS DE LEITURA</a></span></li>
      <li><span><a href="https://www.rioexperiencia.com.br/contato">CONTATO</a></span></li>

			</ul>
		</nav>
	</header>


<!------------------------------------------------------------------------->
        @yield('conteudo')
<!------------------------------------------------------------------------->



        <style>
            .whatsapp {
                position: fixed;
                top: 85%;
                right: 1%;
                padding: 10px;
                width: 80px;
                z-index: -1;
            }
            </style>
            <div >
                <a href="https://api.whatsapp.com/send?phone=5521971260904" 
                   target="_blank">
                   <img alt="zap" class="whatsapp" src="https://images.tcdn.com.br/static_inst/integracao/imagens/whatsapp.png" />
                </a>
            </div>

        <footer>            
        <div class="contact_info">
				<ul class="clearfix" style="text-align: center;">
					<li >
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email</h4>
						<span><a style="color: white;" href="mailto:contato@rioexperiencia.com.br">contato@rioexperiencia.com.br</a></span>
					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>WhatsApp</h4>
						<span>(55 21) 97126-0904</span>
					</li>	
					<li>
						<i class="pe-7s-check"></i>
						<h4>Nossas Redes</h4>
            <a href="https://www.youtube.com/channel/UCJVoAbzE6a2ynpEVE5FfRew">
						<img  src="https://www.rioexperiencia.com.br/public/img/youtube.png" width="35" height="35" alt="">
            </a>

            <a href="https://www.instagram.com/rioexperiencia/">
				    <img  src="https://www.rioexperiencia.com.br/public/img/insta.png" width="35" height="35" alt="">
              </a>
            
            <a href="https://web.facebook.com/rioexperiencia.oficial">
            <img  src="https://www.rioexperiencia.com.br/public/img/face.png" width="35" height="35" alt="">
            </a>
            
            
        
		    	</span>
					</li>
			  	</ul>
			
		</div>



    
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <ul id=""> 
                            <li><a href="https://www.rioexperiencia.com.br/politica-de-privacidade">Política de privacidade</a> | <span>© 2021 Rio Experiencia</span></li>
                            
                        </ul>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--/footer-->
   




        
<div class="alert text-center cookiealert" role="alert">
    <b>Usamos cookies para garantir que você obtenha a melhor experiência em nosso site. Saiba mais em nossa <a href="https://www.rioexperiencia.com.br/politica-de-privacidade" target="_blank">Política de Privacidade</a>

    <button type="button" class="btn btn-primary btn-sm acceptcookies" style="background-color: #e96b00; border-color: #e96b00;">
        Aceito
    </button>
</div>

<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<script>
  window.addEventListener("cookieAlertAccept", function() {
    alert("cookies accepted")
})
</script>



  




	<!-- SPECIFIC SCRIPTS -->
	<script src="https://www.rioexperiencia.com.br/public/js/jarallax.min.js"></script>
	<script src="https://www.rioexperiencia.com.br/public/js/jarallax-video.min.js"></script>
	
	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  minDate:new Date(),
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
	
	<!-- INPUT QUANTITY  -->
	<script src="js/input_qty.js"></script>


    <!-- /Sign In Popup

    <div id="toTop"></div>   
     -->

    <!-- COMMON SCRIPTS -->
    <script src="https://www.rioexperiencia.com.br/public/js/common_scripts.js"></script>
    <script src="https://www.rioexperiencia.com.br/public/js/main.js"></script>
    <script src="https://www.rioexperiencia.com.br/public/assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="https://www.rioexperiencia.com.br/public/js/video_header.js"></script>
    <script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
    </script>


    <script defer src="https://www.rioexperiencia.com.br/public/js/jquery.flexslider.js"></script>
    <script>
    $(window).on('load', function() {
        'use strict';
        $('#carousel_slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 280,
            itemMargin: 25,
           
        });
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel_slider",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
    </script>
</body>

</html>