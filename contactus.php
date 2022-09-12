<?php
extract($_POST);


 require_once('class.phpmailer.php');
    require_once('class.smtp.php'); // optional, gets called from within class.phpmailer.php if not already loaded
    // $hodemail = strtolower($branch)."hodofsrit@gmail.com";
    echo '1';
    $mail = new PHPMailer(); // create a new object
    // $mail->IsSMTP(); // enable SMTP
    echo '2';
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "afake8159@gmail.com";
    $mail->Password = "hyderabadkcr";
   
     $mail->setFrom("venkat@trillionit.com", 'Inessa Technologies Private Limited.');

    $mail->Subject = "New Enquiry From Website";
    $mail->Body = "hello, Here's the graph generated";

   $content='<table width="368" border="0">  <tr>   <td width="207"><strong>Name</strong></td> <td width="21">:</td>  <td width="228">'.$Name.'</td> </tr><tr><td><strong>Mobile</strong></td> <td>:</td><td>'.$Mobile.'</td></tr>  <tr><td><strong>Email</strong></td> <td>:</td><td>'.$Email.'</td></tr><tr><td><strong>Message</strong></td><td>:</td><td>'.$Message.'</td></tr></table>';
   
    $mail->msgHTML($content);
    
    $mail->AddAddress('venkat@trillionit.com');
	 
	  
    
     if(!$mail->Send())
        {
            $error = $mail->ErrorInfo;
        // header('Location:sendmail.php?errormsg=There was an error in sending email '.$error);
        }
        else
        {
	      
        	 echo 'Message could not be sent.';
        }