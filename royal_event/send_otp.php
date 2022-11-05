
<?php
$con = mysqli_connect('localhost', 'root');

if($con)
{
    echo "Connection is Establish !!";
}
else
{
    echo "Connection Failed !!";
}


mysqli_select_db($con, 'authentication');


$email = $_POST['email'];
$res=mysqli_query($con,"SELECT * FROM user1 WHERE email = '$email'");
$count=mysqli_num_rows($res);
if ($count>0) {

    $otp=rand(11111,99999);
    
    mysqli_query($con,"UPDATE user1 SET otp = '$otp' WHERE email = '$email'" );
    $html="Your OTP Verification code is ".$otp;
    smtp_mailer($email, 'OTP VERIFICATION', $html); 
    
    echo "yes";
    
    }
    
    else{
    
    echo "not exist";
    }

    function smtp_mailer ($to, $subject, $msg) {

        require_once("smtp/class.phpmailer.php");
        
        
        $mail = new PHPMailer();
        
        $mail->IsSMTP();
        
        $mail->SMTPDebug = 1;
        
        $mail->SMTPAuth = true;
        
        $mail->SMTPSecure = 'TLS';
        
        $mail->Host = "smtp.sendgrid.net";
        
        $mail->Port = 587;
        
        $mail->IsHTML(true);
        
        $mail->CharSet 'UTF-8';
        
        $mail->Username = "rathodnikita827@gmail.com":
        
        $mail->Password  = "7755954728iwantshanti";
        
        $mail->SetFrom("rathodnikita827@gmail.com");
        
        $mail->addAttachment("dummy.pdf");
        
        $mail->Subject = $subject;
        
        $mail->Body = $msg ;
        
        $mail->AddAddress ($to);
        
        if (!$mail->Send()) {
            return 0;
        }
        else
        {
            return 1;
        }

        






?>

















