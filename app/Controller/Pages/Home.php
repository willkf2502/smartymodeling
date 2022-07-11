<?php

namespace App\Controller\Pages;
use App\Utils\View;

class Home extends Page{

    /**
     * Method to return the content of our home 
     * @return string
     */

    public static function getHome(){
        $content = View::render('pages/home',[
            'name' => 'Willian',
            'description' => 'MVC Test'
        ]);

        return parent::getPage('SMarty Modeling', $content);
    }

}