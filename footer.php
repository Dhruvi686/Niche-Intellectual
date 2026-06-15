<table width="770" border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF" style="border:solid 1px #999999; border-left:none; border-right:none;">
  <tr>
    <td width="763" align="center" valign="top"><table width="660" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="89" align="center" valign="top" class="fmenu"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=11">Disclaimer</a></td>
        <td width="155" align="center" valign="top" class="fmenu"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=12">Terms &amp; Conditions</a></td>
        <td width="114" align="center" valign="top" class="fmenu"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=13">Privacy Policy</a></td>
        <td width="96" align="center" valign="top" class="fmenu"><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?pg=cont">Contact Us</a></td>
        <td width="80" align="center" valign="top" class="fmenu">
        <?php if (empty($_SESSION['usr'])) { ?>
        <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?pg=log">Login</a>
        <?php } else { ?>
        <a href="../logout.php">Logout</a>
        <?php }?>
        </td>
        <td width="80" align="center" valign="top" class="fmenu"><a href="http://mail.google.com/a/nicheipo.com" target="_blank">Email</a></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="770" border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
  <tr>
    <td width="330" align="left" valign="top">Developed by <a href="http://sanjitmukherjee.freehostia.com/" target="_blank">Sanjit Mukherjee</a></td>
    <td width="433" align="right" valign="top">&copy; <?php echo date('Y')?>, All rights reserved, NICHE, Intellectual Property Offices</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" height="30">&nbsp;</td>
  </tr>
</table>
