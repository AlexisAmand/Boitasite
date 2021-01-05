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

<xsl:template match="texte">
 <p>
 <xsl:choose>
  <xsl:when test="@alignement='centre'">
   <xsl:attribute name="align">center</xsl:attribute>
  </xsl:when>
  <xsl:when test="@alignement='droite'">
   <xsl:attribute name="align">right</xsl:attribute>
  </xsl:when>
  <xsl:otherwise>
   <xsl:attribute name="align">left</xsl:attribute>
  </xsl:otherwise>
 </xsl:choose>
 <xsl:value-of select="." />
 </p>
</xsl:template>

</xsl:stylesheet>

