<?php

namespace App\Utils;

class View{

    //-----------------------------------------------------------------------------

    /**
     * Method that returns the content of a view
     * @param string
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/views/'.$view.'.php';
        return \file_exists($file) ? \file_get_contents($file): '';
    }
    //-----------------------------------------------------------------------------

    /**
     * Method that returns a renderized view content
     * @param string $view
     * @param array $vars (string/numeric/boolean)
     * @return string
     */
    public static function render($view, $vars = []){
        //content of a view
        $contentView = self::getContentView($view);

        //get vars names
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        //return a rendered content
        return str_replace($keys,array_values($vars),$contentView);
    }
    //-----------------------------------------------------------------------------

}