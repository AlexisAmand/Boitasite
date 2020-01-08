<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Manuel du jeu "Saphir" pour ordinateurs Thomson</title>
    <meta charset="utf-8">

    <meta name="description" content=" ">


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
    <section id="content">
    	<div class="container_12">

            <div class="grid_12 box-2">
                <img src="images/logo-to8.jpg" style="width:100%;">
            	<div>
                    <h1 class="text-3">Jeux et utili<span>tai</span>res</h1>
                    
                    
                </div>
            </div>

            <div style="clear:both">

                <br />
                
            <p>&nbsp;</p>

            <br /><p>A</p>

            <ul>    
                <li>Alerte au Tabac</li>
                <li>Les athlétes</li>
                <li><a href="androides.php">Androïdes</a></li>
                <li>Aquanaute</li>
                <li><a href="pdf/js-46-page-89.pdf">Arkanoïd</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li>Animatix</li>
                <li><a href="aide-orthographe-v1.php">Aide à l'Orthographe V1</a></li>
                <li><a href="aide-orthographe-v2.php">Aide à l'Orthographe V2</a></li>
                <li><a href="aide-lecture-v1.php">Aide à la Lecture V1</a></li>
                <li>Aide à la Lecture V2</li>
                <li>Air Attack</li>
            </ul>    

            <br /><p>B</p>

            <ul>    
            <li><a href="pdf/js-43-page-64.pdf">La Bataille des Brevets</a> (Jeux et Stratégie n°43 février mars 1987)</li>
            <li><a href="pdf/js-46-page-81.pdf">Bivouac</a> (Jeux et Stratégie n°46 aout septembre 1987)
            <li>Blue War II</li>
            <li>Blitz !</li>
            </ul>    

            <br /><p>C</p>

            <UL>
                <li>Crazzy Cars</li>
                <li><a href="cap-dakar.php">Cap sur Dakar</a></li>
                <li>Caractor II</li>
                <li><a href="choplifter.php">Choplifter</a></li>
                <li>Les Contes de Monte-Crypto</li>
                <li>Le Crépuscule du Naja</li>
                <li><a href="carte-europe.php">Carte d'Europe</a></li>
                <li>Chateau de la Mort</li>
                
            </ul>

            <br /><p>D</p>

            <ul>
                <li><a href="dakar.php">Dakar 4x4</a></li>
                <li><a href="manuel-dieux.php">Les Dieux de la Glisse - Savoie 92 -</a></li>
                <li><a href="pdf/js-46-page-88.pdf">Don Camillo</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li><a href="pdf/js-43-page-68.pdf">Dossier Boerhaave</a> (Jeux et Stratégie n°43 février mars 1987)</li>
            </ul>    

            <br /><p>E</p>

            <ul>
                 <li><a href="entropie.php">Entropie</a></li>
            </ul>         

            <br /><p>F</p>

            <ul>
                <li>FBI</li>
                <li>Feu vert</li>
                <li>Flipper</li>
                <li>Formule 1</li>
            </ul>    

            <br /><p>G</p>

            <ul>
                 <li>Game Over</li>
                 <li><a href="grand-prix.php">Grand Prix 500cc</a></li>
                 <li>Green Beret</li>
                 <li>Gulpy la Chenille Gourmande</li>
            </ul>

            <br /><p>J</p>

            <ul>
                <li><a href="james-debug.php">James Debug</a></li>
                    
                <li>Jeux de Dames Américaines (Draught)</li>
            </ul>    

            <br /><p>K</p>

            <ul>
                <li><a href="karate.php">Karate</a></li>    
            </ul> 

            <br /><p>L</p>

            <ul>
                <li>La Ronde de l'eau</li>
            </ul>    

            <br /><p>M</p>

            <ul>    
                <li><a href="thaar.php">Malediction de Thaar (La)</a></li>
                <li><a href="pdf/js-46-page-85.pdf">Marche à l'ombre</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li>Le Minautore</li>
                <li>Minautore</li>
                <li><a href="pdf/js-46-page-87.pdf">Missions en rafale</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li><a href="pdf/js-43-page-72.pdf">Monopoly</a> (Jeux et Stratégie n°43 février mars 1987)</li>
                <li>Monté-crypto</li>
               
            </ul>

            <br /><p>N</p>
            <ul>
                <li>La Nuit des Templiers</li>
                <li>Numéro 10</li>
            </ul>     

            <br /><p>P</p>

            <ul>
            	
            	 <li><a href="pdf/js-42-page-75.pdf" title="Le jeu Les Passagers du vent dans le magazine Jeux & Stratégie n°42">
                 Passagers du vent (Les)</a> (Jeux et Stratégie n°42 - Décembre 1986/Janvier 1987)</li>
                 <li><a href="pdf/js-46-page-84.pdf">Passagers du vent 2 (Les)</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                 <li>Pictor</li>
                 <li>Pilote</li>
                 <li>Pingo</li>
                 <li><a href="pdf/js-45-page-65.pdf" title="Le jeu Prohibition dans le magazine Jeux & Stratégie n°45">
                 Prohibition</a> (Jeux et Stratégie n°45 - Juin/Juillet 1987)</li>
                 <li>Pulsar II</li>
               
               
            </ul>         

            <br /><P>R</p>

            <ul>
                <li>Raid sur Tenere</li>
                <li><a href="pdf/js-46-page-85.pdf">Réussites</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li><a href="pdf/js-46-page-88.pdf">Robinson Crusoé</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
                <li>Rodeo</li>
                <li>Runway</li>
                <li>Runway II</li>
            </ul>

            <br /><p>S</p>

            <ul>
                <li><a href="manuel-saphir.php">Saphir</a></li>
                <li><a href="pdf/js-42-page-63.pdf">Sapiens</a> (Jeux et Stratégie n°42 - Décembre 1986/Janvier 1987)</li>
                <li>Stone Zone</li>
                <li>Super Tennis</li>
                <li>Sorcery</li>
                <li>San Pablo</li>
                <li><a href="sortileges.php">Sortiléges</a></li>
                <li><a href="">Silent Service</a></li> 
                <li>Solfège</li>
                <li>Slap Fight</li>
                <li><a href="speedway.php">Speedway</a></li>
            </ul>  

            <br /><p>T</p>

            <ul>
            	<li><a href="pdf/js-42-page-62.pdf">Temple de Quauhli (Le)</a> (Jeux et Stratégie n°42 - Décembre 1986/Janvier 1987)</li>   
                <li>Templiers</li>
                <li>Tridi 444</li>
                <li><a href="pdf/js-46-page-89.pdf">TNT</a> (Jeux et Stratégie n°46 aout/septembre 1987)</li>
            </ul>

            <br /><p>V</p>

            <ul>
                <li><a href="vegas.php">Las Vegas</a></li>
                <li>Volsolo</li>
            </ul>    

            <br /><p>Y</p>

            <ul>
                <li>Yahtzee</li>
                <li>Yeti</li>
            </ul>


          

    
                   
               
            <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
    <footer>
      
      <div style="width:960px;margin-left:auto;margin-right:auto;">

          <p>© 2016 Alexis AMAND</p>
          <div class="soc-icons"><span>Follow Us:</span><a href="https://twitter.com/alexisamand"><img src="../images/icon-1.jpg" alt=""></a><a href="https://www.facebook.com/Alexis-AMAND-Webmaster-507308975998494/?ref=settings"><img src="../images/icon-2.jpg" alt=""></a><a href="https://plus.google.com/117361709952417935347"><img src="../images/icon-3.jpg" alt=""></a></div>

       </div>
       
  </footer>	

</body>
</html>