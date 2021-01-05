<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
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
</head><body style="font-family:Verdana; font-size:18pt; color:green">
  <xsl:apply-templates />
 </body></html>
</xsl:template>

<xsl:template match="description">
 <p style="font-family:Verdana; font-size:10pt; color:black">
   <xsl:apply-templates />
 </p>
</xsl:template>

<xsl:template match="fabricant">
 <span style="font-weight:bold; color:red"><xsl:value-of select="." /></span>
</xsl:template>

<xsl:template match="produit">
 <span style="font-weight:bold; color:blue"><xsl:value-of select="." /></span>
</xsl:template>

<xsl:template match="prix">
 <b><xsl:value-of select="." /></b>
</xsl:template>

</xsl:stylesheet>