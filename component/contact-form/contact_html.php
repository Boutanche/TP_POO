<?php
require_once './contact_PHPMailer.php';
?>
<form action="./index.php" method="post">
    <div>
        <label for="objet">Objet :</label>
        <input type="text" id="objet" name="object_message">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>