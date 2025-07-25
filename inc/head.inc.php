<!-- Preconnect et preload Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&family=Roboto:wght@300;400;500&display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet"></noscript>

  <?php
  function vite_asset(string $entry): void {
    static $manifest = null;
    $manifestPath = $_SERVER['DOCUMENT_ROOT'] . '/dist/.vite/manifest.json';

    if ($manifest === null) {
        if (!file_exists($manifestPath)) {
            throw new Exception("Fichier manifest.json introuvable : $manifestPath");
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
    }

    if (!isset($manifest[$entry])) {
        throw new Exception("Entrée $entry introuvable dans manifest.json");
    }

    $asset = $manifest[$entry];

    // CSS
    if (isset($asset['css'])) {
        foreach ($asset['css'] as $cssFile) {
            echo '<link rel="stylesheet" href="/dist/' . $cssFile . '">' . PHP_EOL;
        }
    }

    // JS
    echo '<script type="module" src="/dist/' . $asset['file'] . '"></script>' . PHP_EOL;
}
?>
  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CV7N5LWNP6"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-CV7N5LWNP6');
</script>

  <meta name="author" content="Alexis AMAND">
  
  <?php
  vite_asset('src/main.js');
  ?>

  <!-- Open Graph -->
  <meta property="og:title" content="Développeur web indépendant à Valenciennes – Alexis Amand" />
  <meta property="og:description" content="Création de sites web sur mesure, SEO, maintenance et accompagnement digital à Valenciennes." />
  <meta property="og:image" content="https://www.boitasite.com/img/preview.jpg" />
  <meta property="og:url" content="https://www.boitasite.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Développeur web indépendant à Valenciennes – Alexis Amand" />
  <meta name="twitter:description" content="Création de sites web, SEO, refonte et accompagnement numérique. Pour les pros de Valenciennes et au-delà." />
  <meta name="twitter:image" content="https://www.boitasite.com/img/preview.jpg" />

  <script src="/tarteaucitron/tarteaucitron.min.js"></script>
  <script src="/tarteaucitron/tarteausetup.min.js"></script>

  <!-- Matomo via tarteaucitron.js -->
  <script>
  tarteaucitron.user.matomoId = '1';
  (tarteaucitron.job = tarteaucitron.job || []).push('matomo');
  </script>

  <script>tarteaucitron.user.matomoHost = '//matomo.boitasite.com/';</script>