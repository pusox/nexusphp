<?php
require "../include/bittorrent.php";
dbconn();
loggedinorreturn();
if (get_user_class() < UC_SYSOP)
stderr("Sorry", "Access denied.");
stdhead("Add Upload", false);
?>
<table class=main width=737 border=0 cellspacing=0 cellpadding=0><tr><td class=embedded>
<div align=center>
<h1>Add upload to all staff members and users:</a></h1>
<form method=post action=takeamountupload.php>
<?php

if (isset($_GET["returnto"]) || $_SERVER["HTTP_REFERER"])
{
?>
<input type=hidden name=returnto value="<?php echo htmlspecialchars($_GET["returnto"]) ? htmlspecialchars($_GET["returnto"]) : htmlspecialchars($_SERVER["HTTP_REFERER"])?>">
<?php
}
?>
<table cellspacing=0 cellpadding=5>
<?php
if (isset($_GET["sent"]) && $_GET["sent"] == 1) {
?>
<tr><td colspan=2 class="text" align="center"><font color=red><b>Upload amount has been added and inform message has been sent.</font></b></tr></td>
<?php
}
?>
<tr><td class="rowhead" valign="top">Amount </td><td class="rowfollow"><input type=text name=amount size=10>&nbsp;(in GB)</td></tr>
<tr>
<td class="rowhead" valign="top">Add to</td><td class="rowfollow">
  <table style="border: 0" width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_PEASANT ?>">
      </td>
      <td style="border: 0">Peasant</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_USER ?>">
      </td>
      <td style="border: 0">User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_POWER_USER ?>">
      </td>
      <td style="border: 0">Power User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_ELITE_USER ?>">
      </td>
      <td style="border: 0">Elite User</td>
    </tr>
    <tr>
      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_CRAZY_USER ?>">
      </td>
      <td style="border: 0">Crazy User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_INSANE_USER ?>">
      </td>
      <td style="border: 0">Insane User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_VETERAN_USER ?>">
      </td>
      <td style="border: 0">Veteran User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_EXTREME_USER ?>">
      </td>
      <td style="border: 0">Extreme User</td>
    </tr>

    <tr>
      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_ULTIMATE_USER ?>">
      </td>
      <td style="border: 0">Ultimate User</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_NEXUS_MASTER ?>">
      </td>
      <td style="border: 0">Nexus Master</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_VIP ?>">
      </td>
      <td style="border: 0">VIP</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_UPLOADER ?>">
      </td>
      <td style="border: 0">Uploader</td>
    </tr>

    <tr>
      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_MODERATOR ?>">
      </td>
      <td style="border: 0">Moderator</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_ADMINISTRATOR ?>">
      </td>
      <td style="border: 0">Administrator</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_SYSOP ?>">
      </td>
      <td style="border: 0">SysOp</td>

      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_STAFFLEADER ?>">
      </td>
      <td style="border: 0">Staff Leader</td>
    </tr>

    <tr>
      <td style="border: 0" width="20"><input type="checkbox" name="clases[]" value="<?php echo UC_RETIREE ?>">
      </td>
      <td style="border: 0">Retire</td>

      <td style="border: 0">&nbsp;</td>
      <td style="border: 0">&nbsp;</td>
    </tr>
  </table>
</td>
</tr>
<tr><td class="rowhead" valign="top">Subject </td><td class="rowfollow"><input type=text name=subject size=82></td></tr>
<tr><td class="rowhead" valign="top">Reason </td><td class="rowfollow"><textarea name=msg cols=80 rows=5><?php echo $body ?? '' ?></textarea></td></tr>
<tr>
<td class="rowfollow" colspan=2><div align="center"><b>Operator:&nbsp;&nbsp;</b>
<?php echo $CURUSER['username']?>
<input name="sender" type="radio" value="self" checked>
&nbsp; System
<input name="sender" type="radio" value="system">
</div></td></tr>
<tr><td class="rowfollow" colspan=2 align=center><input type=submit value="Do It!" class=btn></td></tr>
</table>
<input type=hidden name=receiver value=<?php echo $receiver ?? ''?>>
</form>

 </div></td></tr></table>
<br />
NOTE: Do not user BB codes. (NO HTML)
<?php
stdfoot();
