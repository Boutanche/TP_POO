<?php


namespace Component;
use Core\BaseComponent;


class MainComponent extends BaseComponent
{
    public function render()
    {
        $myMain = include "./component/contact-form/contact_html.php";
        echo "<main>";
        $myMain;
        echo"</main>";
    }
}