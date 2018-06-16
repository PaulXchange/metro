<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $pageTitle; ?></title>

<link href="<?php echo WEB_ROOT;?>css/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>css/menu.css" rel="stylesheet" type="text/css">

<link href="<?php echo WEB_ROOT; ?>library/spry/tabbedpanels/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_ROOT; ?>library/spry/tabbedpanels/SpryTabbedPanels.js" type="text/javascript"></script>
<style>
body {background-color:#F8F8F8 !important;}
</style>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/offcanvas.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
     <link href="../assets/css/styles.css" rel="stylesheet">
      <link href="../css/styles2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
</head>
<body>

<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="table-condensed">
  <tr style="background-color:#FFFFFF">
    <td colspan="2"><img src="<?php echo WEB_ROOT; ?>images/OnlineBanking-logo.png"></td>
  </tr>
  <tr style="background-color:#7f92a4;height:10px;">
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr style="border-bottom:0px;">
    <td width="150" valign="top" class="navArea">
	<?php include('menu.php'); ?>
    </td>
    <td width="750" valign="top" class="contentArea">
		<table width="100%" border="0" cellspacing="0" cellpadding="20">
        <tr>
          <td>
			<?php
			require_once $content;	 
			?>
          </td>
        </tr>
      	</table>
	</td>
  </tr>
  <tr>
	<td class="contentArea" style="border-top:#999999 thin dashed;padding:20px;" colspan="2">
		<p style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px; margin-bottom:40px; text-align:center;">
	<small>Copyright © 2018 Fifth Third Bank, All Rights Reserved Member FDIC, Equal Housing Lender  </small>
		</p>
	</td>
  </tr>
</table>
</body>
</html>