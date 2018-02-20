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
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = $this->Host;
        $mail->Port = 465;
        $mail->Username = $this->Username;
        $mail->Password = $this->Password;

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