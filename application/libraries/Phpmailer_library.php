<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Phpmailer_library
{

      public function load(){
            // Include PHPMailer library files
            require_once APPPATH.'third_party/PHPMailer/src/Exception.php';
            require_once APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
            require_once APPPATH.'third_party/PHPMailer/src/SMTP.php';

            $mail = new PHPMailer;
            return $mail;
      }
}











?>
