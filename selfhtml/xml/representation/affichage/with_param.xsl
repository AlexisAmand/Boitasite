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
 <table border="1">
  <xsl:call-template name="boucle">
    <xsl:with-param name="compteur" select="number(/test/debut)" />
  </xsl:call-template>
 </table>
 </body>
 </html>
</xsl:template>

<xsl:template name="boucle">
 <xsl:param name="compteur" />
 <xsl:choose>
  <xsl:when test="$compteur &lt;= number(/test/fin)">
    <tr>
      <td><xsl:value-of select="$compteur" /></td>
      <td><xsl:value-of select="$compteur * $compteur" /></td>
    </tr>
    <xsl:call-template name="boucle">
     <xsl:with-param name="compteur" select="$compteur + 1" />
    </xsl:call-template>
  </xsl:when>
  <xsl:otherwise>
   <xsl:call-template name="interruption" />
  </xsl:otherwise>
 </xsl:choose>
</xsl:template>

<xsl:template name="interruption">
 <xsl:comment>boucle termin�e!</xsl:comment>
</xsl:template>

</xsl:stylesheet>

