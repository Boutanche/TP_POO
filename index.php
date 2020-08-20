<?php
require_once 'component/HeaderComponent.php';
require_once 'component/MainComponent.php';
require_once 'component/contact-form/SendMail.php';

use Component\HeaderComponent;
use Component\MainComponent;
use MailEngine\SendMail;


$header = new HeaderComponent();
$main = new MainComponent();

$header ->render();
$main ->render();

if (isset($_POST['formulaire'])){
    $dest = $_POST['user_mail'];
    $objet = $_POST['object_message'];
    $contenu = $_POST['user_message'];

    $mailNow = new SendMail();
    $mailNow ->sendMail($objet, $contenu, $dest);

}


