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
.style10 {	color: #00FF00;
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
        <td height="1084" align="left" valign="top" bgcolor="#000000" class="foter"><p align="center"><img src="stadium/icc.jpg" alt="icc" width="128" height="72" /></p>
          <p align="center">TICKETING</p>
          <form id="form1" name="form1" method="post" action="gns_booked.php">
            <p>
              <label></label>
            </p>
            <p align="center">              <span class="style10">India v/s Australia.<br />
  &nbsp;Time : 19:00 hrs <br />
                Format:T20<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date : 10 October 2013<br />
                Venue : Khandari Cricket Stadium 
                (Rajkot)</span></p>
            <p>Class : &nbsp;&nbsp;&nbsp;&nbsp;General </p>
            <p>Stand : North Stand                    
              <p>Price : Rs.800                    
              <p>Seat_no :<?php
					              $con=mysqli_connect("localhost","root","mumbaiindians","ticketing");
								  if(isset($_POST['Make_Payment']))
					              { 
								   $user=$_POST["Name"];
								   $go="false";
								   $go1="false";
								   $all_users=mysqli_query($con,"select user_name from bank");
								   while($all_users1=mysqli_fetch_array($all_users))
								   {
								    if($all_users1["user_name"]==$user)
								    {
									  $go1="true";
									}
					               } 
								   if($go1=="true")
								   {
								    $go2="false";
								    $password1=mysqli_query($con,"select password from bank where user_name='$user'");
								    while($password2=mysqli_fetch_array($password1))
								     {
								      $check_password=$password2["password"];
								      if($check_password==$_POST["pass"])
								      {
									    $go2="true";
										//echo "success g2";
									  }
									 }
									 if($go2=="true")
									 {
									  $acc_check1=$_POST['Account_no'];
								      $pass_check2=$_POST['pass'];
								       $user=$_POST["Name"];
								       $acc1=mysqli_query($con,"select acc_no from bank where user_name='$user'and password='$pass_check2'");
									   while($acc=mysqli_fetch_array($acc1))
									  { 
									   if($acc["acc_no"]==$acc_check1)
									   {
									    //echo "acc";
									    $go="true";
									    }
									   }
									   if($go=="true")
									   {
										$acc_check1=$_POST['Account_no'];
									    $bal=mysqli_query($con,"select balance from bank where acc_no='$acc_check1'");
									
									    while($c_bal=mysqli_fetch_array($bal))
									    {
									     $curr_bal=$c_bal["balance"];
									     if((int)$curr_bal>=800)
									     {
									      $upd=mysqli_query($con,"update bank set balance=balance-800 where acc_no='$acc_check1'");
					                      $t=mysqli_query($con,"select seat_no from booked");
								          while($t1=mysqli_fetch_array($t))
								          {
										     //echo "success";
								             echo $t1["seat_no"]." ";
											 $t2=$t1["seat_no"];
											 $w_ins=mysqli_query($con,"insert into booked_gns (seat_no) values ('$t2')");
											 $s1=mysqli_query($con,"INSERT INTO user_info_gns (Name,Email_id,Stand,seat_no,Class) VALUES ('$_POST[Name]','$_POST[Email_id]','North Stand','$t2','General')");
											 $w_rem=mysqli_query($con,"delete from booked where seat_no='$t2'");
											 echo "<br>";
											 echo "USER NAME : ".$_POST["Name"]."<br>";
											 echo "TICKET HOLDER'S NAME : ".$_POST["ticketholder"]."<br>";
											 echo "EMAIL ID : ".$_POST["Email_id"]."<br>";
											 echo "CLASS : GENERAL <br>";
											 echo "STAND : NORTH STAND <br>";
											 
											 
											 	 
											 require_once 'Mail.php';
$from="crickodile@gmail.com";
$subject="Hi!";
$body="CRICKODILE WOULD LIKE TO THANK YOU FOR USING OUR SERVICES FOR TICKET BOOKING
       
	   This is your ticket confirmation
".
"Seat No: " .$t1["seat_no"].
"
STAND : NORTH STAND".
"
CLASS : GENERAL" .
"
Ticket Holder's Name : ".$_POST["ticketholder"];
$to=$_POST["Email_id"];
$host="ssl://smtp.gmail.com";
$port="465";
$username="crickodile";
$password="crickodilefan4";
$headers=array ('From' => $from,'To' => $to,'Subject' => $subject);
$smtp=@ Mail::factory('smtp',array('host'=>$host,'port'=>$port,'auth'=>true,'username'=>$username,'password'=>$password));
$mail=@$smtp->send($to,$headers,$body);
if(@PEAR::isError($mail))
{
echo $mail->getMessage();
}
else
{echo "Sucessful";
}
								          }
														 	
									     }//end of while if
									   else
									   {
									     echo "Insufficient balance to buy ticket-->";
									     $t=mysqli_query($con,"select seat_no from booked");
								         while($t1=mysqli_fetch_array($t))
								          {
								             echo $t1["seat_no"]." ";
											 $t2=$t1["seat_no"];
											 
											 $w_rem=mysqli_query($con,"delete from booked where seat_no='$t2'");
								          }
									    }//end of while else
								       }//end of outer while
									  }//end of outer if
	
									  if($go=="false")
									  {
									    
										echo "Wrong account no.Cannot allocate you the ticket--> ";
									 $t=mysqli_query($con,"select seat_no from booked");
								      while($t1=mysqli_fetch_array($t))
								       {
								             echo $t1["seat_no"]." ";
											 $t2=$t1["seat_no"];
											 
											 $w_rem=mysqli_query($con,"delete from booked where seat_no='$t2'");
								       }
										
									  
									  } //end of else[i.e account no is wrong]

									 }//end of if($go2==true)
									 
									 if($go2=="false")
									 {
									 
									  echo "Wrong password.Cannot allocate you the ticket--> ";
									  $t=mysqli_query($con,"select seat_no from booked");
								      while($t1=mysqli_fetch_array($t))
								       {
								             echo $t1["seat_no"]." ";
											 $t2=$t1["seat_no"];
											 
											 $w_rem=mysqli_query($con,"delete from booked where seat_no='$t2'");
								       }
									 
									 }//end of password check
									 
								    }//end of if($go1==true)
									
									if($go1=="false")
									{
									   
									   echo "Wrong user name.Cannot allocate you the ticket--> ";
									   $t=mysqli_query($con,"select seat_no from booked");
								       while($t1=mysqli_fetch_array($t))
								       {
								             echo $t1["seat_no"]." ";
											 $t2=$t1["seat_no"];
											 
											 $w_rem=mysqli_query($con,"delete from booked where seat_no='$t2'");
								       }
									   
									
									}// end of user name check
									
									
								}//end of isset
								mysqli_close($con);
							echo "<br>";
							echo "You will receive a confirmation of the ticket on your mail within 24 hours.";
							echo "<br>";
							echo "Thank you for visiting our site.";
							echo "<br><br><br>";
							echo "In case of any discrepancies contact us at crickodile@gmail.com";
							echo "<br>";
							echo "Technical Expert : Mr.Akshat Bansal ---> 9920205664";
							?>
              <p>
              <p>
                <label></label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p>
              <p>
                      <label></label>
              <p>  
                      <label></label>
              </p>
          </form>          
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>          <p align="center">&nbsp;</p></td>
        </tr>
        
    </table></td></tr>
  <tr>
    <td bgcolor="#000000" class="foter"><div align="center"><!-- #BeginLibraryItem "/Library/foter.lbi" -->copyright &copy; 2013. &nbsp;&nbsp; cricodile.com <!-- #EndLibraryItem --></div></td>
  </tr>
</table>
</body>
</html>


