<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="datamhs.xml">
<xsl:template match="/orang">
<xsl:apply-templates select="mahasiswa"/>
</xsl:template>
<xsl:template match="mahasiswa"/>
<xsl:value-of select="/orang/mahasiswa/@angkatan + 3"/>
</xsl:stylesheet>