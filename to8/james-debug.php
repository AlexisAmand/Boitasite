<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Le jeu James Debug pour micro-ordinateurs Thomson TO8</title>
    <meta charset="utf-8">

    <meta name="description" content="Description du jeu James Debug, édité par Coktel Vision, qui était disponible sur les ordinateurs Thomson dans les années 80">


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
                    <h1 class="text-3">Le jeu <span>James Debug</span> pour TO8</h1>
                    
                    
                </div>
            </div>

            <div style="clear:both">

            <br />
            
         

            <h2 style="margin-top:20px;margin-bottom:10px;">Le jeu</h2>
                        
            <p>Dans ce jeu d'arcade-aventure, le joueur guide un petit personnage sur un terrain vu en coup et tente de rassembler les preuves (pièces graphiques à collecter). Les déplacemements sont assez lents et le jeu ne déclenche pas une folle passion. Il faut cependant faire preuve d'astuce pour progresser régulièrement.<br />
              On ne peut que déplorer la différence entre le scénario (une grande puissance implante un centre informatique stratégique secret dans une île perdu du Pacifique. Suite à un incident majeur, un déversement massif de programmes buggés envahit les centres serveurs de la planète...) et le contenu réel du jeu.

            <br /><br />Un jeu édité par Coktel Vision.
            <br/><br />Les captures qui suivent ont été réalisées avec <a href="http://www.mess.org/" title="Le site de l'émulateur MESS">l'émulateur MESS</a>.</p>
          
            <p style="text-align:center;margin-top:25px;">
            <img src="images/tilt-37-01.jpg" width="450px" alt="Une publicité pour le jeu James Debug parue dans la revue TILT de décembre 1986">
            <br /><br />
            Une publicité parue dans la revue TILT de décembre 1986
            </p>                          

            <h2 style="margin-top:40px;margin-bottom:10px;">Ressources et documents</h2>
               
            <ul>   
			<li><a href="pdf/js-43-page-74.pdf" title="Le jeu James Debug dans le magazine Jeux & Stratégie n°43">
            Jeux et Stratégie n°43 - Février/Mars 1987 : "James Debug" (pdf)</a></li>
			</ul>
                           
            </div>    
            <div class="clear"></div>
        </div>
    </section> 
	<!--==============================footer=================================-->

	<footer>
		<div style="width:960px;margin-left:auto;margin-right:auto;font-family: Verdana, Geneva, sans-serif;">
			
	        <div style="width:50%;float:left;margin-bottom:25px;text-align:center;font-size: 0.8em;">
	        Alexis AMAND<br />Développement Web et SEO<br />---<br />06.62.63.79.21<br />alexis.amand@gmail.com<br />
			</div>
			
			<div style="width:50%;float:left;margin-bottom:25px;text-align:center;font-family: Verdana, Geneva, sans-serif;font-size: 0.8em;">
	        <span>Follow Moi:</span><br /><br />
	        <a href="https://twitter.com/alexisamand"><img src="images/icon-1.jpg" alt=""></a>
	        <a href="https://www.facebook.com/Alexis-AMAND-Webmaster-507308975998494/"><img src="images/icon-2.jpg" alt=""></a>
			</div>
			
			<div style="text-align:center;clear:both;font-size: 0.7em;">© 2016-2020 - Alexis AMAND</div>
			
		</div>
			
	</footer>
  
</body>
</html>