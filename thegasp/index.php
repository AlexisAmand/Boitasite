<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Addemdum du micro-ordinateur Thomson TO8</title>
    <meta charset="utf-8">

    <meta name="description" content="Addemdum à la documentation du micro-ordinateur Thomson TO8">


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
                      <li><a href="../webmaster.php">Création de sites</a></li>
                      <li><a href="../cours.php">Cours à domicile</a></li>
                      <li><a href="../tutoriels.php">Tutoriels</a></li>
                      <li class="current"><a href="../to8.php">T08</a></li>
                      <li><a href="index.php">The Gasp</a></li>
                      <li><a href="../contacts.php">Contact</a></li>

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
                    <h1 class="text-3">The <span>G</span>asp</h1>
                    
                </div>
            </div>


            <div style="clear:both"></div>
            
<br />

        <p class="text-justify">Il y a quelques mois, j'ai découvert un petit listing en Basic paru dans le n°38 de Jeux et Stratégie d'avril/mai 1985 (<a href="thegasp.pdf">voir l'article de l'époque</a>). Il s'agit d'un petit jeu de réflexion qui est un petit mélange de Reverso et d'Othello. Vous disposez d'un plateau de jeu avec 16 pions bicolores formant un carré 4 x 4. Le but est de retourner tous les pions en respectant une seule régle : Quand vous désignez un pion, ses 8 voisins changent de couleurs mais lui garde la sienne.</p>

<br />

    <p class="text-justify">Quelques pages plus tard, la revue adaptait le jeu de plateau en Basic. Rien de bien génial, aujourd'hui nous appelerions ça un jeu en "mode console".</p>

<br />

    <p class="text-justify">Dans la version que je vous propose ici, les pions sont remplacés par des cartes, mais le principe est toujours le même : Quand vous désignez une carte, ses 8 voisines sont retournées sauf elle. Saurez-vous toutes les retourner ?</p>    

<br />
	        
	<div style="text-align:center;">        
    <img src="images/thumbs/thegasp-01.jpg" alt="capture d'écran du jeu de carte The Gasp pour PC" style="width:20%;margin:5px 5px 5px 5px;">
    <img src="images/thumbs/thegasp-03.jpg" alt="capture d'écran du jeu The Gasp pour PC" style="width:20%;margin:5px 5px 5px 5px;">
    <img src="images/thumbs/thegasp-02.jpg" alt="capture d'écran du jeu de carte The Gasp pour PC" style="width:20%;margin:5px 5px 5px 5px;">
    <img src="images/thumbs/thegasp-04.jpg" alt="capture d'écran du jeu The Gasp pour PC" style="width:20%;margin:5px 5px 5px 5px;">
	</div>                      
	                      
    <h2 style="margin-top:20px;margin-bottom:10px;">Téléchargement et installation</h2>

	<button type="button" class="btn btn-primary">Télécharger</button>

    <ul>
        <li>Téléchargez THE GASP en cliquant sur ce lien.</li>
        <li>Décompressez le fichier dans le répertoire de votre choix.</li>
        <li>Exécutez le fichier setup.exe et suivez les instructions.</li>
        <li>Jouez !</li>
    </ul>

    

    <h2 style="margin-top:20px;margin-bottom:10px;">Actualités</h2>

    <p><strong>11 juin 2018: </strong></p>
    <ul>
        <li>Mise en ligne d'une nouvelle version corrigeant quelques bugs</li>
        <li>Petites corrections sur le site</li>
    </ul>

    <p><strong>13 février 2018: </strong></p>
    <ul>
        <li>Mise en ligne d'une nouvelle version corrigeant quelques bugs</li>
    </ul>

    <p><strong>12 février 2018: </strong></p>
    <ul>
        <li>Mise en téléchargement du jeu.</li>
    </ul>


        
        



                   
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