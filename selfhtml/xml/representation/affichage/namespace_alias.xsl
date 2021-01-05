<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:out="namespace_out.xsl">

<xsl:namespace-alias stylesheet-prefix="out" result-prefix="xsl"/>

<xsl:template match="/">
 <out:stylesheet version="1.0">
  <out:template match="/">
   <html><head><!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.boitasite.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head><body>
   <h1><xsl:value-of select="salut" /></h1>
   <h1><out:text>hello monde - par la feuille de style de sortie</out:text></h1>
   </body></html>
  </out:template>
 </out:stylesheet>
</xsl:template>

</xsl:stylesheet>

