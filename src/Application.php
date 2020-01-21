<?php

namespace App;

use App\Classes\Form;
use App\Classes\InputElement;
use App\Classes\TextElement;

class Application
{
    public function run()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());

        $form->addElement($embed);

        var_dump($form->render());
    }
}
