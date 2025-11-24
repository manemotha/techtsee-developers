<?php
declare(strict_types=1);

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;
use Slim\App;

return function(App $app) {

    $app->get('/', function(Request $request, Response $response){

        $SERVICES_WE_DELIVER = [
            [
                'title'=>'System Architecture & Full-Stack Engineering',
                'description'=>'Designing end-to-end systems with clean data flow, minimal overhead, and predictable behavior. Frontend → Logic →Backend engineered as one coherent pipeline.',
                'icon'=>'code-window.png'
            ],
            [
                'title'=>'API Design & Integration',
                'description'=>'Building REST and real-time interfaces that are stable, welldocumented, and secure. Clean contracts. Reliable responses. Zero ambiguity.',
                'icon'=>'api-cloud.png'
            ],
            [
                'title'=>'Backend Development & Automation',
                'description'=>'Server logic, databases, background workers, schedulers, and internal tooling. We turn complex operations into deterministic processes.',
                'icon'=>'cloud-gear-automation.png'
            ],
            [
                'title'=>'Database Engineering & Data Management',
                'description'=>'Schema design, indexing, migrations, optimization, and secure storage strategies. Data handled with scientific discipline — nothing sloppy.',
                'icon'=>'database.png'
            ],
            [
                'title'=>'Security & Hardening',
                'description'=>'Authentication, access control, threat modeling, and risk mitigation. We lock down systems so they behave exactly as intended.',
                'icon'=>'shield-check.png'
            ],
            [
                'title'=>'Custom Tooling & Internal Systems',
                'description'=>'CLI utilities, dashboards, agents, and workflow tools built for precision, speed, and autonomy. If it doesn’t exist, we build it.',
                'icon'=>'customize.png'
            ],
        ];

        // TWIG VIEW
        $view = Twig::fromRequest($request);

        return $view->render($response, 'index.twig', [
            'URL_BASENAME'=> $_ENV['URL_BASENAME'],
            'SERVICES_WE_DELIVER'=>$SERVICES_WE_DELIVER,
            'request'=>$request
        ]);
    });

};
