<?php

namespace Component;
use Core\BaseComponent;
require_once 'component/core/basecomponent.php';

class HeaderComponent extends BaseComponent
{
    private $id = "";

    public function render()
    {
        $this->id = uniqid("header-");
        echo "<hearder id='$this->id'>Formulaire de contact : </hearder>";
    }
}