<?php 
session_start();
$adm=$_SESSION['usr'];
if (empty($adm)){
print "<meta http-equiv='refresh' content='0;URL=../'>";
}
include ("../conn/conn.php");

mysql_select_db($db_name);

$pg=$_REQUEST['pg'];
if ($pg=="") $pg="cms";
$opg=$pg.".php";
$pref=$_SERVER['SCRIPT_NAME'];



?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrative Control Panel</title>
<link href="../css/cs1.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="center" valign="top"><table width="769" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td colspan="2" align="left" valign="top"><img src="../images/temp3_02.jpg" alt="" width="770" height="125" /></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="top" bgcolor="#003366">&nbsp;</td>
      </tr>
      <tr>
        <td width="190" align="left" valign="top"><?php require("menu.php"); ?></td>
        <td width="580" align="left" valign="top"><?php require("$opg"); ?></td>
      </tr>
    </table>
    <?php require("../footer.php"); ?>
    </td>
  </tr>
</table>
</body>
</html>
