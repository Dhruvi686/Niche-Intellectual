<?php

if ($_REQUEST['bshow']){
	$page=$_REQUEST['page'];
	$chksql="select * from cms where cmsid=$page ";
	$chkres=mysql_query($chksql, $lnk) or die(mysql_error());
	$chkrows=mysql_num_rows($chkres);
	
	if ($chkrows>0){
		$chkfres=mysql_fetch_assoc($chkres);
		$cms=stripslashes(base64_decode($chkfres['cms']));
	}
	
	$pgd=array("About Us", "Trademark", "Copyright", "Patent", "Design", "ISO", "ROC", "CE", "CCC", "Taxes", "Disclaimer", "Terms &amp; Conditions", "Privacy Policy");
	$i=$page-1;
	
	include_once("fckeditor/fckeditor.php");
?>


<form action="cms1.php" method="post" enctype="" name="upcms" id="upcms">
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="left" valign="top">Your content for the page of <?php echo $pgd[$i]; ?><input name="cmsid" type="hidden" value="<?php echo $page; ?>"></td>
    </tr>
  <tr>
    <td align="left" valign="top">
     <?php 
	 $oFCKeditor=new FCKeditor('FCKeditor1');
	 $oFCKeditor->Basepath='localhost/karate/fckeditor/';
	 $oFCKeditor->Config['EnterMode'] = 'br';
	 $oFCKeditor->Value=$cms;
	 $oFCKeditor->ToolbarSet = 'MyToolbar';
	 $oFCKeditor->Create();
	 ?>
   </td>
  </tr>
  <tr>
    <td align="right" valign="top"> <input name="badd" type="submit" value="Insert / update">   </td>
  </tr>
  <tr>
    <td align="left" valign="top"></td>
  </tr>
</table>

</form>
 <?php
}else{
?>
<form id="frmcms" method="post" action="" style="text-align:center">
  Select pages:
  <select name="page" id="page">
      <option value="1">About Us</option>
      <option value="2">Trademark</option>
      <option value="3">Copyright</option>
      <option value="4">Patent</option>
      <option value="5">Design</option>
      <option value="6">ISO</option>
      <option value="7">ROC</option>
      <option value="8">CE</option>
      <option value="9">CCC</option>
      <option value="10">Taxes</option>
      <option value="11">Disclaimer</option>
      <option value="12">Terms &amp; Conditions</option>
      <option value="13">Privacy Policy</option>
    </select>
    <input type="submit" name="bshow" id="bshow" value="show" />
</form>
<?php }?>