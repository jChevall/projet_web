<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/**
 * Description of mail
 *
 * @author Enzo Blanchon
 */
class mail {
    public $Host;
    public $Username;
    public $Password;
    public $From;
    public $FromName;
    public $To;
    public $ToName;
    public $Title;
    public $Contents;
    
    public function __construct() {
        $this->Host =  "ssl0.ovh.net";
        $this->Username = "admin@oxee.fr";
        $this->Password = "";
    }
    
    public function send() {
        require 'mail/src/Exception.php';
        require 'mail/src/PHPMailer.php';
        require 'mail/src/SMTP.php';
        
        $mail = new PHPMailer(true);
        
        $mail->isHTML();
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = $this->Host; // sets GMAIL as the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->Username = $this->Username; // GMAIL username
        $mail->Password = $this->Password; // GMAIL password

        //Typical mail data
        $mail->AddAddress($this->To, $this->ToName);
        $mail->SetFrom($this->From, $this->FromName);
        $mail->Subject = $this->Title;
        $mail->Body = $this->Contents;

        try{
            $mail->Send();
            echo "Success!";
        } catch(Exception $e){
            //Something went bad
            echo "Fail - " . $mail->ErrorInfo;
        }
    }
}