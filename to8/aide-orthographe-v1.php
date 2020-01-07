<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Aide à l'orthographe version 1 pour micro-ordinateurs Thomson</title>
    <meta charset="utf-8">

    <meta name="description" content="Le jeu éducatif Aide à l'orthographe version 1 pour micro-ordinateurs Thomson">


    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/slider.css">
   <link href="https://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here" rel="stylesheet">
    <script src="../js/jquery-1.7.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="../js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
	<![endif]-->

     <!-- zoom avec Jquery -->

    <script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" href="../fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    

	
    <script type="text/javascript">
    
    $(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});
	
	$(document).ready(function() {
  $('.accordeon').hide(); // on cache tous les textes (blocs ayant la classe accordeon)
  $('h4').click(function() { // si on clique sur un titre (ici tous les &eacute;l&eacute;ments contenu en les balises h4)
    $(this).next('div:hidden').slideDown() // on deroule le div cach&eacute; qui suit directement le titre
    .siblings('div:visible').slideUp(); // et on cache les div similaires qui etait visible
  });
});

	
});
</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.www.boitasite.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//genealexis.fr/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '14']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//genealexis.fr/piwik/piwik.php?idsite=14" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->



</head>



<body>
   <header> 
       <div> 
          <div>                 	
              <h3><a href="../index.php"><img src="../images/logo.png" alt=""></a></h3>
              <nav>  
                <ul class="menu">
                      <li><a href="../index.php">Accueil</a></li>
                      <li><a href="../webmaster.php">Création de sites</a></li>
                      <li><a href="../cours.php">Cours à domicile</a></li>
                      <li><a href="../tutoriels.php">Tutoriels</a></li>
                      <li class="current"><a href="../to8.php">T08</a></li>
                      <li><a href="../contacts.php">Contacts</a></li>
                  </ul>
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>  
  <!--==============================content================================-->
    <section id="content"></div>
    	<div class="container_12">

            <div class="grid_12 box-2">
            	<div>
                    <h1 class="text-3">Aide à l'orthographe v1 <span>pour</span> TO8</h1>
                    
                    
                </div>
            </div>

            <div style="clear:both">

            <br />
            
         

            <h2 style="margin-top:20px;margin-bottom:10px;">Le jeu</h2>



            <p>Invasion des fautes: identifier rapidement les fautes et éviter de les refaires.<br />
            Atelier des phrases: Combiner des mots et des expressions pour former des phrases et des textes.
            <br /><br />Le jeu était édité par Cédic Nathan.
            <br/><br />Les captures qui suivent ont été réalisées avec <a href="http://www.mess.org/">l'émulateur MESS</a>.</p>



        

                <br />

    


    
                   
            </div>    
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <footer>
      
      <div style="width:960px;margin-left:auto;margin-right:auto;">

          <p>© 2016-2018 Alexis AMAND</p>
          <div class="soc-icons"><span>Follow Moi:</span><a href="https://twitter.com/alexisamand"><img src="../images/icon-1.jpg" alt=""></a><a href="https://www.facebook.com/Alexis-AMAND-Webmaster-507308975998494/?ref=settings"><img src="../images/icon-2.jpg" alt=""></a><a href="https://plus.google.com/117361709952417935347"><img src="../images/icon-3.jpg" alt=""></a></div>

       </div>
       
  </footer>	

</body>
</html>