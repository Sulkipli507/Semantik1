<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="datamhs.xml">
<xsl:template match="/orang">
<xsl:apply-templates select="/orang/mahasiswa/nama | //nim"/>
</xsl:template>
</xsl:stylesheet>