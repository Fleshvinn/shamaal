<?php
header( "Content-type: text/html; charset=utf-8" );
?>
<html>
<head>
    <title>Shamaal World</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		
		<?
		echo '
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.noty.packaged.min.js"></script>
<link rel="stylesheet" type="text/css" href="/maingame/shake/csshake.min.css">
';
?>
</head>
<LINK REL=STYLESHEET TYPE="TEXT/CSS" HREF="style.css?rev=122" TITLE="STYLE">

<table cellpadding=3 cellspacing=0 width=100% height=100%>
    <tr>
        <td class=mainb id=tbox valign=top></td>
    </tr>
</table>
<script>
    if (parent.makechat)
        parent.makechat();
</script>
</body>
</html>
