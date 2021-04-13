<?php

namespace Valarep\controllers;

use Valarep\View;

class WelcomeController{
    public static function welcome($page){
        View::setTemplate('welcome');
        View::bindVariable('page', $page);
        View::display();
    }
}