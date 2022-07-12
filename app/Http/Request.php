<?php

namespace App\Http;

class Request{

    /**
     * en-us: HTTP Method who makes de request
     * pt-br: Metodo http que fez a requisição
     * @var string
     */

    private $httpMethod;

    /**
     * en-us: Page URI
     * pt-br: URI da página
     * @var string
     */
    private $uri;

    /**
     * en-us: URL Params received from GET ($_GET)
     * pt-br: Parametros recebidos do metodo GET ($_GET)
     * @var array
     */
    private $queryParams = [];

    /**
     * en-us: Variables received on post page ($_POST)
     * pt-br: Variáveis recebidas no metodo POST ($_POST)
     * @var array
     */

     private $postVars = [];

     /**
     * en-us: Headers received from request
     * pt-br: Cabeçalhos recebidos na requisição
     * @var array
     */

    private $headers = [];

    /**
     * en-us: Class constructor
     * pt-br: Construtor da Classe
     */
    public function __construct(){
        $this->queryParams  = $_GET ?? [];
        $this->postVars     = $_POST ?? [];
        $this->headers      = getallheaders();
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri          = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * en-us: Encapsulated method to return httpMethod
     * pt-br: Metodo responsável por retornar o método http da função
     * @return string
     */
    public function getHttpMethod(){
        return $this->httpMethod;
    }


}