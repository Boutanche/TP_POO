<?php
require_once 'component/HeaderComponent.php';
require_once 'component/MainComponent.php';
require 'vendor/PHPMailer/src/Exception.php';
require  'vendor/PHPMailer/src/PHPMailer.php';
require  'vendor/PHPMailer/src/SMTP.php';

use Component\HeaderComponent;
use Component\MainComponent;
use vendor\PHPMailer\PHPMailer;
use vendor\PHPmailer\Exeption;

$header = new HeaderComponent();
$main = new MainComponent();

$header ->render();
$main ->render();

$dest = $_POST['user_mail'];
$objet = $_POST['object_message'];
$contenu = $_POST['user_message'];

sendmail($objet, $contenu, $dest);