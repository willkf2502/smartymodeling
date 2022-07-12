<?php

namespace App\Controller\Pages;
use App\Utils\View;

class Home extends Page{

    /**
     * en-us: Method to return the content of our "home" 
     * pt-br: Método que retorna o conteúdo da nossa "home"
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