<?php
	include ("conn/conn.php");
			
	mysql_select_db($db_name);
?>

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">ISO</li>
    <li class="TabbedPanelsTab" tabindex="0">ROC</li>
    <li class="TabbedPanelsTab" tabindex="0">CE</li>
    <li class="TabbedPanelsTab" tabindex="0">CCC</li>
    <li class="TabbedPanelsTab" tabindex="0">TAXES</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
    <?php 
	$isosql="select * from cms where cmsid=6";
	$isores=mysql_query($isosql, $lnk);
	$isofres=mysql_fetch_assoc($isores);
			
	echo base64_decode($isofres['cms']);
	?>
    
    </div>
    <div class="TabbedPanelsContent">
       <?php 
	$rocsql="select * from cms where cmsid=7";
	$rocres=mysql_query($rocsql, $lnk);
	$rocfres=mysql_fetch_assoc($rocres);
			
	echo base64_decode($rocfres['cms']);
	?></div>
    <div class="TabbedPanelsContent">
       <?php 
	$cesql="select * from cms where cmsid=8";
	$ceres=mysql_query($cesql, $lnk);
	$cefres=mysql_fetch_assoc($ceres);
			
	echo base64_decode($cefres['cms']);
	?></div>
    <div class="TabbedPanelsContent">
       <?php 
	$cccsql="select * from cms where cmsid=9";
	$cccres=mysql_query($cccsql, $lnk);
	$cccfres=mysql_fetch_assoc($cccres);
			
	echo base64_decode($cccfres['cms']);
	?></div>
    <div class="TabbedPanelsContent"> <?php 
	$taxsql="select * from cms where cmsid=10";
	$taxres=mysql_query($taxsql, $lnk);
	$taxfres=mysql_fetch_assoc($taxres);
			
	echo base64_decode($taxfres['cms']);
	?></div>
  </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
