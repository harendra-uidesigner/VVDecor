<?php

    $to = "kharendra1992@gmail.com"; 
    $subject="Contact Form from Website";
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$_POST['email'];
		$message='<table width="100%" border="0" bordercolor="#eee" cellspacing="0" cellpadding="5" style="margin:0 auto;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;font-size:14px;color:#454545;line-height:30px;">
                <tr><td colspan="2" rowspan="1" align="center" bgcolor="#439cd5" style="font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><h2 style="font-size: 20px;color: #FFF;margin:0;font-weight:500;">Contact Us</h2></td></tr>
                <tr>
                <td style="width:180px;border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><strong>Name</strong></td>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;">'.$_POST['name'].'</td></tr>
                <tr>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><strong>Email</strong></td>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;">'.$_POST['email'].'</td>
                </tr>
                <tr>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><strong>Phone No.</strong></td>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;">'.$_POST['phone'].'</td>
                </tr>
                <tr>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><strong>Subject</strong></td>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;">'.$_POST['subject'].'</td>
                </tr>
                <tr>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;"><strong>Message</strong></td>
                <td style="border:1px solid #E5E5E5;font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif  !important;">'.$_POST['message'].'</td>
                </tr>
                 <tr>
                  <td colspan="2" align="center" valign="middle" bgcolor="#ACD1EC">On '.date('Y-m-d').' </td>
                </tr>
                </table>';
  
    $send = mail($to, $subject, $message, $headers);

?>