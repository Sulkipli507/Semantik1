<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:output method="html"/>
<xsl:template match="/orang">
<html>
    <head>
        <title>Testing XSL pada XML</title>
    </head>
    <body>
        <h3>Data mahasiswa</h3>
        <table border="1">
            <tr>
                <th>NIM</th>
            </tr>
            <xsl:apply-templates select="mahasiswa">              
            </xsl:apply-templates>
        </table>
    </body>
</html>
</xsl:template>
<xsl:template match="mahasiswa">
    <tr>
        <td>
            <xsl:value-of select="nim"/>
        </td>
    </tr>
</xsl:template>
</xsl:stylesheet>