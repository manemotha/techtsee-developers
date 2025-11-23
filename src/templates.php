<?php
declare(strict_types=1);

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\App;

return function(App $app) {

    $app->get('/', function(Request $request, Response $response){
        // TWIG VIEW
        $view = Twig::fromRequest($request);

        return $view->render($response, 'index.twig', [
            'URL_BASENAME'=> $_ENV['URL_BASENAME'],
            'request'=>$request
        ]);
    });

};
