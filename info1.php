<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {
	color: #00FFFF;
	font-size: 24px;
}
.style6 {font-size: xx-large}
body,td,th {
	color: #00FFFF;
}
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 718px;
}
body {
	background-color: #CCCCCC;
}
.style10 {
	color: #00FF00;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="1024" height="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" align="center" valign="middle" bgcolor="#000000" class="style5"><img src="stadium/final.jpg" alt="final" width="1267" height="170" /></td>
  </tr>
  <tr bgcolor="#FF6600">
    <td height="30"><div align="right" class="link">
      <div align="right"><a href="files/home.php">Home</a><a href="files/ipl.php">&nbsp; IPL </a>&nbsp;<a href="ucc1.php">&nbsp;UCC</a> &nbsp;&nbsp; <a href="project/test.php">Test Cricket </a><a href="files/tty.php">&nbsp;&nbsp;  T20</a><a href="#"> </a>&nbsp;<a href="project/layout.php">&nbsp;ODI &nbsp; </a><a href="ranji/1st.php">RANJI TROPHY</a><a href="project/layout.php"> </a><a href="TermsConditions.php"> &nbsp;&nbsp;BOOK TICKETS</a></div>
    </div></td>
  </tr>
  <tr>
    <td><img src="" alt="" name="banner" width="4" height="0" id="banner" style="background-color: #0099FF" /></td>
  </tr>
  <tr>
  
    <td><table width="100%" height="959" border="0" cellpadding="1" cellspacing="10" bordercolor="#FFFFFF">
      <tr>
        <td width="363" height="1084" rowspan="2" align="left" valign="top" bgcolor="#000000" class="foter"><p align="center">TICKETING</p>
		
          <form id="form1" name="form1" method="post" action="info1.php">
            <p>
              <label></label>
            </p>
            <p align="center" class="style10">            ****NOTE****</p>
            <p align="center" class="style10">[ Before selecting the Class ]</p>
            <p align="center" class="style10">If you haven't created an account here earlier then please do so  and click on the button &quot;create_account&quot;</p>
            <p>&nbsp;&nbsp;User&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;:  
              <label>
                <input type="text" name="uuser_name" />
                </label>
            </p>
            <p>User Password :
              <label>
              <input type="password" name="upassword" />
              </label>
</p>
            <p>Account No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
              <label>
              <input type="password" name="u_acc_no" />
              </label>
            </p>
            <p>
              <label>
              <input name="create_account" type="submit" id="create_account" value="create_account" />
              </label>
            </p>
			<?php if(isset($_POST["create_account"]))
			       {
				     if(($_POST["uuser_name"]=="")||($_POST["upassword"]=="")||($_POST["u_acc_no"]==""))
					 {
					   echo "PLEASE FILL ALL THE FIELDS";
					 }
					 else
					 {
					 $con=mysqli_connect("localhost","root","mumbaiindians","ticketing");
					// mysqli_query($con,"insert into dummy_user (user_name,password) values ('$_POST[uuser_name]','$_POST[upassword]')");
					 $bal=rand(2000,3000);
					 mysqli_query($con,"insert into bank (user_name,acc_no,password,balance) values ('$_POST[uuser_name]','$_POST[u_acc_no]','$_POST[upassword]',$bal)");
				     mysqli_close($con);
					 }
				   }
			?>
            <p>Class :</p>
            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22" title="Platinum">
                <param name="BGCOLOR" value="" />
                <param name="movie" value="button_platinum1.swf" />
                <param name="quality" value="high" />
                <embed src="button_platinum1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
              </object>
            </p>
            <p align="center">[ PRICE  RANGE : Rs.1000 - Rs.2000 ]</p>
            <p align="center">&nbsp; </p>
            <p align="left">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="22" title="General">
                <param name="BGCOLOR" value="" />
                <param name="movie" value="button_general1.swf" />
                <param name="quality" value="high" />
                <embed src="button_general1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="22" ></embed>
              </object>
            </p>
            <p align="center">[ PRICE  RANGE : Rs.300 - Rs.800 ]</p>
          </form>
          <p align="center">&nbsp;</p></td>
          <td width="802" height="139" align="left" valign="top" bgcolor="#000000"><div align="left">
            <p class="style3">CREATED BY:</p>
            <p class="style3">AKSHAT BANSAL    AMITABH TIWARI</p>
            <p><span class="style3">JAY SHETH &nbsp; &nbsp;  RUSHIKESH </span><span class="style3">SHETE</span> &nbsp; &nbsp;</p>
          </div>
          <img src="stadium/stadium.jpg" alt="stadium" width="673" height="460" /></td>
        </tr>
        <tr>
          <td height="790" align="left" valign="top" bgcolor="#000000"><p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p></td>
      </tr>
    </table></td></tr>
  <tr>
    <td bgcolor="#000000" class="foter"><div align="center"><!-- #BeginLibraryItem "/Library/foter.lbi" -->copyright &copy; 2013. &nbsp;&nbsp; cricodile.com <!-- #EndLibraryItem --></div></td>
  </tr>
</table>
</body>
</html>


