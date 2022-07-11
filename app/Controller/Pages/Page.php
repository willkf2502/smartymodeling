<?php

namespace App\Controller\Pages;
use App\Utils\View;
class Page{

    /**
     * Method to return the content of menu
     * @return string
     */
    private static function getMenu(){
        return View::render('pages/menu');
    }

    //-----------------------------------------------------------------------------

    /**
     * Method to return the content of our generic page 
     * @return string
     */

    public static function getPage($title, $content){
        return View::render('pages/page',[
            'title' => $title,
            'menu' => self::getMenu(),
            'content' => $content
        ]);
    }
    
    //-----------------------------------------------------------------------------

}