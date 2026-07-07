<?php 
if ($_REQUEST['bchng']){
	
	$sql="update account set pass='".$_REQUEST['pass']."' ";
	$res=mysql_query($sql, $lnk) or die (mysql_error());
	if ($res){
		print "Your password is changed successfully. ";
	}else{
		print "Sorry your password is not changed.";
	}
}

?>
<form name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Set new password</td>
      <td><input name="pass" type="text" id="pass" size="20" maxlength="30"></td>
      <td><input type="submit" name="bchng" id="bchng" value="Set Password"></td>
    </tr>
  </table>
</form>
