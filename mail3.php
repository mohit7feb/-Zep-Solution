<?php
// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","mail.zepsolution.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'info@zepsolution.com');

 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
//$course=$_POST['course'];
$address=$_POST['message'];


        $message = "
		<html><table  width=\"600px\"  align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style='; line-height:20px; border:1px solid #ededed; font-size:12px; font-family:Arial, Helvetica, sans-serif; padding:10px 20px 20px 20px; background:#FFFFFF; color: #7e7e7e; '>
		<tr bgcolor='#ffcc33' ><td colspan=3 style='color:#fff; padding:10px;'><font size=\"+2\">EnQuiry Received From Zep Solution</font></td></tr>
		<tr><td colspan=3>&nbsp;</td></tr>
		<tr><td width=225 valign=\"top\"><strong>Name</strong></td><td width=19><div align=\"center\">:</div></td><td width=354 valign=\"top\" >$name</td></tr>
		
		<tr><td valign=\"top\"><strong>Email</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$email</td></tr>
		<tr><td valign=\"top\"><strong>Phone</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$phone</td></tr>
		<tr><td valign=\"top\"><strong>Course</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$course</td></tr>
		<tr><td valign=\"top\"><strong>Message</strong></td valign=\"top\"><td><div align=\"center\">:</div></td><td valign=\"top\">$address</td></tr>
		</table>
		</html>";

	$to="info@zepsolution.com";
	$from = "info@zepsolution.com"; 
	$subject ="Feedback Received ";
	$message = $message;
	$headers = 'From: no-reply@zepsolution.com' . "\r\n";
	$headers .= 'Reply-To: '.$name."\r\n";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


    if(mail ("$to", "$name", "$message", "$headers"))
	{ 
		echo"<script>alert ('Thank you for Contacting with Us. We will Catch You Soon');
		window.location='index.html';</script>";
	}
		?>
 
