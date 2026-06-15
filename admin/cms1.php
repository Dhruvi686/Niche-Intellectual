
<?php
include ("../conn/conn.php");

mysql_select_db($db_name);

if ($_REQUEST['badd']){
	$cms=$_REQUEST['FCKeditor1'];
	$cms1=str_replace(" \ ", " ",base64_encode($cms));
	$cmsid=$_REQUEST['cmsid'];
	$cmsdt=date('Y-m-d');
	
	$csql="select * from cms where cmsid=$cmsid ";
	$cres=mysql_query($csql, $lnk) or die (mysql_error());
	$crows=mysql_num_rows($cres);
	
	if ($crows!=0){
		$inssql="update cms set cms='$cms1', cmsdt='$cmsdt' where cmsid=$cmsid ";
		$insres=mysql_query($inssql, $lnk)or die (mysql_error());
		
		if ($insres){
			print "<meta http-equiv='refresh' content='0;URL=index.php'>";
		}
	
	}else{
		
		$inssql="insert into cms (cmsid, cms, cmsdt) values ($cmsid,'$cms1', '$cmsdt') ";
		$insres=mysql_query($inssql, $lnk) or die (mysql_error());
		
		if ($insres){
			print "<meta http-equiv='refresh' content='0;url=index.php'>";
		}
	
	}

}
?>