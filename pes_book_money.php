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
.style7 {font-size: 18px}
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
.style9 {font-size: 14px; color: #99FFFF; text-decoration: none; padding: 10px; font-family: "Times New Roman", Times, serif;}
body {
	background-color: #CCCCCC;
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
  
    <td><table width="94%" height="959" border="0" cellpadding="1" cellspacing="10" bordercolor="#FFFFFF">
      <tr>
        <td width="555" height="1084" rowspan="2" align="left" valign="top" bgcolor="#000000" class="foter"><p align="center">TICKETING</p>
		
          <form id="form1" name="form1" method="post" action="pes_booked.php">
            <p>
              <label></label>
              Class : &nbsp;&nbsp;&nbsp;&nbsp;Platinum</p>
                    <p>Stand : East Stand                    
                    <p>Price : Rs.1000                    
                    <p>Seat_no : <?php 
					              $con=mysqli_connect("localhost","root","mumbaiindians","ticketing");
					              $t=mysqli_query($con,"select seat_no from booked");
								  while($t1=mysqli_fetch_array($t))
								  {
								  echo $t1["seat_no"]." ";
								  }
								  mysqli_close($con);
								?>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User&nbsp;Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                      <label>
                      <input type="text" name="Name" />
                      </label>
                    <p>Ticket Holders Name :
                      <label>
                        <input type="text" name="ticketholder" />
                        </label>
                    </p>
                    <p>&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; Email_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                      <label>
                        <input type="text" name="Email_id" />
                        </label>
                    </p>
                    <p> &nbsp;&nbsp;&nbsp;User Password&nbsp;&nbsp; :
                      <label>
                        <input type="password" name="pass" />
                        </label>
                    </p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account_no &nbsp;&nbsp;&nbsp;&nbsp;:
                      <label>
                        <input type="text" name="Account_no" />
                      </label>
                    </p>
                    <p>
                      <label>                      </label>
                    <p>
                      <label></label>
                      <label>
                      <input name="Make_Payment" type="submit" id="Make_Payment" value="Make_Payment" />
                      </label>
            </form>
          <p align="center">PLATINUM SEATING</p>
          <p align="center"><img src="stadium/vip.jpg" alt="vip" width="518" height="391" /></p></td>
          <td width="671" height="139" align="left" valign="top" bgcolor="#000000"><div align="left">
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


