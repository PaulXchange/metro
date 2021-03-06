<?php
require_once '../library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>Admin - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/styles.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:#ECECEC;margin-top:50px;">
<header> 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">      <a href="/content/fifth-third/en.html" class="c-logo-link ">
            <picture>
                
                <source srcset="../img/logo.svg" media="(max-width: 1024px)">
                <source srcset="../img/logo.svg">
                <img srcset="../img/logo.svg" width="150" style="margin-left:50px" class="c-logo " alt="Fifth Third Bank">
            </picture>
            </a></a>
    </div>
    <ul class="nav navbar-nav" style="padding-left:50px">
      <li><a href="../index2.html">Back to Home</a></li>

    </ul>
  </div>
</nav>
</header>

<table width="900"  border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr style="background-color:#FFFFFF"> 
  <td><img src="../images/OnlineBanking-logo.png" /></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Admin Login ::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right">User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="txtUserName" type="text" class="box" id="txtUserName" size="20" maxlength="20"></td>
           </tr>
           <tr> 
            <td width="100" align="right">Password</td>
            <td width="10" align="center">:</td>
            <td><input name="txtPassword" type="password" class="box" id="txtPassword" size="20"></td>
           </tr>
		   
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value="Login Now ! "></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form>  <div style="font-size:0.9em"> Protect Yourself
Fifth Third Bank takes the security and safety of our customers personal and confidential information very seriously, and your trust in us is extremely important. We want to do what we can to help you guard against disclosure of personal or financial information that could lead to unauthorized use of your account or to identify theft. Privacy & Security</div></td>
    </tr>
   </table></td>
 </tr>
</table>


<p>&nbsp;</p>
</body>
</html>
