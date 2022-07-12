<?php

namespace App\Controller\Pages;
use App\Utils\View;
class Page{

    /**
     * en-us: Method to return the content of menu
     * pt-br: Método que retorna a página com o menu
     * @return string
     */
    private static function getMenu(){
        return View::render('pages/menu');
    }

    //-----------------------------------------------------------------------------

    /**
     * en-us: Method to return the content of our generic page 
     * pt-br: Método que retorna o conteúdo da nossa pagina genérica
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