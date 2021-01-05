<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:attribute-set name="visible">
  <xsl:attribute name="border">1</xsl:attribute>
  <xsl:attribute name="cellpadding">3</xsl:attribute>
  <xsl:attribute name="cellspacing">1</xsl:attribute>
</xsl:attribute-set>

<xsl:attribute-set name="invisible">
  <xsl:attribute name="border">0</xsl:attribute>
  <xsl:attribute name="cellpadding">3</xsl:attribute>
  <xsl:attribute name="cellspacing">1</xsl:attribute>
</xsl:attribute-set>

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
 <xsl:element name="table" use-attribute-sets="visible">
 <xsl:for-each select="test/element">
 <tr>
  <td valign="top"><b><xsl:value-of select="terme" /></b></td>
  <td valign="top"><xsl:value-of select="definition" /></td>
 </tr>
 </xsl:for-each>
 </xsl:element>
 </body>
 </html>
</xsl:template>

</xsl:stylesheet>

