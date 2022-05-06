<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Comment mettre un code ASCII dans une page web ? - développement web et SEO à Valenciennes</title>
    <meta name="description" content="Tutoriel pour apprendre à utiliser des codes ASCII dans une page web en html">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS perso -->
    <link rel="stylesheet" href="css/style.min.css">
    <link href="https://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here" rel="stylesheet">

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script type="text/javascript" src="tarteaucitron/tarteaucitron.js"></script>

    <script type="text/javascript">
    tarteaucitron.init({
    "privacyUrl": "", /* Privacy policy url */

    "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    "cookieName": "tarteaucitron", /* Cookie name */

    "orientation": "middle", /* Banner position (top - bottom) */
                    
    "showAlertSmall": false, /* Show the small banner on bottom right */
    "cookieslist": false, /* Show the cookie list */
                    
    "showIcon": true, /* Show cookie icon to manage cookies */
    "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    "adblocker": false, /* Show a Warning if an adblocker is detected */
                    
    "DenyAllCta" : true, /* Show the deny all button */
    "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
    "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                    
    "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    "removeCredit": false, /* Remove credit link */
    "moreInfoLink": true, /* Show more info link */

    "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
    "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                    
    "readmoreLink": "", /* Change the default readmore link */

    "mandatory": true, /* Show a message about mandatory cookies */
    });
    </script>

</head>

<body>

    <header class="fluid-container">

        <div class="container">

                <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php" title="Retour sur la page d'accueil du site">
                <img src="img/logo.png" alt="Alexis AMAND - Webmaster à Valenciennes"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item m-2"><a class="nav-link" href="webmaster.php" title="Création et audit de site web à Valenciennes">Création de sites</a></li> 
                    <li class="nav-item m-2"><a class="nav-link" href="seo.php" title="Référencement de site web à Valenciennes">SEO</a></li> 
                    <li class="nav-item m-2"><a class="nav-link" href="tutoriels.php">Tutos</a></li> 
                    <li class="nav-item m-2"><a class="nav-link" href="to8.php">Retrogaming</a></li> 
                    <li class="nav-item m-2"><a class="nav-link" href="jeux.php">Jeux</a></li> 
                    <li class="nav-item m-2"><a class="nav-link" href="contacts.php">Contact</a></li> 
                </ul> 
                </div>
                </nav>

        </div>

    </header>

    <section class="container">

        <article class="row d-flex justify-content-center ligne-dotted-top">

            <div class="col-12 py-5 mb-3 ligne-dotted-bottom">
                <h1 class="text-center">#devweb: Les codes <span>ASCII</span> de 0 à 255</h1>
            </div>

            <div class="col-12">

            <p>Le code ASCII est un codes utilisés par les ordinateurs pour représenter des caractères latins. Chaque caractère est une suite de 8 bits qui forment un octet (attention, en anglais on parle de byte à ne pas confondre avec bit) et représente un caractère. Il suffit de parcourir le table, et de repérer le numéro de la ligne et numéro de la colonne. Le code ASCII est alors trouver en réunissant les deux :<br/><br />
            Pour le caracère &#052; situé ligne 5 et col 2, on utilise 052.<br >
            Pour le caracère &#206; situé ligne 20 et col 6, on utilise 206.<br >
            Pour le caracère &#118; situé ligne 11 et col 8, on utilise 118.<br >
            Pour le caracère &#084; situé ligne 8 et col 4, on utilise 084.<br ><br >
            Pour afficher le caractère  correspondant au code ASCII en html, on fait précéder de <strong>&#</strong> et suivre par <strong>;</strong><br ><br >

            Ecrire &#038;&#035;052; dans un code html affichera un &#052;<br >
            Ecrire &#038;&#035;206; dans un code html affichera un &#206;<br >
            Ecrire &#038;&#035;118; dans un code html affichera un &#118;<br >
            Ecrire &#038;&#035;084; dans un code html affichera un &#084;<br >
          
            <?php

            /*

            echo '<table class="table table-striped">';

            for ($lig = 0; $lig <= 26; $lig++) 
                {
                echo "<tr>";
                $value = $lig;
                if ($lig < 10) 
                    {
                    $value = str_pad($lig, 2, "0", STR_PAD_LEFT);
                    }
                echo "<th scope='row'>".$value."</th>";
                for ($col = 0; $col < 10; $col++)
                    {
                    $codeascii = $lig * 100 + $col;
                    
                    echo "<td scope='col'>&#".$codeascii.";</td>";
                    }

                echo "</tr>";
            
            }

            echo '</table>';

            */

            ?>

            

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">0</th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">00</th>
                    <td>NUL</td>
                    <td>SOH</td>
                    <td>STX</td>
                    <td>ETX</td>
                    <td>EOT</td>
                    <td>ENQ</td>
                    <td>ACK</td>
                    <td>BEL</td>
                    <td>BS</td>
                    <td>TAB</td>
                </tr>
                <tr>
                    <th scope="row">01</th>
                    <td>LF</td>
                    <td>VT</td>
                    <td>FF</td>
                    <td>RC</td>
                    <td>SO</td>
                    <td>SI</td>
                    <td>DLE</td>
                    <td>DC1</td>
                    <td>DC2</td>
                    <td>DC3</td>
                </tr>
                <tr>
                    <th scope="row">02</th>
                    <td>DC4</td>
                    <td>NAK</td>
                    <td>SYN</td>
                    <td>ETB</td>
                    <td>CAN</td>
                    <td>EM</td>
                    <td>SUB</td>
                    <td>ESC</td>
                    <td>FS</td>
                    <td>GS</td>
                </tr>
                <tr>
                    <th scope="row">03</th>
                    <td>RS</td>
                    <td>US</td>
                    <td>espace</td>
                    <td>!</td>
                    <td>"</td>
                    <td>#</td>
                    <td>$</td>
                    <td>%</td>
                    <td>&#038;</td>
                    <td>&#039;</td>
                </tr>
                <tr>
                    <th scope="row">04</th>
                    <td>&#040;</td>
                    <td>&#041;</td>
                    <td>&#042;</td>
                    <td>&#043;</td>
                    <td>&#044;</td>
                    <td>&#045;</td>
                    <td>&#046;</td>
                    <td>&#047;</td>
                    <td>&#048;</td>
                    <td>&#049;</td>
                </tr>
                <tr>
                    <th scope="row">05</th>
                    <td>&#050;</td>
                    <td>&#051;</td>
                    <td>&#052;</td>
                    <td>&#053;</td>
                    <td>&#054;</td>
                    <td>&#055;</td>
                    <td>&#056;</td>
                    <td>&#057;</td>
                    <td>&#058;</td>
                    <td>&#059;</td>
                </tr>
                <tr>
                    <th scope="row">06</th>
                    <td>&#060;</td>
                    <td>&#061;</td>
                    <td>&#062;</td>
                    <td>&#063;</td>
                    <td>&#064;</td>
                    <td>&#065;</td>
                    <td>&#066;</td>
                    <td>&#067;</td>
                    <td>&#068;</td>
                    <td>&#069;</td>
                </tr>
                <tr>
                    <th scope="row">07</th>
                    <td>&#07.0;</td>
                    <td>&#071;</td>
                    <td>&#072;</td>
                    <td>&#073;</td>
                    <td>&#074;</td>
                    <td>&#075;</td>
                    <td>&#076;</td>
                    <td>&#077;</td>
                    <td>&#078;</td>
                    <td>&#079;</td>
                </tr>
                <tr>
                    <th scope="row">08</th>
                    <td>&#080;</td>
                    <td>&#081;</td>
                    <td>&#082;</td>
                    <td>&#083;</td>
                    <td>&#084;</td>
                    <td>&#085;</td>
                    <td>&#086;</td>
                    <td>&#087;</td>
                    <td>&#088;</td>
                    <td>&#089;</td>
                </tr>
                <tr>
                    <th scope="row">09</th>
                    <td>&#090;</td>
                    <td>&#091;</td>
                    <td>&#092;</td>
                    <td>&#093;</td>
                    <td>&#094;</td>
                    <td>&#095;</td>
                    <td>&#096;</td>
                    <td>&#097;</td>
                    <td>&#098;</td>
                    <td>&#099;</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>&#100;</td>
                    <td>&#101;</td>
                    <td>&#102;</td>
                    <td>&#103;</td>
                    <td>&#104;</td>
                    <td>&#105;</td>
                    <td>&#106;</td>
                    <td>&#107;</td>
                    <td>&#108;</td>
                    <td>&#109;</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>&#110;</td>
                    <td>&#111;</td>
                    <td>&#112;</td>
                    <td>&#113;</td>
                    <td>&#114;</td>
                    <td>&#115;</td>
                    <td>&#116;</td>
                    <td>&#117;</td>
                    <td>&#118;</td>
                    <td>&#119;</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>&#120;</td>
                    <td>&#121;</td>
                    <td>&#122;</td>
                    <td>&#123;</td>
                    <td>&#124;</td>
                    <td>&#125;</td>
                    <td>&#126;</td>
                    <td>&#127;</td>
                    <td>&#128;</td>
                    <td>&#129;</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>&#130;</td>
                    <td>&#131;</td>
                    <td>&#132;</td>
                    <td>&#133;</td>
                    <td>&#134;</td>
                    <td>&#135;</td>
                    <td>&#136;</td>
                    <td>&#137;</td>
                    <td>&#138;</td>
                    <td>&#139;</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>&#140;</td>
                    <td>&#141;</td>
                    <td>&#142;</td>
                    <td>&#143;</td>
                    <td>&#144;</td>
                    <td>&#145;</td>
                    <td>&#146;</td>
                    <td>&#147;</td>
                    <td>&#148;</td>
                    <td>&#149;</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>&#150;</td>
                    <td>&#151;</td>
                    <td>&#152;</td>
                    <td>&#153;</td>
                    <td>&#154;</td>
                    <td>&#155;</td>
                    <td>&#156;</td>
                    <td>&#157;</td>
                    <td>&#158;</td>
                    <td>&#159;</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>&#160;</td>
                    <td>&#161;</td>
                    <td>&#162;</td>
                    <td>&#163;</td>
                    <td>&#164;</td>
                    <td>&#165;</td>
                    <td>&#166;</td>
                    <td>&#167;</td>
                    <td>&#168;</td>
                    <td>&#169;</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>&#170;</td>
                    <td>&#171;</td>
                    <td>&#172;</td>
                    <td>&#173;</td>
                    <td>&#174;</td>
                    <td>&#175;</td>
                    <td>&#176;</td>
                    <td>&#177;</td>
                    <td>&#178;</td>
                    <td>&#179;</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>&#180;</td>
                    <td>&#181;</td>
                    <td>&#182;</td>
                    <td>&#183;</td>
                    <td>&#184;</td>
                    <td>&#185;</td>
                    <td>&#186;</td>
                    <td>&#187;</td>
                    <td>&#188;</td>
                    <td>&#189;</td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>&#190;</td>
                    <td>&#191;</td>
                    <td>&#192;</td>
                    <td>&#193;</td>
                    <td>&#194;</td>
                    <td>&#195;</td>
                    <td>&#196;</td>
                    <td>&#197;</td>
                    <td>&#198;</td>
                    <td>&#199;</td>
                </tr>
                <tr>
                    <th scope="row">20</th>
                    <td>&#200;</td>
                    <td>&#201;</td>
                    <td>&#202;</td>
                    <td>&#203;</td>
                    <td>&#204;</td>
                    <td>&#205;</td>
                    <td>&#206;</td>
                    <td>&#207;</td>
                    <td>&#208;</td>
                    <td>&#209;</td>
                </tr>
                <tr>
                    <th scope="row">21</th>
                    <td>&#210;</td>
                    <td>&#211;</td>
                    <td>&#212;</td>
                    <td>&#213;</td>
                    <td>&#214;</td>
                    <td>&#215;</td>
                    <td>&#216;</td>
                    <td>&#217;</td>
                    <td>&#218;</td>
                    <td>&#219;</td>
                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>&#220;</td>
                    <td>&#221;</td>
                    <td>&#222;</td>
                    <td>&#223;</td>
                    <td>&#224;</td>
                    <td>&#225;</td>
                    <td>&#226;</td>
                    <td>&#227;</td>
                    <td>&#228;</td>
                    <td>&#229;</td>
                </tr>
                <tr>
                    <th scope="row">23</th>
                    <td>&#230;</td>
                    <td>&#231;</td>
                    <td>&#232;</td>
                    <td>&#233;</td>
                    <td>&#234;</td>
                    <td>&#235;</td>
                    <td>&#236;</td>
                    <td>&#237;</td>
                    <td>&#238;</td>
                    <td>&#239;</td>
                </tr>
                <tr>
                    <th scope="row">24</th>
                    <td>&#240;</td>
                    <td>&#241;</td>
                    <td>&#242;</td>
                    <td>&#243;</td>
                    <td>&#244;</td>
                    <td>&#245;</td>
                    <td>&#246;</td>
                    <td>&#247;</td>
                    <td>&#248;</td>
                    <td>&#249;</td>
                </tr>
                <tr>
                    <th scope="row">25</th>
                    <td>&#250;</td>
                    <td>&#251;</td>
                    <td>&#252;</td>
                    <td>&#253;</td>
                    <td>&#254;</td>
                    <td>&#255;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            </table>

            </div>

        </article>

    </section>

    <footer class="fluid-container py-4">

        <div class="container text-light">

            <div class="row">

                <div class="col-12 col-sm-6 col-md-6">
                    <p class="text-center">Alexis AMAND<br />Développement Web et SEO<br />---
                    <br />06.62.63.79.21<br />alexis.amand@boitasite.com</p>
                </div>
        
                <div  class="col-12 col-sm-6 col-md-6">
                    <p class="text-center">Follow Moi:</p>
                    <p class="text-center">
                        <a href="https://twitter.com/boitasite" title="lien pour me suivre sur Twitter"><i class="fi-swluxl-twitter"></i></a>
                        <a href="https://www.facebook.com/Alexis-AMAND-Webmaster-507308975998494/" title="lien pour me suivre sur Facebook"><i class="fi-swluxl-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/alexis-amand-99775817" title="lien pour me suivre sur LinkedIn"><i class="fi-swluxl-linkedin"></i></a>
                    </p>
                </div>
            
            </div>

            <div class="col-12">

                <p class="text-center mt-4">© 2020-2022 - Site propulsé sur le net par <a href="/index.php">boitasite.com</a><br />Site hébergé par <a href="https://www.amen.fr/" title="Site de l'hébergeur Amen France">Amen France</a> - <a href="mentions-legales.php" title="lien vers les mentions légales du site">Mentions légales</a> - <a href="http://cv.genealexis.fr/" title="lien vers le CV en ligne de Alexis AMAND">Mon CV</a>
                </p>

            </div>

        </div>

    </footer>

    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- JS de Fancybox -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <?php include('include/matomo.inc'); ?>

  </body>
</html>