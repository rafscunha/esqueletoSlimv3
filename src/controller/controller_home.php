<?php

namespace src\controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$getHome = function (Request $request, Response $response, array $args){
    $this->logger->addInfo('Seção acessada');
    print_r($this);
    return $response->getBody()->write("Olá mundo!!");

};
