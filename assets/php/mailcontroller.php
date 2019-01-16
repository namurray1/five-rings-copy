<?php 
ob_start();// turn on output buffering
include_once('phpmailer.php');// to send mail 
$mode = $_REQUEST['mode'];

if($mode=='contact'){
	  	
		$mail = new PHPMailer();
		$mail->Priority = 3; // COPY
		$mail->From = $_REQUEST['email'];
		$mail->FromName = ucwords($_REQUEST['fname'])." ".ucwords($_REQUEST['lname']);			
		$mail->Subject = "GYM Contact Us";
		$mail->AddAddress($_REQUEST['email'],"User");
		$mail->AddBCC("contact@srgit.com","Admin");
		$mail->Body = "";
		$mail->AltBody = "";
	  
	  	$body .= '
		
		<div style="width:800px; margin:0 auto">
  <table border="0" cellspacing="0" cellpadding="5" width="800" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; border:1px solid #cccccc; border-collapse:collapse">
    <tr>
      <td width="494"></td>
    </tr>
    <tr>
      <td align="left"><img src="http://www.srgit.biz/demo/gym/images/logo.png" width="150"></td>
    </tr>
    <tr>
      <td><hr style="opacity:0.3;" /></td>
    </tr>
    <tr>
      <td style="background:#EEEEEE; padding:10px 0" align="center"><strong style="font-size:17px">Date : '.date("F j, Y", strtotime(date("Y-m-d"))).' </strong></td>
    </tr>
    
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="5" width="100%" >
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px"><b>Hello ,</b></font></td>
		</tr>
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px">'.ucwords($_REQUEST['fname']).' '.ucwords($_REQUEST['lname']).' has contacted GYM Fitness.
</font></td>
	</tr>
          <tr>
            <td valign="middle"><p style="font-size:13px; margin-bottom:10px; margin-top:0;  padding-left:5px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:13px"><b>Contact details are as follows:</b></font></p>
              <table border="0" cellspacing="0" cellpadding="0" width="300">
                <tr>
                  <td valign="top"><table border="0" cellspacing="0" cellpadding="2" width="100%">
                      <tr>
           <td align="left" width="30%"><font face="Verdana" style="font-size:12px">Name : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px"> '.ucwords($_REQUEST['fname']).' '.ucwords($_REQUEST['lname']).'</font></th>
		</tr>';
		if(!empty($_REQUEST['email'])){
		$body .= '<tr>
           <td align="left" width="30%"><font face="Verdana" style="font-size:12px">Email : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['email'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['message'])){
		$body .= '<tr>
           <td align="left" width="30%"><font face="Verdana" style="font-size:12px">Message : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['message'].'</font></th>
		</tr>';
		}
		$body .= '<tr>
			<td colspan="2"><br />
			<font face="Verdana" style="font-size:12px" color="#666666"><b>Kind Regards,<br />
			<font face="Verdana" style="font-size:12px" color="#666666" >
			GYM FITNESS.</font></b>	
			</font>
			</td>
		</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			
			</table>
			</div> ';
			
		$mail->Body .= $body;
		$mail->Send();
		$mail->ClearAllRecipients();
		
		echo 1;
		exit();

}

if($mode=='subscriber'){
		//echo "abc";exit;
		$mail = new PHPMailer();
		$mail->Priority = 3; // COPY
		$mail->From = $_REQUEST['subsemail'];
		$mail->FromName = "GYM Fitness";			
		$mail->Subject = "GYM Subscribe";
		$mail->AddAddress($_REQUEST['subsemail'],"User");
		$mail->AddBCC("contact@srgit.com","Admin");
		$mail->Body = "";
		$mail->AltBody = "";
	  
	  	$body .= '
		<div style="width:800px; margin:0 auto">
  <table border="0" cellspacing="0" cellpadding="5" width="800" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; border:1px solid #cccccc; border-collapse:collapse">
    <tr>
      <td width="494"></td>
    </tr>
    <tr>
      <td align="left"><img src="http://www.srgit.biz/demo/gym/images/logo.png" width="150"></td>
    </tr>
    <tr>
      <td><hr style="opacity:0.3;" /></td>
    </tr>
    <tr>
      <td style="background:#EEEEEE; padding:10px 0" align="center"><strong style="font-size:17px">Date : '.date("F j, Y", strtotime(date("Y-m-d"))).' </strong></td>
    </tr>
    
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="5" width="100%" >
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px"><b>Hello ,</b></font></td>
		</tr>
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px">Thank you for subscribing. We will get back to you soon.
</font></td>
	</tr>
          <tr>
            <td valign="middle"><p style="font-size:13px; margin-bottom:10px; margin-top:0;  padding-left:5px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:13px"><b>Subscriber details are as follows:</b></font></p>
              <table border="0" cellspacing="0" cellpadding="0" width="300">
                <tr>
                  <td valign="top"><table border="0" cellspacing="0" cellpadding="2" width="100%">
                      <tr>
           <td align="left" width="30%"><font face="Verdana" style="font-size:12px">Email : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px"> '.$_REQUEST['subsemail'].'</font></th>
		</tr>
        <tr>
			<td colspan="2"><br />
			<font face="Verdana" style="font-size:12px" color="#666666"><b>From Gym Fitness auto-email</b><br />
			</font>
			</td>
		</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			
			</table>
			</div> ';
			
		$mail->Body .= $body;
		$mail->Send();
		$mail->ClearAllRecipients();
		
		echo 1;
		exit();

}
if($mode=='registration'){
		
		$mail = new PHPMailer();
		$mail->Priority = 3; // COPY
		$mail->From = $_REQUEST['regemail'];
		$mail->FromName = ucwords($_REQUEST['fullname']);			
		$mail->Subject = "GYM Class Registration";
		$mail->AddAddress($_REQUEST['regemail'],"User");
		$mail->AddBCC("contact@srgit.com","Admin");
		$mail->Body = "";
		$mail->AltBody = "";
	  
	  	$body .= '
			
		<div style="width:800px; margin:0 auto">
  <table border="0" cellspacing="0" cellpadding="5" width="800" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; border:1px solid #cccccc; border-collapse:collapse">
    <tr>
      <td width="494"></td>
    </tr>
    <tr>
      <td align="left"><img src="http://www.srgit.biz/demo/gym/images/logo.png" width="150"></td>
    </tr>
    <tr>
      <td><hr style="opacity:0.3;" /></td>
    </tr>
    <tr>
      <td style="background:#EEEEEE; padding:10px 0" align="center"><strong style="font-size:17px">Date : '.date("F j, Y", strtotime(date("Y-m-d"))).' </strong></td>
    </tr>
    
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="5" width="100%" >
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px"><b>Hello ,</b></font></td>
		</tr>
      <tr>
			<td colspan="2"><font face="Verdana" style="font-size:12px">'.ucwords($_REQUEST['fullname']).' has registered Gym Fitness.
</font></td>
	</tr>
          <tr>
            <td valign="middle"><p style="font-size:13px; margin-bottom:10px; margin-top:0;  padding-left:5px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:13px"><b>Registration details are as follows:</b></font></p>
              <table border="0" cellspacing="0" cellpadding="0" width="300">
                <tr>
                  <td valign="top"><table border="0" cellspacing="0" cellpadding="2" width="100%">
                      <tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Name : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px"> '.ucwords($_REQUEST['fullname']).'</font></th>
		</tr>';
		if(!empty($_REQUEST['gender'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Gender : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['gender'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['regemail'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Email : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['regemail'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['address'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Address : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['address'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['phone'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Phone : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['phone'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['dob'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Date Of Birth : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['dob'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['country'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Country : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['country'].'</font></th>
		</tr>';
		}
		if(!empty($_REQUEST['meal'])){
		$body .= '<tr>
           <td align="left" width="40%"><font face="Verdana" style="font-size:12px">Meal Preference : </font></th>
           <td align="left"><font face="Verdana" style="font-size:12px">'.$_REQUEST['meal'].'</font></th>
		</tr>';
		}$body .= '<tr>
			<td colspan="2"><br />
			<font face="Verdana" style="font-size:12px" color="#666666"><b>Kind Regards,<br />
			<font face="Verdana" style="font-size:12px" color="#666666" >
			GYM FITNESS.</font></b>	
			</font>
			</td>
			</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			</table></td>
			</tr>
			
			</table>
			</div> ';
			
		$mail->Body .= $body;
		$mail->Send();
		$mail->ClearAllRecipients();
		
		echo 1;
		exit();

}

?>