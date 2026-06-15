<?php
include ("conn/conn.php");
mysql_select_db($db_name);

if ($_REQUEST['blog']){
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

	$sql="select * from account where user='$user' and pass='$pass'";
	$res=mysql_query($sql, $lnk) or die (mysql_error());
	$rows=mysql_num_rows($res);
	if ($rows==0){
		$msg="Incorrect User id or password";
	}else{
		$_SESSION['usr']=$user;
		print "<meta http-equiv='refresh' content='0;url=admin/'>";	
	}
}
?>

<form action="" method="post" enctype="multipart/form-data" name="frmlog">
  <table width="300" border="0" cellspacing="2" cellpadding="2" style="border:dotted 1px #FFFFFF">
    <tr>
      <td colspan="2" align="center" valign="top"><span style="color:#FF0000"><?php echo $msg ;?></span></td>
    </tr>
    <tr>
      <td width="128" align="left" valign="top" style="padding-left:3pt">User Id</td>
      <td width="156" align="left" valign="top"><input name="user" type="text" id="user" size="20" maxlength="25"></td>
    </tr>
    <tr>
      <td align="left" valign="top" style="padding-left:3pt">Password</td>
      <td align="left" valign="top"><input name="pass" type="password" id="pass" value="" size="20"></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="right" valign="top"><input  name="blog" type="submit" id="blog" value="Login"  accept="application/postscript"></td>
    </tr>
  </table>

</form>