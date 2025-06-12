<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Faire ses premiers pas dans le référencement naturel | développement web et SEO à Valenciennes</title>
    <meta name="description" content="Guide facile de SEO destiné aux webmasteurs qui font leurs premiers pas dans le domaine du référencement naturel de sites">

    <link rel="icon" href="/img/favicon.png">
  	<link rel="canonical" href="https://www.boitasite.com/guide-seo.php">

  	<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php'; ?>

</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'; ?>

    <section id="portfolio-timeline" class="py-5 bg-light text-center">
        <div class="container">
            <h1 class="my-5">Guide SEO pour débutant</h1>

            <article class="row">

            <div class="col-12">

            <p class="text-justify">Pour faire simple, disons que le référencement naturel est le moyen par lequel vous allez essayer de vous faire connaître et bien voir par les moteurs de recherche. Il s’agit d’une liste de petites choses, sortes de règles de bonne conduite, que vous pouvez mettre en place pour essayer d’être bien vu par le petit robot qui va parcourir vos pages web. On parle de SEO, pour « Search Engine Optimization ».</p>

            <p class="text-justify">Pour que ce petit article soit le plus simple possible, je ne vais pas rentrer dans le détail de chaque CMS (Blogger, Spip, Wordpress, Joomla ou autres). Je vais vous donner des grandes lignes, et je vous laisse le soin de jeter un coup d’œil à la documentation du système que vous utilisez pour aller plus loin.</p>

            <h3 class="mt-5 mb-3 text-start">La balise "Title"</h3>

            <p class="text-justify mt-3">Toutes vos pages doivent avoir un titre différent. Je ne parle pas du titre qui d’affiche sur la page, juste au-dessus de votre article, je parle d’un point de vue structurel. Ce titre, c’est celui qui apparaît dans les onglets de votre navigateur.</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/guide-seo-01.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation la balise <title> dans un onglet de navigateur">
                    <figcaption class="figure-caption text-right">Un titre dans un onglet de navigateur</figcaption>
                </figure>

            </div>

            <p class="text-justify">C’est aussi celui qui apparaît en bleu dans les résultats de recherche de Google, et sur lequel vous cliquez pour voir la page. D’un point de vue technique, il s’agit de la balise &lt;title&gt; au sein de laquelle vous allez placer quelques mots-clés, qui vont former une petite expression que décrit votre page.</p> 

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-meta-title.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation la balise <title> dans les resultats de recherche">
                    <figcaption class="figure-caption text-right">Exemple de balise &lt;title&gt;</figcaption>
                </figure>

            </div>

            <p class="text-justify">N'oubliez pas que cette balise doit être placée en haut de la page, entre le &lt;head&gt; et &lt;/head&gt;.</p>

            <h3 class="mt-5 mb-3 text-start">La "meta description"</h3>

            <p class="text-justify mt-3">Sur le même principe, il y a ce que l’on appelle la « balise meta description ». J’ai pour habitude de la placer juste après le &lt;title&gt; dont nous avons parlé tout à l’heure, le plus tôt possible dans ma page, avant même les feuilles de styles ou les divers scripts que je vais utiliser. Là aussi, il faut qu’elle soit différente d’une page à l’autre  et contienne des mots-clés, tout en évitant de faire une bête liste de mot-clé qui ressemblerait aux dictées de mots que l’on faisait au cours élémentaire. C’est une description succincte mais précise de votre page.</p>

            <p class="text-justify">Vous avez déjà vu sur Google, le petit texte noir qui est juste en dessous du titre de chaque site ? C’est elle ! C’est la balise meta description ! Il faut donc veiller à bien l’écrire, car même si Google a de moins en moins d’intérêt pour elle, c’est ce que vont lire les gens en premier pendant leur recherche sur le net, c’est elle qui va donner envie d’aller sur votre site. Si vous êtes un pro, elle va, à son échelle, contribuer à faire du simple visiteur de votre page, un client potentiel de votre entreprise. Comme disait un chanteur bien connu, elle donnait l’envie d’avoir envie.</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/guide-seo-02.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation la balise meta description dans les resultats de recherche">
                    <figcaption class="figure-caption text-right">La balise &lt;meta&gt; et Google</figcaption>
                </figure>

            </div>

            <p class="text-justify">Si on reprend l’exemple du 1), et que l’on plonge un peu mains dans le code source de la page, la balise meta description peut par exemple ressembler à ceci :</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-meta-desc.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple de balise meta description dans un code source en html">
                    <figcaption class="figure-caption text-right">Exemple de balise &lt;meta&gt;</figcaption>
                </figure>

            </div>

            <p class="text-justify">Comme pour &lt;title&gt;, la balise meta description doit être placé entre le &lt;head&gt; et &lt;/head&gt;, en haut de la page.</p>

            <h3 class="mt-5 mb-3 text-start">Les titres HX</h3>

            <p class="text-justify mt-3">Un autre point, de plus en plus important pour Google : le contenu. </p>
            
            <p class="text-justify">Par exemple, les titres que l’on peut trouver quand on utilise des éditeurs visuels tels que Tinymce ne doivent pas être utilisés juste pour le fun de mettre un texte en grand. Il faut les utiliser pour structurer votre page et son contenu, un peu comme un livre. Si j’enlève tout le que contient votre page en termes de texte ou d’image, et que je laisse juste ces titres, je dois pouvoir deviner de quoi elle parle.</p>

            <p class="text-justify">On peut par exemple essayer avec la page que Wikipédia consacre au Second Empire. D’un simple coup d’œil, on découvre les titres « Le coup d’état de 1851 », « la constitution française de 1852 » ou encore « La montée des difficultés et des contestations », vous voyez où je veux en venir ? Oui ! C’est ça ! Comme pour la balise méta description et le titre dont je parlais tout à l’heure, les niveaux de titre que vous allez utiliser vont aider Google à comprendre de quoi parle votre site, et même pouvoir créer un contexte autour de vos images.</p>

            <p class="text-justify">Le html affiche les titres avec des balises allant de h1 (la plus importante) à h6 (la moins importante).</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-balise-hx.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple des balises HX pour créer différents niveaux de titres dans un code source en html">
                    <figcaption class="figure-caption text-right">Le code pour les balises &lt;h1&gt; à &lt;h6&gt;</figcaption>
                </figure>

            </div>

            <h3 class="mt-5 mb-3 text-start">Les images</h3>

            <p class="text-justify mt-3">Tout à l’heure, j’ai un peu abordé les images, en vous parlant du contexte autour d’elles. Pour optimiser un maximum votre site, il faut partir du principe que Google n’est pas capable de voir ce que représente votre image. Il faut donc lui expliquer avec une petite description d’une dizaine de mots. Si vous avez accès au code source de votre page, il faut ajouter l’attribut alt à la balise image :</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-balise-img.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation de l'attribut alt sur une image dans un code source en html">
                    <figcaption class="figure-caption text-right">L'attribut alt avec une image</figcaption>
                </figure>

            </div>

            <p class="text-justify">La plupart des CMS proposent un champ « description » ou « texte alternatif » au moment où vous insérez votre image, pensez à la compléter ! D’autant plus que cette description est aussi utile aux personnes mal voyante dont le lecteur d’écran indiquera oralement le contenu de l’image. Elle prend aussi le relais si votre image ne peut pas s’afficher pour une raison quelconque.</p>

            <h3 class="mt-5 mb-3 text-start">Les liens</h3>

            <p class="text-justify mt-3">Peu importe le logiciel que vous utilisez pour créer vos pages. Vous pouvez écrire le code vous-même à l’aide d’un éditeur, vous pouvez créer vos pages avec Word, vous pouvez gérer votre site avec système « tout fait » comme Wordpress, une chose est sûre : choisissez un nom de fichier qui soit judicieux au moment d’enregistrer. Évitez autant que possible des noms de fichiers qui ressemblent à mapageweb.html, d’abord, car c’est moche, mais surtout, car là aussi, il faut choisir le nom de façon judicieuse. Chaque étape de la création d’une page, qu’il s’agisse de l’insertion d’une image ou de l’ajout d’un article, doit être pensée en termesd’optimisation du référencement.</p> 

            <p class="text-justify">Les liens fonctionnent comme les images, pour lesquelles nous pouvons mettre un texte alternatif. Là aussi, c’est l’occasion d’y placer un ou deux mots-clés.</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-balise-a.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation de l'attribut title sur un lien hypertexte dans un code source en html">
                    <figcaption class="figure-caption text-right">L'attribut title avec une lien</figcaption>
                </figure>

            </div>
            
            <h3 class="mt-5 mb-3 text-start">Le contenu</h3>

            <p class="text-justify mt-3">Vous pouvez aussi mettre en gras 2 ou 3 mots de votre page, s'ils sont en relation avec sa thématique, en utilisant la balise &lt;strong&gt;. </p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-balise-strong.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation des balises <strong> dans un code source en html">
                    <figcaption class="figure-caption text-right">La balise &lt;strong&gt;</figcaption>
                </figure>

            </div>
            
            <p class="text-justify">Sur le même principe, il y a la balise &lt;em&gt; qui permet de mettre un texte en italique. La plupart du temps, elle est utilisée pour mettre en valeur une citation, un titre d’ouvrage ou un morceau de texte en langue étrangère.</p>

            <div class="row d-flex justify-content-center">

                <figure class="figure">
                    <img src="img/tuto-seo/seo-balise-em.jpg" class="figure-img img-fluid rounded img-thumbnail" alt="exemple d'utilisation de la balise <em> dans un code source en html">
                    <figcaption class="figure-caption text-right">La balise &lt;em&gt;</figcaption>
                </figure>

            </div>
            
            <p class="text-justify">Rappelez-vous ! Le contenu de votre page doit être unique et original !</p> 

            <h3 class="mt-5 mb-3 text-start">Pour aller plus loin</h3>

            <p class="text-justify mt-3">Si vous voulez aller plus loin, il y a un livre traîne sur mon bureau depuis quelques années : <a href="https://amzn.to/3kURZtF" title="Les 60 Maximes du Référencement par Maxime Grandchamp">"Les 60 Maximes du Référencement"</a> (par Maxime Grandchamp, éditions L’Alambic). Je sais que le référencement est une science qui évolue vite, au grès des mises à jour de Google, alors vous proposer un ouvrage qui date de 2009 est un peu fou. Cependant, je pense qu’il vous aidera à acquérir certains mécanismes et à comprendre la « philosophie du référencement » sans trop vous prendre la tête avec la technique. Ensuite, libre à vous d’aller plus loin avec des ouvrages un peu plus actuels et un peu plus avancés comme par exemple  <a href="https://amzn.to/3pX99uC" title="Réussir son référencement web par Olivier Andrieu">"Réussir son référencement web"</a> (par Olivier Andrieu, éditions Eyrolles).</p>

            </div>

        </article>

</section>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/contact.inc.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'; ?>

  <script src="js/animations.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
