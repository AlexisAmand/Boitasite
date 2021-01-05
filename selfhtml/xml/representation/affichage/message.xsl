<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
 <html>
 <head>
 <!-- Matomo -->
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
</head>
 <body>
  <xsl:apply-templates />
 </body>
 </html>
</xsl:template>

<xsl:template match="chiffre_lotto">
  <xsl:variable name="valeur_actuelle" select="."/>
  <xsl:if test="$valeur_actuelle > 49">
   <xsl:message terminate="yes">
    <xsl:text>Le chiffre </xsl:text>
    <xsl:value-of select="."/>
    <xsl:text>) est trop grand !</xsl:text><br />
   </xsl:message>
  </xsl:if>
  <xsl:value-of select="."/><br />
</xsl:template>

</xsl:stylesheet>
