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
 <table border="1"><xsl:apply-templates /></table>
 </body>
 </html>
</xsl:template>

<xsl:template match="titre">
<tr><th colspan="3"><xsl:value-of select="." /></th></tr>
</xsl:template>

<xsl:template match="telephone">
<tr>
<td><xsl:copy-of select="../titre" /></td>
<xsl:apply-templates />
</tr>
</xsl:template>

<xsl:template match="nom">
<td><xsl:value-of select="." /></td>
</xsl:template>

<xsl:template match="numero">
<td><xsl:value-of select="." /></td>
</xsl:template>

</xsl:stylesheet>

