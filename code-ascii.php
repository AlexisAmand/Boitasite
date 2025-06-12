<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Comment mettre un code ASCII dans une page web ? - développement web et SEO à Valenciennes</title>
    <meta name="description" content="Découvrez comment insérer facilement des codes ASCII dans vos pages web HTML. Tutoriel clair pour débutants et développeurs.">

    <link rel="icon" href="/img/favicon.png">
  	<link rel="canonical" href="https://www.boitasite.com/code-ascii.php">

  	<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>    


    <section id="portfolio-timeline" class="py-5 bg-light text-center">
        <div class="container">
            <h1 class="my-5">Les codes ASCII</h1>

            <article class="row">

            <div class="col-12">

            <p class="text-justify">Le code ASCII est un code utilisé par les ordinateurs pour représenter des caractères latins. Chaque caractère est une suite de 8 bits qui forment un octet (attention, en anglais, on parle de byte à ne pas confondre avec bit.) et représente un caractère. Il suffit de parcourir la table, et de repérer le numéro de la ligne et numéro de la colonne. Le code ASCII est alors trouvé en réunissant les deux :<br/><br />
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

        </div> 

    </section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>