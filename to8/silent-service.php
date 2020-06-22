<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Le jeu Silent Service pour micro-ordinateurs Thomson TO8</title>
    <meta charset="utf-8">

    <meta name="description" content="Description du jeu Silent Service, édité par XXXX, qui était disponible sur les ordinateurs Thomson dans les années 80">


    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/slider.css">
   <link href="https://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here" rel="stylesheet">

    <script src="../js/jquery-1.7.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>

    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    
     <!-- zoom avec Jquery -->

    <script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" href="../fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    

	
    <script type="text/javascript">
    
    $(document).ready(function() {

  
	
	 
		
	$(document).ready(function() {
  $('.accordeon').hide(); // on cache tous les textes (blocs ayant la classe accordeon)
  $('h4').click(function() { // si on clique sur un titre (ici tous les &eacute;l&eacute;ments contenu en les balises h4)
    $(this).next('div:hidden').slideDown() // on deroule le div cach&eacute; qui suit directement le titre
    .siblings('div:visible').slideUp(); // et on cache les div similaires qui etait visible
  });
});

	
});
</script>

<?php include('include/matomo.inc'); ?>


</head>



<body>
   <header> 
       <div> 
          <div>                 	
              <h3><img src="../images/logo.png" alt="Alexis AMAND - Webmaster à Valenciennes"></a></h3>
              <nav>  
                <ul class="menu">
                      <li><a href="../webmaster.php">Création de sites</a></li>
                      <li><a href="../seo.php">SEO</a></li>
                      <li><a href="../tutoriels.php" class="current">Tutos</a></li>    
                      <li><a href="../to8.php" class="current">TO8</a></li>
                      <li><a href="http://thegasp.genealexis.fr" title="Le Gasp, casse-tête gratuit jouable en ligne">Le Gasp</a></li>                
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
                    <h1 class="text-3">Le jeu <span>Silent Service</span> pour TO8</h1>
                    
                    
                </div>
            </div>

            <div style="clear:both">

            <br />
            
         

            <h2 style="margin-top:20px;margin-bottom:10px;">Le jeu</h2>



            
            <p>

            <br /><br />Un jeu édité par XXXXX.
            <br/><br />Les captures qui suivent ont été réalisées avec <a href="http://www.mess.org/" title="Le site de l'émulateur MESS">l'émulateur MESS</a>.</p>

             

                                      



            <p style="text-align:center;margin-top:25px;">
            <img src="images/tilt-40-01.jpg" width="450px" alt="Une publicité pour le jeu Silent Service parue dans la revue TILT de mars 1987">
            <br /><br />
            Une publicité parue dans la revue TILT de mars 1987
            </p>    
        

                

    
                   
            </div>    
            <div class="clear"></div>
        </div>
    </section> 

	  <?php include('../include/footer.inc'); ?>
  
</body>
</html>